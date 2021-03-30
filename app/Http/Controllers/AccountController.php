<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\User;
use App\Account;
use Session;
use App\Http\Requests\SignupRequest;
use App\Iwatch;


class AccountController extends MainController
{
   
    public function index()
    {
       self::$ViewData['users'] = User::getUsers();
        //dd(self::$ViewData);
        return view('cms.users_index', self::$ViewData);
    }

    
    public function create()
    {
        self::$ViewData['option'] = User::getkind();
        self::$ViewData['countries'] = Iwatch::getCountries();
//dd(self::$ViewData);
        return view('cms.users_add', self::$ViewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        User::createuser($request);
        return redirect('cms/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$ViewData['user_id'] = $id;
       // dd(self::$ViewData);
        return view('cms.users_delete', self::$ViewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$ViewData['item'] = User::find($id)->toArray();
        self::$ViewData['option'] = User::getkind();
        //dd(self::$ViewData);
        return view('cms.users_edit', self::$ViewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request, $id)
    {
        User::update_item($request,$id);
        
        return redirect('cms/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('sm','User has been deleted!');
        return redirect('cms/users');
    }
}
