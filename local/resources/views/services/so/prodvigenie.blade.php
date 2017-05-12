@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/search-optimisation/">Поисковая оптимизация</a></li>
        <li><a class="current-link-aside" href="/services/search-optimisation/prodvigenie/">Продвижение сайтов</a></li>
        <li><a href="/services/search-optimisation/audit/">Поисковый аудит</a></li>
        <li><a href="/services/search-optimisation/education/">Обучение</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/search-optimisation/">Поисковая оптимизация</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Продвижение сайтов</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Продвижение сайтов</h1>
            <div class="monitoring-descr">
                <p>На сегодняшний день поисковое продвижение сайтов в Интернете имеет большие отличия по сравнению с тем, каким оно было еще несколько лет назад. Если раньше можно было «перебить» бюджет конкурентов, сосредотачиваясь на внешних факторах, и действуя несколько в ущерб внутреннему состоянию сайта, и поднять его в поисковых позициях буквально за считанные недели, то сегодня подобное уже не получиться.<br/>
                    Выходя из этого, сегодня раскрутка сайта в ТОП-10 по ключевым словам поисковых систем занимает около  четырех месяцев.  Данные сроки могут быть как выше, так и ниже, что зависти от авторитетности сайта, его состояния, возраста домена, тематики в целом и конкуренции продвигаемых фраз.<br/>
                    Здесь особенно стоит отметить важность для продвигаемого сайта уникального и интересного контента, поскольку именно он выступает главной составляющей современного эффективного и успешного продвижения.</p>
            </div>
            <div class="so-prodvigenie-box">
                <div class="border_around">
                    <h2>Наша программа продвижения сайтов имеет такие этапы:</h2>
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Изучение вашего бизнеса и полная внутренняя оптимизация.</li>
                        <li><span>2.</span>Улучшение позиций, увеличение трафика с поиска.</li>
                        <li><span>3.</span>Выход в ТОП по продвигаемым фразам, увеличение заказов.</li>
                        <li><span>4.</span>Проверка эффективности, подведение итогов и замеры конверсий.</li>
                        <li><span>5.</span>Работа с посадочными страницами, расширение списка продвигаемых фраз, укрепление позиций.</li>
                    </ul>
                </div>
            </div>


            <div class="so-audit-descr">
                <p>Обращайтесь к нам, и мы поможем качественно провести раскрутку Вашего сайта и добиться качественного и стабильного увеличения дохода с него.</p>
            </div>
        </section>
    </div>
    </main>
@endsection
