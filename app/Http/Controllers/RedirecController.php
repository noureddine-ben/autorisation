<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RedirecController extends Controller
{
public function redirect(){
    if (Auth::user() &&  Auth::user()->user_type == 1) {
        return view('dashboard');
    }
    else
    {
        return view('userdashboerd');

    }
}

}
