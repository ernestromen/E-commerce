<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Session;

class ProductsController extends MainController
{
   
    public function index()
    {
        self::$ViewData['products'] = Product::all()->toArray();
        return view('cms.products_index', self::$ViewData);
    }

    
    public function create()
    {
        self::$ViewData['categories'] = Categorie::all()->toArray();
        return view('cms.product_add', self::$ViewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::save_new($request);
        return redirect('cms/products');
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
        return view('cms.product_delete', self::$ViewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$ViewData['item'] = Product::find($id)->toArray();
        self::$ViewData['categories'] = Categorie::all()->toArray();
        return view('cms.product_edit', self::$ViewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        Product::update_item($request,$id);
        return redirect('cms/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Product::destroy($id);
       Session::flash('sm','Item has been deleted!');
       return redirect('cms/categories');
    }
}
