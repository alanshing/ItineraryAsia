<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\CreateRequest;
use App\Http\Requests\Page\EditRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()) {
            $pages = Page::defaultOrder()->withDepth()->simplePaginate(10);
        }

        return view('backend.pages.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderPages = Page::defaultOrder()->withDepth()->get();

        return view('backend.pages.create')->with('orderPages', $orderPages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {   
        $page = new Page;
        $page->title = $request['title'];
        $page->url = $request['url'];
        $page->content = $request['content'];
        Auth::user()->pages()->save($page);

        $this->updatePagesOrder($page, $request);

        return redirect()->route('pages.index')->with('success', "$request->title Page was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('backend.pages.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $orderPages = Page::defaultOrder()->withDepth()->get();

        return view('backend.pages.edit')->with('page', $page)->with('orderPages', $orderPages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Page $page)
    {
        if($response = $this->updatePagesOrder($page, $request)) {
            return $response;
        }
        
        $page->title = $request['title'];
        $page->url = $request['url'];
        $page->content = $request['content'];
        $page->save();

        return redirect()->route('pages.index')->with('success', "$page->title Page was updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        
        return redirect()->route('pages.index')->with('success', "$page->title Page was deleted");
    }

    /**
    * Update Page Order when updated
    */
    Protected function updatePagesOrder(Page $page, Request $request) {
        if($request->has('order', 'orderPage')) {
            if($page->id == $request->orderPage) {
                return redirect()->route('pages.edit', ['page'=>$page->id])->with('error', 'Page cannot be ordered itself');
            }

            $page->updateOrder($request->order, $request->orderPage);
        }
    }
}
