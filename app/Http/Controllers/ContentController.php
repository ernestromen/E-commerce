<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Menu;
use Session;
use App\Content;

class ContentController extends MainController
{
   
    public function index()
    {
        self::$ViewData['contents'] = Content::all()->toArray();
       // dd(self::$ViewData);
        return view('cms.content_index', self::$ViewData);
    }

    
    public function create()
    {
        return view('cms.content_add', self::$ViewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        Content::save_new($request);
        return redirect('cms/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$ViewData['item_id'] = $id;
        return view('cms.content_delete', self::$ViewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$ViewData['item'] = Content::find($id)->toArray();
        //dd(self::$ViewData);
        return view('cms.content_edit', self::$ViewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id)
    {
        Content::update_item($request,$id);
        return redirect('cms/content');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Content::destroy($id);
       Session::flash('sm','Item has been deleted!');
       return redirect('cms/content');
    }
}
