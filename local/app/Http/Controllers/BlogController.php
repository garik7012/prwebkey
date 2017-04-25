<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('pages.blog', ['blogs' => $blogs]);
    }

    public function showArticle($id) {
        $article = Blog::findOrFail($id);
        return view('pages.single', ['article' => $article]);
    }
}
