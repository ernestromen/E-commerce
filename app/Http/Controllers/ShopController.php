<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use DB;
use Cart;
use Session;
use App\Order;



class ShopController extends MainController
{
    
    public function categories(){
      
self::$ViewData['categories']=Categorie::all()->toArray();
        self::$ViewData['page_title'].='Shop categories';
   
       // dd(self::$ViewData);

        return view('categories',self::$ViewData);
    }

    public function products($curl){
  
//Cart::clear();
        Product::getProducts($curl,self::$ViewData);
        self::$ViewData['categories']=Categorie::all()->toArray();
        


        return view('products',self::$ViewData);
    }
    
    public function item($curl, $purl){
        Product::getProducts($curl,self::$ViewData);

        self::$ViewData['categories']=Categorie::all()->toArray();

if($product = Product::where('purl','=', $purl)->first()){

    $product=$product->toArray();
}else{
    abort(404);

}
self::$ViewData['page_title'] .= $product['ptitle'];
self::$ViewData['item'] = $product;
return view('item', self::$ViewData);

    }

    public function addToCart(Request $request){

Product::addToCart($request['pid']);

    }
    public function cart(){

self::$ViewData['page_title'] .= 'Shop Cart Page';
$cart = Cart::getContent()->toJson();
$cart = json_decode($cart, true);
sort($cart);
self::$ViewData['cart'] = $cart;

return view('cart', self::$ViewData);

    }
    public function clearCart(){

Cart::clear();
return redirect('shop/cart');

    }
    public function removeItem($pid){
Cart::remove($pid);
return redirect('shop/cart');


    }

    public function updateCart(Request $request){

Product::updateCart( $request['pid'],$request['op']);

    }
    public function orderNow(){

        if(Cart::isEmpty()){
            return redirect('shop/cart');
        }
        if(! Session::has('user_id')){
return redirect('user/signup?rn=shop/cart');
        }
        Order::save_new();
        return redirect('shop');
    }

}


