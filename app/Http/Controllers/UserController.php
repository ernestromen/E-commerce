<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use App\Iwatch;
class UserController extends MainController
{
    public function getSignin(){
self::$ViewData['page_title'].= 'Signin Page';
return view('signin', self::$ViewData);

    }

    public function postSignin(SigninRequest $request){

if(User::validate($request['email'],$request['password'])){
    $rn = !empty($request['rn']) ? $request['rn'] : '';
return redirect($rn);

}else{

    self::$ViewData['page_title'].= 'Signin Page';
    self::$ViewData['sign_error'] = '* wrong email or password';
return view('signin', self::$ViewData);
}

    }

    public function logout(Request $request){
//Session::forget(['user_id','user_name','is_admin']); alternative way for removing unwanted session for logging out.
$request->session()->forget(['user_id','user_name','is_admin']);
return redirect('user/signin');
    }
  public function getSignup(Request $request){
    self::$ViewData['page_title'].= 'Signup Page';
    self::$ViewData['countries'] = Iwatch::getCountries();
    self::$ViewData['rn'] = !empty($request['rn']) ? '?rn='. $request['rn']: '';
    
    return view('signup', self::$ViewData);
  }  
  public function postSignup(SignupRequest $request){
User::save_new($request);
$rn = !empty($request['rn']) ? $request['rn'] : '';
return redirect($rn);

  }
}
