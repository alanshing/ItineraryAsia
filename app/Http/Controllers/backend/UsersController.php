<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()->isAdmin()) {
            $user = Auth::user();
            return view('backend.users.show')->with('user', $user);
        }
        return view('backend.users.index')->with('users', User::orderBy('name', 'ASC')->simplePaginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::user()->isAdmin()) {
            $user = Auth::user();
            return view('backend.users.show')->with('user', $user);
        }

        return view('backend.users.create')->with('user', new User);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::user()->isAdmin()) {
            $user = Auth::user();
            return view('backend.users.show')->with('user', $user);
        }

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile' => 'image|nullable|max:1999',
        ]);

        //Handle Profile Image
        if($request->hasFile('profile')) {
            $fileNameUploaded = $request->file('profile')->getClientOriginalName();
            $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
            $extension = $request->file('profile')->getClientOriginalExtension();
            $profile = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('profile')->storeAs('public/images/profile', $profile);
        } else {
            $profile = 'noimage.jpg';
        }

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'profile' => $profile,
        ]);

        $user->roles()->sync('2');

        return redirect()->route('users.index')->with('success', "$request->name was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if(!Auth::user()->isAdmin()) {
            $user = Auth::user();
            return view('backend.users.show')->with('user', $user);
        }

        return view('backend.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(!Auth::user()->isAdmin()) {
            $user = Auth::user();
            return view('backend.users.edit')->with('user', $user);
        }

        return view('backend.users.edit')->with('user', $user)->with('roles', Role::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(Auth::user()->isAdmin()) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'profile' => 'image|nullable|max:1999',
            ]);

            //Handle Profile Image
            if($request->hasFile('profile')) {
                $fileNameUploaded = $request->file('profile')->getClientOriginalName();
                $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
                $extension = $request->file('profile')->getClientOriginalExtension();
                $profile = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('profile')->storeAs('public/images/profile', $profile);
            }

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();

            if($request->hasFile('profile')) {
                if($request->profile != 'noimage.jpg') {
                    Storage::delete('public/images/profile'.$user->profile);
                    $user->profile = $profile;
                }
            }

            $user->roles()->sync($request->roles);
        } else {
            if(Auth::user()->id == $request->user->id) {
                $this->validate($request, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'profile' => 'image|nullable|max:1999',
                ]);
            } else {
                $this->validate($request, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'profile' => 'image|nullable|max:1999',
                ]);
            }
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
        }

        return redirect()->route('users.index')->with('success', "$user->name was updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        if($user->profile != 'noimage.jpg') {
            Storage::delete('public/images/profile'.$user->profile);
        }

        return redirect()->route('users.index')->with('error', "$user->name was deleted");
    }
}
