@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/reputation/">Управление репутацией</a></li>
        <li><a href="#">Комплексный продукт</a></li>
        <li><a class="current-link-aside" href="/services/reputation/serm/">SERM</a></li>
        <li><a href="/services/reputation/negative/">Работа с негативом</a></li>
        <li><a href="/services/reputation/monitoring/">Мониторинг</a></li>
        <li><a href="#">Исследования</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/reputation/">Управление репутацией</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">SERM</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">SERM</h1>
            <div class="monitoring-descr">
                <p>SERM – это повышение репутации Вашей компании в интернете при помощи ресурсов SEO. Мы создаем позитивное мнение о Вашей компании для потенциальных клиентов, которые хотят узнать о вас в поисковых системах. Используя данный инструмент можно не только эффективно бороться с негативной информацией, но и формировать в выдаче желаемую картину. Используя SERM, мы помогаем сформировать выдачу так, чтобы у вашей целевой аудитории повысилось доверие, и увеличилась узнаваемость вашей компании. На протяжении всех этапов нашей работы мы действуем, учитывая интересы Вашей компании. Определяем ключевые слова, по которым вашу компанию можно найти в интернете и формируем семантическое ядро запросов. Впоследствии проводится аудит выдачи, согласно Ваших критериев, обнаружение негативных страниц, в поисковых запросах и их вытеснение, с заменой на более положительные материалы о вашей компании.</p>
            </div>
            <div class="reputation-serm-box">
                <div class="border_around">
                    <h2>По окончанию нашей работы вы получаете:</h2>
                    <ul class="modelirovanie-items">
                        <li><span>1.</span>Полную информацию о ТОП-страницах , которые связаны с Вашей компанией в поисковиках;</li>
                        <li><span>2.</span>Положительную репутацию вашей компании в сети;</li>
                        <li><span>3.</span>Новых потенциальных клиентов;</li>
                        <li><span>4.</span>Семантическое ядро запросов.</li>
                    </ul>
                </div>
            </div>

            <div class="so-audit-descr">
                <p>В результате потенциальные клиенты видят только позитивные упоминания о компании, что увеличивает вероятность выбора именно Вашей компании и ряда конкурентов, которые будут иметь худшую  репутацию в сети. Это позволит привлечь больше клиентов и поддерживать положительное мнение о Вашей компании.</p>
            </div>
        </section>
    </div>
    </main>
@endsection
