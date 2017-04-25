@extends('layouts.master')
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next"><svg xmlns="http://www.w3.org/2000/svg"version="1.1" viewBox="0 0 240.823 240.823" >
<g>
	<path id="Chevron_Right_1_" d="M183.189,111.816L74.892,3.555c-4.752-4.74-12.451-4.74-17.215,0c-4.752,4.74-4.752,12.439,0,17.179   l99.707,99.671l-99.695,99.671c-4.752,4.74-4.752,12.439,0,17.191c4.752,4.74,12.463,4.74,17.215,0l108.297-108.261   C187.881,124.315,187.881,116.495,183.189,111.816z"/>
</g>
</svg></span>
            <span class="bread-current">Блог</span>
        </nav>
        <section class="page-section blog-single">
            <h1 class="page-title">{{$article->title}}</h1>
            <div class="blog-single__item">
                <div class="blog-single__img">
                    <img src="{{$article->preview}}" alt="preview">
                </div>
                <div class="blog-single__content">
                    <h4 class="title-underline blogs-item_title">{{$article->title}}</h4>
                    <p>{{$article->text}}</p>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
