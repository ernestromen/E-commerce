<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\User;
class CmsController extends MainController
{
    public function dashboard(){
return view('cms.dashboard', self::$ViewData);
    }

    public function orders(){
        self::$ViewData['orders'] = Order::getOrders();
        return view('cms.orders', self::$ViewData);
    }
}
    
    
