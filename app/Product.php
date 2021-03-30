<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Cart;
use Session;
use Image;


class Product extends Model
{
    static public function save_new($request){
        $image_name = 'default-image.jpg';
        $ex = ['png','jpeg','jpg','gif','bmp'];
        if ($request->hasFile('image') &&  $request->file('image')->isValid()){
           if(isset($_FILES['image']['name']) ){
           $file_info = pathinfo($_FILES['image']['name']);
           if(in_array(strtolower($file_info['extension']), $ex)){
if(isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])){
    $file = $request->file('image');
    $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
    $request->file('image')->move(public_path() . '/images', $image_name);
    $img = Image::make(public_path() . '/images/' . $image_name );
    $img->resize(240, null, function ($constraint) {
    $constraint->aspectRatio();
    });
    $img->save();
}
           }
           }
            }
        $product = new self();
       $product ->categorie_id = $request['categorie_id'];
       $product ->ptitle = $request['title'];
       $product ->particle = $request['article'];
       $product ->purl = $request['url'];
       $product ->pimage = $image_name;
       $product->price = $request['price'];
       $product->save();
       Session::flash('sm','Product saved!');
    }
static public function update_item($request,$id){
    $image_name = '';
    $ex = ['png','jpeg','jpg','gif','bmp'];
    if ($request->hasFile('image') &&  $request->file('image')->isValid()){
       if(isset($_FILES['image']['name']) ){
       $file_info = pathinfo($_FILES['image']['name']);
       if(in_array(strtolower($file_info['extension']), $ex)){
if(isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])){
$file = $request->file('image');
$image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
$request->file('image')->move(public_path() . '/images', $image_name);
$img = Image::make(public_path() . '/images/' . $image_name );
$img->resize(240, null, function ($constraint) {
$constraint->aspectRatio();
});
$img->save();
}
       }
       }
        }
    $product = self::find($id);
   $product ->categorie_id = $request['categorie_id'];
   $product ->ptitle = $request['title'];
   $product ->particle = $request['article'];
   $product ->purl = $request['url'];
  if($image_name){
    $product ->pimage = $image_name;
  }
   $product->price = $request['price'];
   $product->save();
   Session::flash('sm','Product updated!');
}

    static public function getProducts($curl, &$ViewData){


        $products= DB::table('products as p')
        ->join('categories as c','c.id','=','p.categorie_id')
        ->select('p.*','c.ctitle', 'c.curl')
        ->where('c.curl','=', $curl)
        ->paginate(3);
        if($products->count()==0){

            abort(404);
        }
      
    
        $ViewData['products']= $products;
        $ViewData['page_title'].= $products[0]->ctitle . ' products';

    }
    static public function addToCart($pid){
if(is_numeric($pid)){
if($product=self::find($pid)){

$product=$product->toArray();

if( ! Cart::get($pid)){

    Cart::add($pid, $product['ptitle'], $product['price'], 1, [ 'image' => $product['pimage'] ] );  
Session::flash('sm', $product['ptitle'] . ' was added to cart!');

                }
           }
       }
    }
    static public function updateCart($pid,$op){
if(is_numeric($pid)){
if(Cart::get($pid)){
if($op == 'minus'){
    Cart::update($pid, ['quantity' => -1, ]);


}else if($op == 'plus'){

    Cart::update($pid, ['quantity' => 1, ]);

}



}


}


    }
}


