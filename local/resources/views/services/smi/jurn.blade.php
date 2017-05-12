@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smi/">Работа со СМИ</a></li>
        <li><a href="/services/smi/">Комплексный продукт</a></li>
        <li><a class="current-link-aside" href="/services/smi/jurn/">Взаимосвязь с журналистами</a></li>
        <li><a href="/services/smi/public/">Публикации в интернет СМИ</a></li>
        <li><a href="/services/smi/blokir/">Блокировка информации в СМИ</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smi/">Работа со СМИ</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Взаимосвязь с журналистами</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Взаимосвязь с журналистами</h1>
            <div class="smi-jurn-box">
                <div class="border_around">
                    <div class="smi-jurn-box__text">
                        <p>У нас выстроенные годами взаимоотношения с журналистами, которые создают возможность для Ваших активных действий. Когда у Вас назревает информационный повод, наши специалисты могут сразу сделать звонок лояльному и хорошо знакомому журналисту (даже в вечерний час).</p>
                        <p>Мы трезво понимаем, какие цели достигает компания через сотрудничество с каждым конкретным изданием. Сотрудничать "для общего количества публикаций" непрофессионально.</p>
                        <p>Организация пресс-мероприятий позволяют журналистам в своих публикациях в полной мере прорекламировать компанию, её товары и услуги, корпоративные события и инновации.  Поэтому проведение мероприятий для СМИ  необходимы Вашего бизнеса.</p>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    </main>
@endsection
