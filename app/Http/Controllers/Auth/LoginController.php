<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowLoginform(){
        return view('auth.show_login_form');
    }
    public function login(Request $request){ //yeu cau
        $infor = $request -> only(['email','password']); //nhap vo
        if(Auth::attempt($infor)){ //lay het bien infor
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        $errors = [];
        if(!Auth::validate($infor)){ //xac nhan infor kh trong auth
            $errors['email']='Thông tin đăng nhập không chính xác';
        }
        return back()->withErrors($errors);
    }
}
