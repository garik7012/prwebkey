<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }
    public function keises() {
        return view('pages.keises');
    }
    public function clients(){
        return view('pages.clients');
    }
    public function business(){
        return view('pages.business');
    }
    public function contacts(){
        return view('pages.contacts');
    }
}
