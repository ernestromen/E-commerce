<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class PagesController extends MainController
{

    
   
    public function home(){
       self::$ViewData['page_title'].='Home Page';
        
      
return view('home',self::$ViewData);
    }
    public function content($url){

        self::$ViewData['contents'] = Content::getContent($url); 
        self::$ViewData['page_title'] .= !empty(self::$ViewData['contents'][0]->title) ? self::$ViewData['contents'][0]->title : 'Site Content';
        return view('content', self::$ViewData);
    }






}
