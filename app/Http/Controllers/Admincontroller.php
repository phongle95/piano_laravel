<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Admincontroller extends Controller
{
    public function login(){
        return view('PageAdmin.login.login');
    }

    public function postLogin(Request $request){

        if (Auth::attempt(['username' =>$request->username, 'password' =>$request->password])) {
            $value = $request->session()->put('username',$request->username);
            return redirect(route('PageAdmin.trangchu'));

        }
        else {

            return redirect(route('PageAdmin.login.login'))->with('thongbao','Tên tài khoản hặc mật khẩu không chính sác mời nhập lại');
        }
    }

    public function admin(){
        return view('PageAdmin.trangchu');
    }


    public function logout(){

        Auth::logout();
        return redirect()->route('PageAdmin.login.login');
    }


}
