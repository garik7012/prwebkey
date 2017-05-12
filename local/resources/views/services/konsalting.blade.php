@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/konsalting/">PR консалтинг</a></li>
        <li><a class="current-link-aside" href="/services/konsalting/">Разработка стратегии</a></li>
        <li><a href="/services/konsalting/monitoring/">Мониторинг</a></li>
        <li><a href="/services/konsalting/modelirovanie/">Моделирование ситуации</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/konsalting/">PR консалтинг</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Разработка стратегии</span>
        </nav>
        <section class="page-section konasalting">
            <h1 class="page-title">PR консалтинг</h1>
            <div class="konasalting-price-item">
                <div class="service-search-op_order__title">
                    <h2>PR консалтинг</h2>
                </div>
                <div class="service-search-op_order__price">
                    <h2>Цена: по договоренности</h2>
                </div>
                <div class="lidogen-price-item__content">
                    <ul class="list_yeloow-mark">
                        <li><span>Анализ текущего положения бренда</span></li>
                        <li><span>Цели и задачи PR-стратегии за конкретный временной период</span></li>
                        <li><span>Изучение целевой аудитории</span></li>
                        <li><span>Описание итогового результата</span></li>
                        <li><span>Определение набора эффективных PR-инструментов для работы</span></li>
                        <li><span>Составление контент-плана публикаций и плана проводимый онлайн-мероприятий</span></li>
                        <li><span>Разработка системы оценки результатов выполняемых действий</span></li>
                        <li><span>Бюджет на внедрение запланированных мероприятий</span></li>
                        <li><span>Составление списка инструментов для регулярного мониторинга эффективности работы</span></li>
                    </ul>
                    <a href="#" class="show-modal-order" data-service="PR консалтинг"><button>Заказать</button></a>
                </div>
            </div>
        </section>
    </div>
    </main>
    @include('layouts.modal')
@endsection
