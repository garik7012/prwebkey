@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/internet-reklama/">Интернет реклама</a></li>
        <li><a href="/services/internet-reklama/kontekst/">Контекстная реклама</a></li>
        {{--<li><a href="/services/kontekst-reklama/agregator/">Товарные агрегаторы</a></li>--}}
        <li><a class="current-link-aside" href="/services/internet-reklama/target/">Таргетированная реклама</a></li>
        <li><a href="/services/internet-reklama/soc/">Реклама в соц сетях</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/internet-reklama/">Интернет реклама</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Таргетированная реклама</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Таргетированная реклама</h1>
            <div class="monitoring-descr">
                <p>Таргетированная реклама представляет собой объявления, которые становятся видны только для тех пользователей сети, которые подходят под требования заданные рекламодателем. Ее главное преимущество – возможность донести рекламный посыл именно тем, кому он будет интересен. Это намного увеличивает ее эффективность.<br/> Также она помогает в несколько раз сократить расходы на рекламную кампанию без какого-либо ущерба для целевого трафика. Это работает практически со всеми </p>
            </div>
            <div class="so-audit-need-box kontekst-target-bg">
                <div class="border_around">
                    <h2>Плюсы таргетированной рекламы</h2>
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Низкая стоимость переходов.</li>
                        <li><span>2.</span> Возможность обращения только к вашей целевой аудитории.</li>
                        <li><span>3.</span>Удобные аналитические инструменты.</li>
                        <li><span>4.</span>Возможность быстрой замены рекламы.</li>
                    </ul>
                </div>
            </div>

            <div class="so-audit-descr">
                <p>Наша компания занимается размещением и настраиванием таргетированной рекламы для всех социальных сетей: Вконтакте, Одноклассники, YouTube, Facebook, Мой Мир. Мы поможем вам грамотно настроить и разместить таргетироаванную рекламу в сети, чтобы она давала максимальные результаты при оптимальных ценах.</p>
            </div>
        </section>
    </div>
    </main>
@endsection
