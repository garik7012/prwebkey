<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Page;

class IndexController extends Controller
{
    public function index() {
        $blogs = Blog::latest()->take(3)->get();
        $pageseo = Page::where('link', '/')->get();
        return view('index', ['blogs' => $blogs, 'pageseo' => $pageseo[0]]);
    }
    public function keises() {
        $pageseo = Page::where('link', '/keises')->get();
        return view('pages.keises', ['pageseo' => $pageseo[0]]);
    }
    public function clients(){
        $pageseo = Page::where('link', '/clients')->get();
        return view('pages.clients', ['pageseo' => $pageseo[0]]);
    }
    public function business(){
        $pageseo = Page::where('link', '/business')->get();
        return view('pages.business', ['pageseo' => $pageseo[0]]);
    }
    public function contacts(){
        $pageseo = Page::where('link', '/contacts')->get();
        return view('pages.contacts', ['pageseo' => $pageseo[0]]);
    }
    public function showSuccessPage(){
        return view('actions.success');
    }

    public function test(){
        mail('garik7012@mail333.com', 'test', 'test message');
    }
}
