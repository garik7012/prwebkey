@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/konsalting/">PR консалтинг</a></li>
        <li><a href="/services/konsalting/">Разработка стратегии</a></li>
        <li><a href="/services/konsalting/monitoring/">Мониторинг</a></li>
        <li><a class="current-link-aside" href="/services/konsalting/modelirovanie/">Моделирование ситуации</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content modelirovanie">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/konsalting/">PR консалтинг</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Моделирование ситуации</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Моделирование ситуации</h1>
            <div class="monitoring-descr">
                <p>Моделью считается изображение объекта, системы или идеи в отдельной форме. Она является упрощенным описанием определенной жизненной (управленческой) ситуации. В моделях обусловленным образом отображаются реальные события, обстоятельства и т. д.</p>
                <p>Моделирование является единственным на данный момент систематизированным методом просмотра возможностей будущего и определения вероятного последствия альтернативных решений и объективного их сравнения. Поэтому моделирование является механизмом процесса принятия решений в PR-деятельности.</p>
            </div>
            <div class="modelirovanie-box">
                <div class="border_around">
                    <h2>Формирование и принятие решений является творческим процессом, который объединяет:</h2>
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Выработку и постановку цели.</li>
                        <li><span>2.</span>Изучение проблемы на основе получаемой информации.</li>
                        <li><span>3.</span>Выбор и обоснование критериев эффективности (результативности) и возможных последствий принимаемого решения.</li>
                        <li><span>4.</span>Обсуждение со специалистами различных вариантов решения проблемы (задачи).</li>
                        <li><span>5.</span>Выбор и формулирование оптимального решения.</li>
                        <li><span>6.</span>Принятие решения.</li>
                        <li><span>7.</span>Конкретизацию решения для его исполнителей.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
