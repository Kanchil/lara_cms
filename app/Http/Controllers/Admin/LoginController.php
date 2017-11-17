<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Manager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        dd(Hash::make('sercet'));
        $name = 'admin';
        $password = '123456';
        if (Auth::attempt(['username' => $name, 'password' => $password])){
            return redirect()->intended('/');
        }else{
            return redirect()->intended('/');
        }

    }
}
