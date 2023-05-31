<?php

namespace App\Http\Controllers\Admin\User;

// use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index (){
        return view('Admin.User.Login', ['title' => 'Admin Draco']);
        // echo 123;
    }
}
