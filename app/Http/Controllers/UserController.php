<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function form()
    {
        return view('users.form');
    }
    public function history()
    {
        return view('users.history');
    }
}
