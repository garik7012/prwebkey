@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/search-optimisation/">Поисковая оптимизация</a></li>
        <li><a href="/services/search-optimisation/prodvigenie/">Продвижение сайтов</a></li>
        <li><a href="/services/search-optimisation/audit/">Поисковый аудит</a></li>
        <li><a class="current-link-aside" href="/services/search-optimisation/education/">Обучение</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/search-optimisation/">Поисковая оптимизация</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Обучение</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Обучение</h1>
            <div class="so-education-box">
                <div class="border_around">
                    <div class="text-center-container">
                        <div class="so-education__descr">
                            Мы предоставляем обучающую разовую консультацию по поисковой оптимизации. Наши специалисты быстро и качественно научат Вас, как проводить продвижение в поисковых системах, разберут вместе с Вами на конкретных примерах ошибки проектов конкурентов.
                            Специалисты нашей компании помогут понять, из чего состоит поисковая оптимизация, на какие вещи важно обращать внимание, работая с агентством и как его лучше контролировать.
                            Программа консультации всегда выстраивается согласно индивидуальному плану, который максимально учитывает потребности клиента. Обращайтесь к нам, и мы вместе обсудим Ваше обучение.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
