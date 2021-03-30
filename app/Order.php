<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;
class Order extends Model
{
    static public function getOrders(){
return DB::table('orders as o')
->join('users as u', 'u.id', '=','o.user_id')
->select('o.*','u.name')
->get()
->toArray();
    }
    static public function save_new(){
$cart = Cart::getContent()->toJson();
$cart = json_decode($cart,true);
$order= new self();
$order->user_id = Session::get('user_id');
$order->data = serialize($cart);
$order->total= Cart::getTotal();
$order->save();
Session::flash('sm','Your order saved');
Cart::clear();
    }
}
