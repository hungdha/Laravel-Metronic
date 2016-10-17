<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class LockScreenController extends Controller
{
    public function get(){
                
        // only if user is logged in
        if(\Auth::check()){
            \Session::put('locked', true);

            return view('locked');
        }

        return redirect('auth/login');
    }

    public function post(){
        // if user in not logged in 
        if(!\Auth::check())
            return redirect('auth/login');

        $password = \Input::get('password');

        if(\Hash::check($password,\Auth::user()->password)){
            \Session::forget('locked');
            return redirect('/home');
        }            
        return redirect('lockscreen');
    }
}