<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function dashboard(){
       return view('admin.dashboard');
    }

    public function login(){
        return view('admin.login');
    }

    public function check_login(Request $req){
        $data=$req->only('email','password');
        // $password = bcrypt('123456') ; dd($password); // lấy mã hóa mất khẩu 
        $check = Auth::attempt($data); // xác thực người dùng thủ công 
        if ($check) {
          return redirect()->route('admin')->with('ok','Chào mừng Admin ');
       }
       return redirect()->back()->with('no','Đăng nhập thất bại');
    }
}