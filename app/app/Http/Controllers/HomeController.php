<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
       return view('user.home');
    }
}
