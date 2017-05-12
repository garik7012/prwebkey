@extends('layouts.master')
@section('title', $article->title)
@section('keywords', $article->keywords)
@section('description', $article->description)
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/blog/">Блог</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">{{$article->title}}</span>
        </nav>
        <section class="page-section blog-single">
            <h1 class="page-title">{{$article->title}}</h1>
            <div class="blog-single__item">
                <div class="blog-single__img">
                    <img src="/{{$article->preview}}" alt="preview">
                </div>
                <div class="blog-single__content">
                    <h4 class="title-underline blogs-item_title">{{$article->title}}</h4>
                    <div class="clearcss">{!! $article->text !!}</div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
