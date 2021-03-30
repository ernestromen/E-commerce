<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,Hash,Session;
class User extends Model
{
    //sign in validation query
     static public function validate($email, $password){
$valid = false;
$user = DB::table('users as u')
->join('user_permissions as up', 'u.id', '=','up.uid')
->join('permissions as p','p.id','=','up.pid')
->select('u.*','p.kind','up.pid')
->where('u.email','=', $email)
->first();

if($user){
    if (Hash::check($password, $user->password)) {
        $valid = true;
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('sm','You are now logged in!');
        if($user->kind == 'Admin'){
Session::put('is_admin',true);


        }
    }
}
return $valid;
}
//signup page query
static public function save_new($request){
$user = new self();
$user->name = $request['name'];
$user->email = $request['email'];
$user->password = bcrypt($request['password']);
$user->country = $request['country'];
$user->save();
DB::table('user_permissions')->insert(
    ['uid' => $user->id, 'pid' => 2]
);
Session::put('user_name', $request['name']);
Session::put('user_id', $user->id);
Session::flash('sm','You are now signed up!');
}

 static public function getUsers(){
    return DB::table('users as u')
    ->join('user_permissions as up', 'u.id', '=','up.uid')
    ->join('permissions as p', 'p.id','=','up.pid')
    ->select('u.id','u.name','u.email','p.kind')
    ->where('u.id','>','2')
    ->get()
    ->toArray();
    
    }
    
  static public function update_item($request,$id){
        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
    DB::table('users as u')
    ->join('user_permissions as up', 'u.id', '=','up.uid')
    ->where('u.id','=',$id)
    ->update(['up.pid'=> $request['kind']]);
    
        $user->save();
        Session::flash('sm','User is updated!'); 
    }

    static public function getkind(){
    return DB::table('permissions as p')->get()->toArray();
    }
    static public function createuser($request){
       $user = new self();
$user->name = $request['name'];
$user->email = $request['email'];
$user->password = bcrypt($request['password']);
$user->country = $request['country'];
$user->save();
DB::table('user_permissions')->insert(
    ['uid' => $user->id, 'pid' => $request['kind']]
);
Session::put('user_name', $request['name']);
Session::put('user_id', $user->id);
Session::flash('sm','A new user has been created!'); 
    }
 
}