<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreateRequest;
use App\Http\Requests\Post\EditRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
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
            $posts = Post::orderBy('published_at', 'DESC')->simplePaginate(10);
        } else {
            $posts = Auth::user()->posts()->orderBy('published_at', 'DESC')->simplePaginate(10);
        }

        return view('backend.posts.index')->with('posts',$posts);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create')->with('tags', Tag::all())->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        //Handle Cover Image
        if($request->hasFile('cover')) {
            $fileNameUploaded = $request->file('cover')->getClientOriginalName();
            $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
            $extension = $request->file('cover')->getClientOriginalExtension();
            $cover = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('cover')->storeAs('public/images/cover', $cover);
        } else {
            $cover = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request['title'];
        $post->slug = $request['slug'];
        $post->body = $request['body'];
        $post->cover =  $cover;
        $post->published_at = $request['published_at'];
        Auth::user()->posts()->save($post);

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->route('posts.index')->with('success', "$post->title was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(Auth::user()->cant('update', $post)) {
            return redirect()->route('posts.index')->with('error', 'Unauthorized Page');
        }

        return view('backend.posts.edit')->with('post', $post)->with('tags', Tag::all())->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Post $post)
    {
        if(Auth::user()->cant('update', $post)) {
            return redirect()->route('posts.index')->with('error', 'Unauthorized Page');
        }

        //Handle Cover Image
        if($request->hasFile('cover')) {
            $fileNameUploaded = $request->file('cover')->getClientOriginalName();
            $fileName = pathinfo($fileNameUploaded, PATHINFO_FILENAME);
            $extension = $request->file('cover')->getClientOriginalExtension();
            $cover = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('cover')->storeAs('public/images/cover', $cover);
        }
        
        $post->title = $request['title'];
        $post->slug = $request['slug'];
        $post->body = $request['body'];

        if($request->hasFile('cover')) {
            if($request->cover != 'noimage.jpg') {
                Storage::delete('public/images/cover'.$post->cover);
                $post->cover = $cover;
            }
        }
        $post->published_at = $request['published_at'];
        $post->save();

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->route('posts.index')->with('success', "$post->title was updated");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(Auth::user()->cant('delete', $post)) {
            return redirect()->route('posts.index')->with('error', 'Unauthorized Page');
        }

        if($post->cover != 'noimage.jpg') {
            Storage::delete('public/images/cover'.$post->cover);
        }
        $post->delete();

        return redirect()->route('posts.index')->with('success', "$post->title was deleted");
    }
    
    /**
     * Froala Editor Image Upload
     */
    public function imageUpload(Request $request) {
        try {
            // File Route.
            $fileRoute = "public\storage\images\posts\\";
            $linkRoute = "/storage/images/posts/";
          
            $fieldname = "file";
          
            // Get filename.
            $filename = explode(".", $_FILES[$fieldname]["name"]);
          
            // Validate uploaded files.
            // Do not use $_FILES["file"]["type"] as it can be easily forged.
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
          
            // Get temp file name.
            $tmpName = $_FILES[$fieldname]["tmp_name"];
          
            // Get mime type.
            $mimeType = finfo_file($finfo, $tmpName);
          
            // Get extension. You must include fileinfo PHP extension.
            $extension = end($filename);
          
            // Allowed extensions.
            $allowedExts = array("gif", "jpeg", "jpg", "png", "svg", "blob");
          
            // Allowed mime types.
            $allowedMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/x-png", "image/png", "image/svg+xml");
          
            // Validate image.
            if (!in_array(strtolower($mimeType), $allowedMimeTypes) || !in_array(strtolower($extension), $allowedExts)) {
              throw new \Exception("File does not meet the validation.");
            }
          
            // Generate new random name.
            $name = sha1(microtime()) . "." . $extension;
            $fullNamePath = "C:\\xampp\htdocs\Laravel\ItineraryAsia\\". $fileRoute . $name;
            //$fullNamePath = dirname(__FILE__) . $fileRoute . $name;
          
            // Check server protocol and load resources accordingly.
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
              $protocol = "https://";
            } else {
              $protocol = "http://";
            }
          
            // Save file in the uploads folder.
            move_uploaded_file($tmpName, $fullNamePath);
          
            // Generate response.
            $response = new \StdClass;
            $response->link = $protocol.$_SERVER["HTTP_HOST"].$linkRoute . $name;
          
            // Send response.
            echo stripslashes(json_encode($response));
          
        } catch (Exception $e) {
            // Send error response.
            echo $e->getMessage();
            http_response_code(404);
        }
    }

    /**
     * Froala Editor Video Upload
     */
    public function videoUpload(Request $request) {
        try {
            // File Route.
            $fileRoute = "public\storage\\videos\posts\\";
            $linkRoute = "/storage/videos/posts/";
          
            $fieldname = "file";
          
            // Get filename.
            $filename = explode(".", $_FILES[$fieldname]["name"]);
          
            // Validate uploaded files.
            // Do not use $_FILES["file"]["type"] as it can be easily forged.
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
          
            // Get temp file name.
            $tmpName = $_FILES[$fieldname]["tmp_name"];
          
            // Get mime type. You must include fileinfo PHP extension.
            $mimeType = finfo_file($finfo, $tmpName);
          
            // Get extension.
            $extension = end($filename);
          
            // Allowed extensions.
            $allowedExts = array("mp4", "webm", "ogg");
          
            // Allowed mime types.
            $allowedMimeTypes = array("video/mp4", "video/webm", "video/ogg");
          
            // Validate file.
            if (!in_array(strtolower($mimeType), $allowedMimeTypes) || !in_array(strtolower($extension), $allowedExts)) {
              throw new \Exception("File does not meet the validation.");
            }
          
            // Generate new random name.
            $name = sha1(microtime()) . "." . $extension;
            $fullNamePath = "C:\\xampp\htdocs\Laravel\ItineraryAsia\\". $fileRoute . $name;
            //$fullNamePath = dirname(__FILE__) . $fileRoute . $name;
          
            // Check server protocol and load resources accordingly.
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
              $protocol = "https://";
            } else {
              $protocol = "http://";
            }
          
            // Save file in the uploads folder.
            move_uploaded_file($tmpName, $fullNamePath);
          
            // Generate response.
            $response = new \StdClass;
            $response->link = $protocol.$_SERVER["HTTP_HOST"].$linkRoute . $name;
          
            // Send response.
            echo stripslashes(json_encode($response));
          
        } catch (Exception $e) {
            // Send error response.
            echo $e->getMessage();
            http_response_code(404);
        }
    }
}
