<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Advertisement\CreateRequest;
use App\Http\Requests\Advertisement\EditRequest;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementsController extends Controller
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
        if(Auth::user()->isAdmin()) {
            $advertisements = Advertisement::orderBy('name','ASC')->simplePaginate(20);
        } else {
            $advertisements = Auth::user()->advertisements()->orderBy('name','ASC')->simplePaginate(20);
        }

        return view('backend.advertisements.index')->with('advertisements', $advertisements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.advertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        //Handle Image
        if($request->hasFile('content')) {
            $fileNameUploaded = $request->file('content')->getClientOriginalName();
            $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
            $extension = $request->file('content')->getClientOriginalExtension();
            $content = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('content')->storeAs('public/advertisements', $content);
        } else {
            $content = $request['content'];
        }

        $advertisement = new Advertisement;
        $advertisement->name = $request['name'];
        $advertisement->description = $request['description'];
        $advertisement->title = $request['title'];
        $advertisement->url = $request['url'];
        $advertisement->content = $content;
        $advertisement->published_at = $request['published_at'];
        $advertisement->ended_at = $request['ended_at'];
        Auth::user()->advertisements()->save($advertisement);

        return redirect()->route('advertisements.index')->with('success', "$advertisement->name was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('backend.advertisements.show')->with('advertisement', $advertisement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        if(Auth::user()->cant('update', $advertisement)) {
            return redirect()->route('advertisements.index')->with('error', 'Unauthorized Page');
        }

        return view('backend.advertisements.edit')->with('advertisement', $advertisement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Advertisement $advertisement)
    {
        if(Auth::user()->cant('update', $advertisement)) {
            return redirect()->route('advertisements.index')->with('error', 'Unauthorized Page');
        }

        //Handle Image
        if($request->hasFile('content')) {
            $fileNameUploaded = $request->file('content')->getClientOriginalName();
            $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
            $extension = $request->file('content')->getClientOriginalExtension();
            $content = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('content')->storeAs('public/advertisements', $content);
        }

        $advertisement->name = $request['name'];
        $advertisement->description = $request['description'];
        $advertisement->title = $request['title'];
        $advertisement->url = $request['url'];

        if($request->hasFile('content')) {
            Storage::delete('public/advertisements'.$advertisement->content);
            $advertisement->content = $content;
        }

        $advertisement->published_at = $request['published_at'];
        $advertisement->ended_at = $request['ended_at'];
        $advertisement->save();

        return redirect()->route('advertisements.index')->with('success', "$advertisement->name was updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        if(Auth::user()->cant('delete', $advertisement)) {
            return redirect()->route('advertisements.index')->with('error', 'Unauthorized Page');
        }

        Storage::delete('public/advertisements'.$advertisement->content);
        $advertisement->delete();

        return redirect()->route('advertisements.index')->with('success', "$advertisement->name was deleted");
    }
}
