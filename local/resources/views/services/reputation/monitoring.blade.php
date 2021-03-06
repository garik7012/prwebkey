@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/reputation/">Управление репутацией</a></li>
        <li><a href="#">Комплексный продукт</a></li>
        <li><a href="/services/reputation/serm/">SERM</a></li>
        <li><a href="/services/reputation/negative/">Работа с негативом</a></li>
        <li><a class="current-link-aside" href="/services/reputation/monitoring/">Мониторинг</a></li>
        <li><a href="#">Исследования</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content reputation-monitoring">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/reputation/">Управление репутацией</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Мониторинг</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Мониторинг</h1>
            <div class="monitoring-descr">
                <p>Мониторинг информации о репутации компании в интернете – это гарантированная поддержка и охрана вашего корпоративного имиджа 24/7. Наша компания оказывает услуги по проведению регулярного мониторинга и проверки потенциально опасной информации способной нанести ущерб вашему рейтингу – а следовательно ухудшить рабочий процесс. Мы так же предоставляем конкретную информауию и ее источники о том что именно пишут реальные люди о вашей компании «здесь и сейчас». Мониторинг - это полезный инструмент управления репутацией любой компании и любого человека, в частности. </p>
            </div>
            <h3>Как мы это делаем?</h3>
            <div class="so-audit-descr">
                <p>Каждую минуту в интернет пространстве тысячи пользователей оставляют свои отзывы и комментарии касательно продукции а так же оказания услуг множества компаний. Но! Если этот контент носит негативный характер, то автоматически становятся триггером, ухудшающим вашу репутацию что в последствии, приводит к снижению потока клиентов. Мы же, в свою очередь располагаем возможностью и персоналом для грамотной корректировки репутации.</p>
                <p>Наша первоочередная задача – это защита ваших интересов на всех этапах работы. Мы располагаем доступом к инновационным технологиям поиска в системе которых используется технология, которая отслеживает изменения на любых ресурсах, включая сайты без RSS, фрагменты страниц, комментарии к публикациям и дискуссии на форумах. Полнотекстовый поиск по микро-блогам (Twitter). Индексирование социальных сетей : Facebook, VKontakte, GooglePlus. Мониторинг иностранных СМИ. Широкий охват региональных и зарубежных интернет СМИ: 250,000 ресурсов в 150-ти странах мира.<br/>По завершении мониторинга мы предоставляем собранную информацию вам чтобы вы сами могли убедиться в том, что именно говорят о вас люди после чего определяем вашу целевую аудиторию.</p>
                <p>Таким образом результаты мониторинга можно использовать для создания индивидуальной стратегии направленно на существенное улучшение вашей репутации в интернет пространстве.</p>
                <p>Так же мы предоставляем подробнейший отчет обо всех реальных и возможных упоминаний о ваше компании по всему интернету что наглядно продемонстрирует эффективность вашей рекламной кампании при помощи графиков, списков и количества сообщений, распределенных в любом промежутке времени по каждой из ваших тематик.</p>
            </div>
            <div class="reputation-monitoring-box">
                <div class="border_around">
                    <div class="text-center-container">
                        <div class="container_inner">
                            При помощи мониторинга мы поможем вам определить не только настоящую, но и потенциальную клиентуру для вашей текущей деятельности. Любому пользователю достаточно будет только упомянуть название услуги или товара, который может предоставить ваша компания и в кратчайшие же сроки вы будете оповещение от нас.<br/>Наш мониторинг позволит вам расширить круг возможного сотрудничества с другими компаниями или убедить потенциального клиента о выгодных условиях покупки вашего товара.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
