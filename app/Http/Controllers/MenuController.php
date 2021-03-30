<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Menu;
use Session;

class MenuController extends MainController
{
   
    public function index()
    {
        return view('cms.menu_index', self::$ViewData);
    }

    
    public function create()
    {
        return view('cms.menu_add', self::$ViewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        Menu::save_new($request);
        return redirect('cms/menu');
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
        return view('cms.menu_delete', self::$ViewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$ViewData['item'] = Menu::find($id)->toArray();
        return view('cms.menu_edit', self::$ViewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        Menu::update_item($request,$id);
        return redirect('cms/menu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Menu::destroy($id);
       Session::flash('sm','Item has been deleted!');
       return redirect('cms/menu');
    }
}
