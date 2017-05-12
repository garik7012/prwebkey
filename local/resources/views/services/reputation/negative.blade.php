@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/reputation/">Управление репутацией</a></li>
        <li><a href="#">Комплексный продукт</a></li>
        <li><a href="/services/reputation/serm/">SERM</a></li>
        <li><a class="current-link-aside" href="/services/reputation/negative/">Работа с негативом</a></li>
        <li><a href="/services/reputation/monitoring/">Мониторинг</a></li>
        <li><a href="#">Исследования</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content reputation-monitoring">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/reputation/">Управление репутацией</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Работа с негативом</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Работа с негативом</h1>
            <div class="monitoring-descr">
                <p>Огромное количество отзывов о компаниях и услугах в интернете несут негативный окрас, поскольку людям чаще хочется поделиться своим негативным опытом, чем позитивными эмоциями. Скорее всего, и о Вашей компании в сети есть большое количество отрицательных упоминаний, портящих впечатление о ней. Прочитав их, потенциальный клиент, скорее всего, откажется от сотрудничества. Но, помимо этого, негативные упоминания очень часто оставляют не столько недовольные клиенты, как конкуренты, которые решили испортить репутацию вашей компании и подобным образом пытаются сформировать стойкое негативное мнение о Вас.<br>Дабы избежать подобных ситуаций, очень важно периодически проводить мониторинг своего информационного поля и соответствующим образом реагировать на негатив. Тогда удастся создать исключительно положительное мнение о компании.</p>
            </div>
            <h3>Как мы работаем с негативом?</h3>
            <div class="so-audit-descr">
                <p>При разработке стратегии нами используется многолетний опыт, полученный в сфере работы с репутацией различных крупных компаний, что помогает нам качественно определить, на какие из упоминаний следует наиболее оперативно дать ответы, какие удалить, а какие просто проигнорировать. После разработки наиболее эффективной стратегии и согласования ее, мы реагируем на упоминание.</p>
            </div>
            <h3>Работая с негативом мы:</h3>
            <div class="negative-we-box">
                <div class="border_around">
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Обнаруживаем и проводим анализ всех упоминаний, касающихся вашей компании в Интернете;</li>
                        <li><span>2.</span>Определяем их тональность (негативные, позитивные, нейтральные);</li>
                        <li><span>3.</span>Классифицируем все негативные отзывы и определяем, что было  причиной их появления;</li>
                        <li><span>4.</span>Разрабатываем наиболее эффективную стратегию реагирования;</li>
                        <li><span>5.</span>Оперативно реагируем на упоминания, в соответствии с выбранной стратегией и Вашими пожеланиями;</li>
                        <li><span>6.</span>Берем на себя обсуждение с администрацией интернет-ресурсов относительно удаления некорректной информации о вашей компании;</li>
                        <li><span>7.</span>Подготавливаем агентов влияния, официальные аккаунты для интернет-площадок;</li>
                        <li><span>8.</span>Подготавливаем агентов влияния, официальные аккаунты для интернет-площадок;</li>
                    </ul>
                </div>
            </div>
            <h3>В итоге мы получаем</h3>
            <div class="negative-recieve-box">
                <div class="border_around">
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Увеличение рейтинга вашей компании на наиболее популярных интренет-ресурсах;</li>
                        <li><span>2.</span>Создание положительного мнения о компании у целевой аудитории и потенциальных клиентов;</li>
                        <li><span>3.</span>Увеличение количества клиентов, которые выбирают Вашу компанию, не конкурента.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
