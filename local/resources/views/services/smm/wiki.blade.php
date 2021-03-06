@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smm/">SMM</a></li>
        <li><a href="/services/smm/">Комплексный продукт</a></li>
        <li><a href="/services/smm/video/">Продвижение видео</a></li>
        <li><a class="current-link-aside" href="/services/smm/wiki/">Википедия</a></li>
        <li><a href="/services/smm/blogers/">Блоггеры</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content smm-blogers">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smm/">SMM</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Википедия</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Википедия</h1>
            <div class="monitoring-descr">
                <p>При своем запуске в 2001 году, Википедия мгновенно приобрела мировой статус общего справочного сайта. Возможность представления информации почти по любой из видов деятельности человека – является ее важнейшей особенностью и лучшим способом популяризации чего угодно. Общее количество статей на данном ресурсе составляет более сорока миллионов переведенные на большинство языков мира, и она является пятой в списке самых посещаемых сайтов интернета.</p>
                <p>Наша компания обладает обширным опытом в написании статей и знаниями необходимыми для ее публикации в любом из существующих ресурсов интернета и Википедии в частности. </p>
                <p>Мы предоставляем услуги по оценке, а также консультации по возможности публикации статьи о вашей деятельности и проводим масштабную работу с целью прохождения обязательных условий и получения требуемых лицензий, если ваша тема будет отвечать всем необходимым стандартам и лицензированию по условиям Википедии. </p>
                <p>После размещения статьи на Википедии мы считаем работу выполненной.</p>
            </div>
            <div class="smm-wiki-box">
                <div class="border_around">
                    <div class="text-center-container">
                        <div class="text-center-container_inner">
                            Википедия сейчас является самым крупным и наиболее популярным<br/> справочником в Интернете. По объёму сведений и тематическому<br/> охвату Википедия считается самой полной энциклопедией из<br/> когда-либо создававшихся за всю историю человечества.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
