<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginpageController extends Controller
{
    public function login(){
        return view('frontend.loginpage.login');
    }
}
