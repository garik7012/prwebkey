@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Блог</span>
        </nav>
        <section class="page-section blogs">
            <h1 class="page-title">блог</h1>
            <ul class="blogs-block">
                @foreach($blogs as $blog)
                <li class="blogs-block-item">
                    <div class="blogs-block-item__img">
                        <img src="{{$blog->preview}}" alt="preview">
                    </div>
                    <div class="blogs-block-item__content">
                        <h4 class="title-underline blogs-item_title">{{$blog->title}}</h4>
                        <p>{{$blog->anons}}</p>
                        <a href="/blog/{{$blog->id}}">Далее<span class="next-arrow">&#10095;</span></a>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </div>
    </main>
@endsection