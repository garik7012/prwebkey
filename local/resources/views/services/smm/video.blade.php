@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smm/">SMM</a></li>
        <li><a href="/services/smm/">Комплексный продукт</a></li>
        <li><a class="current-link-aside" href="/services/smm/video/">Продвижение видео</a></li>
        <li><a href="/services/smm/wiki/">Википедия</a></li>
        <li><a href="/services/smm/blogers/">Блоггеры</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smm/">SMM</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Продвижение видео</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">продвижение видео</h1>
            <div class="monitoring-descr">
                <p>Еще ни одно из популярных и вирусных видео не обретало своей популярности просто так. За каждым лайком на них скрыта многогранная и трудоемкая работа с лидерами мнений, площадками, оптимизацией под аудиторию. Работая не один год, мы имеем много опыта в этом и готовы помочь вам.<br>Мы поможем в продвижении вашего видео, учитывая тематику, площадки, требования к аудитории. В работе мы учитываем только те просмотры, которые пришли с нашего распространения. Каждый из них является живым, и мы отчитываемся за них.  Мы продвигаем разные проекты – от крупных известных брендов, до небольших проектов малого бизнеса. В результате удается получить от десятков до сотен тысяч просмотров роликов.</p>
            </div>
            <div class="smm-video-img">
                <img src="/img/smm-video1.jpg" alt="фото youtube">
            </div>
            <div class="smm-video-img">
                <img src="/img/smm-video2.jpg" alt="фото youtube">
            </div>
            <div class="monitoring-descr">
                <p>В отчетах вы можете легко ознакомиться с площадками, на которых осуществлялась работа, узнать, с каких из них было осуществлено наибольшее количество просмотров, увидеть срез аудитории относительно пола, возраста, оценить глубину и вирусность просмотра.</p>
            </div>
        </section>
    </div>
    </main>
@endsection
