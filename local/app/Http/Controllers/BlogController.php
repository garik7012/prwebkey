<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Page;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        $pageseo = Page::where('link', '/blog')->get();
        return view('pages.blog', ['blogs' => $blogs, 'pageseo' => $pageseo[0]]);
    }

    public function showArticle($id) {
        $article = Blog::findOrFail($id);
        return view('pages.single-blog', ['article' => $article]);
    }
}
