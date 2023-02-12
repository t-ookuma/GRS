<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        return view('reserves.index');
    }

    public function detail()
    {
        return view('reserves.detail');
    }

    public function form()
    {
        return view('reserves.form');
    }
}
