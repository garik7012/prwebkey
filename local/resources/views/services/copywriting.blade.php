@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/copywriting/">Копирайтинг</a></li>
        <li><a class="current-link-aside" href="/services/copywriting/">Комплексный продукт</a></li>
        <li><a href="/services/copywriting/napolnenie/">Наполнение контентом</a></li>
        <li><a href="/services/copywriting/public/">Составление публичной речи</a></li>
        <li><a href="/services/copywriting/reklam/">Написание рекламных текстов</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/copywriting/">Копирайтинг</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Комплексный продукт</span>
        </nav>
        <section class="page-section copywriting-main">
            <h1 class="page-title">Копирайтинг</h1>
            <div class="videomaking-prices">
                <ul class="videomaking-price-items">
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>«Студент»</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 6 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Ведение новостной ленты</span></li>
                                    <li><span>Ведение блога</span></li>
                                    <li><span>Тексты корпоративной направленности</span></li>
                                    <li><span>PR и рекламные тексты</span></li>
                                    <li><span>Спичрайтинг</span></li>
                                    <li><span>Тексты для брошюр, буклетов, листовок</span></li>
                                    <li><span>Тексты для презентаций</span></li>
                                    <li><span>Рерайтинг</span></li>
                                    <li><span>Корпоративный отзыв о работе компании</span></li>
                                    <li><span>Слоган</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Копирайтинг - «Студент»"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>«Креатив»</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 10 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Ведение новостной ленты</span></li>
                                    <li><span>Ведение блога</span></li>
                                    <li><span>Тексты корпоративной направленности</span></li>
                                    <li><span>PR и рекламные тексты</span></li>
                                    <li><span>Спичрайтинг</span></li>
                                    <li><span>Тексты для брошюр, буклетов, листовок</span></li>
                                    <li><span>Тексты для презентаций</span></li>
                                    <li><span>Рерайтинг</span></li>
                                    <li><span>Корпоративный отзыв о работе компании</span></li>
                                    <li><span>Слоган</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Копирайтинг - «Креатив»"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>«Профессионал»</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 12 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Ведение новостной ленты</span></li>
                                    <li><span>Ведение блога</span></li>
                                    <li><span>Тексты корпоративной направленности</span></li>
                                    <li><span>PR и рекламные тексты</span></li>
                                    <li><span>Спичрайтинг</span></li>
                                    <li><span>Тексты для брошюр, буклетов, листовок</span></li>
                                    <li><span>Тексты для презентаций</span></li>
                                    <li><span>Рерайтинг</span></li>
                                    <li><span>Корпоративный отзыв о работе компании</span></li>
                                    <li><span>Слоган</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Копирайтинг - «Профессионал»"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="copywriting-main-descr">
                <h2>В зависимости от назначения существуют различные типы текстов:</h2>
                <ul>
                    <li><span>SEO-копирайтинг (от search engine optimization в переводе с англ. поисковая оптимизация) — это написание текстов с ключевыми словами для поискового продвижения интернет-ресурсов.</span></li>
                    <li><span>Нейминг — придумывание названий для компаний, товаров, телепередач и пр.</span></li>
                    <li><span>Информационно-новостной материал — тексты, которые информируют о новых событиях и инновационных новинках.</span></li>
                    <li><span>Пресс-релиз — короткий анонс какого-либо события, которое интересно широкой общественности.</span></li>
                    <li><span>Продающие тексты, мотивирующие пользователей совершать покупки.</span></li>
                    <li><span>Информационно-рекламные статьи или скрытая реклама, в текстах подчеркиваются преимущества каких-либо товаров или услуг.</span></li>
                    <li><span>Блоговые тексты, как правило, пишутся в разговорном стиле от первого лица, где обсуждается, или освещается какое-либо событие.</span></li>
                </ul>
            </div>

        </section>
    </div>
    </main>
    @include('layouts.modal')
@endsection
