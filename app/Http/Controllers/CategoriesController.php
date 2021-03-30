<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;
use App\Categorie;
use Session;

class CategoriesController extends MainController
{
   
    public function index()
    {
        self::$ViewData['categories'] = Categorie::all()->toArray();
        return view('cms.categories_index', self::$ViewData);
    }

    
    public function create()
    {
        return view('cms.categories_add', self::$ViewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        Categorie::save_new($request);
        return redirect('cms/categories');
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
        return view('cms.category_delete', self::$ViewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$ViewData['item'] = Categorie::find($id)->toArray();
        return view('cms.category_edit', self::$ViewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
        Categorie::update_item($request,$id);
        return redirect('cms/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Categorie::destroy($id);
       Session::flash('sm','Item has been deleted!');
       return redirect('cms/categories');
    }
}
