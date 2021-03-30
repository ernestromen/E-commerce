<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    static public $ViewData= ['page_title'=>'ISHOEU |'];
    public function __construct(){
self::$ViewData['menu'] = Menu::all()->toArray();
        
    }
}
