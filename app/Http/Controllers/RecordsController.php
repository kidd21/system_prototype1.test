<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    //show profiling
    public function index() {
        return view('index');
    }

    //register page
    public function reg() {
        return view('register');
    }
}
