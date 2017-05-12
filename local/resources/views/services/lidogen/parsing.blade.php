@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/lidogen/">Лидогенерация</a></li>
        <li><a href="/services/lidogen/">Комплексный продукт</a></li>
        <li><a class="current-link-aside" href="/services/lidogen/parsing/">Парсинг данных</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/lidogen/">Лидогенерация</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Парсинг данных</span>
        </nav>
        <section class="page-section service-lidogen-parsing">
            <h1 class="page-title">Парсинг данных</h1>
            <p><strong>Парсер</strong> - это программа для автоматического сбора информации c веб-сайтов. Хотите собрать информацию о товарах интернет-магазина, контакты организаций, объявления по недвижимости, данные из соц. сети? Настройте новую кампанию с помощью мастера, нажмите кнопку Запуск и получите нужный результат.</p>
            <div class="service-lidogen-parsing-descr">
                <h2>Основные возможностями для сбора различной информации:</h2>
                <ol>
                    <li><span>Результаты выдачи поисковых систем, в первую очередь лидеров – Яндекса и Google.</span></li>
                    <li><span>Сбор адресов электронной почты.</span></li>
                    <li><span>Показатели сайтов с разных сервисов, которые затем можно использовать для сравнения и углубленного анализа.
</span></li>
                    <li><span>Сбор контента с определенных сайтов.
</span></li>
                    <li><span>Сбор информации с интернет магазинов, досок объявлений, новостных сайтов и так далее.</span></li>
                    <li><span>Сбор ссылок с сайта как внешних, так и внутренних.
</span></li>
                    <li><span>Проверка позиций сайта по определенным запросам в поисковых системах.</span></li>
                    <li><span>Сбор различной медийной информации, графики, аудиороликов, видеоматериалов.</span></li>
                </ol>
            </div>
        </section>
    </div>
    </main>
@endsection
