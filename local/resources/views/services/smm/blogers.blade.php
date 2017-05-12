@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smm/">SMM</a></li>
        <li><a href="/services/smm/">Комплексный продукт</a></li>
        <li><a href="/services/smm/video/">Продвижение видео</a></li>
        <li><a href="/services/smm/wiki/">Википедия</a></li>
        <li><a class="current-link-aside" href="/services/smm/blogers/">Блоггеры</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content smm-blogers">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smm/">SMM</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Блоггеры</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Блоггеры</h1>
            <div class="monitoring-descr">
                <p>Наша компания также предоставляет блогерские услуги и наполнение контентом при необходимости. Если вы, например, решили завести блог на конкретную тематику или скажем по конкретной идее и вам требуется поддержка рейтинга – мы поможем вам ежемесячно увеличивать оборот лайков, репостов, ретвитов и подписчиков вашей странички тем самым улучшая ваш рейтинг в локальном или мировом паблисити.</p>
                <p>Также мы можем помочь организовать ваш блог и правильно вести его на всех основных площадках будь то YouTube, Twitter, Instagram, Facebook, Vkontakte, Tumblr, Wordpress и прочие. Вся информация подбирается и полностью контролируется затем согласовывается с вами лично и тогда уже поступает на публикацию в положенном для нее заранее оговоренном ресурсе.</p>
            </div>
            <div class="smm-blogers-box">
                <div class="border_around">
                    <div class="text-center-container">
                        <div class="text-center-container_inner">
                            Для заработка на блоге нужно изменить свое фундаментальное<br/>
                            представлениео блогинге. В этом ключ для достижению <br/>
                            результата и главное требование для получение прибыли!
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
