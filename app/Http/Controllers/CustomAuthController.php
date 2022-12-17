<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        
        return view("auth.Login");

    }

    public function loginUser(Request $request)
    {
          $request->validate([
               'email'=>'required|email',
               'password'=>'required|min:4|max:12',
          ]);
       $user = User::where('email', '=', $request->email)->first();
       if($user){
          if(User::where($request->password, $user->password)){
              $request->session()->put('loginId',$user->id);
              return redirect('dashboard');
          }else{
            return back()->with('fail', 'Password not Macthes');
          }
       }else{
            return back()->with('fail','This email is not registered');
       }
        
    }

    public function registration()
    {
        return view("auth.Registration");
    }

    public function registerUser(Request $request)
    {
          $request->validate([
               'fullname'=>'required',
               'username'=>'required',
               'email'=>'required|email|unique:users',
               'password'=>'required|min:4|max:12',
          ]);
          $user = new User();
          $user->fullname = $request->fullname;
          $user->username = $request->username;
          $user->email = $request->email;
          $user->password = $request->password;
          $res = $user->save();
          if($res){
             return back()->with('success','You have registered successfully');
          }else{
               return back()->with('fail','Something Went Wrong');
          }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {

        session()->flush();

        return redirect('login');
    }

}
