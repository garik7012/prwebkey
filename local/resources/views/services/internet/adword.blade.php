@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/internet-reklama/">Интернет реклама</a></li>
        <li><a class="current-link-aside" href="/services/internet-reklama/kontekst/">Контекстная реклама</a></li>
        {{--<li><a href="/services/kontekst-reklama/agregator/">Товарные агрегаторы</a></li>--}}
        <li><a href="/services/internet-reklama/target/">Таргетированная реклама</a></li>
        <li><a href="/services/internet-reklama/soc/">Реклама в соц сетях</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/internet-reklama/">Интернет реклама</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Контекстная реклама</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Контекстная реклама</h1>
            <div class="monitoring-descr">
                <p>Мы активно используем наши возможности в работе с контекстной рекламой Google AdWords -флагманский рекламный проект Google и основной источник доходов компании, также предназначенный для работы в сотрудничестве со специальными компаниями таких как наша. Мы сориентированны на глубокой работе в данной области с одной целью – избавить вас от самостоятельно длинного и не особенно интересного процесса изучения подробностей и технических особенностей в контекстной рекламе. <br/> По аналогии с Google AdWords мы также работае с Яндекс.Директ – похожим рекламным ресурсом с огромным охватом целевой потребительской аудитории. Яндекс.Директ доказал свою полезность основываясь на достаточном количестве нюансов и отличий в способах предоставления качественной рекламы. </p>
            </div>
            <div class="kontekst-adword-box">
                <div class="border_around">
                    <div class="text-center-container"><p>Наша компания гарантирует значительный рост продаж для вашей тематики, а также избавит вас от своеобразных «трудностей перевода» при изучении работы с контекстной рекламой.</p></div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
