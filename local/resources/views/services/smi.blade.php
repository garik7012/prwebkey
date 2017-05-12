@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smi/">Работа со СМИ</a></li>
        <li><a class="current-link-aside" href="/services/smi/">Комплексный продукт</a></li>
        <li><a href="/services/smi/jurn/">Взаимосвязь с журналистами</a></li>
        <li><a href="/services/smi/public/">Публикации в интернет СМИ</a></li>
        <li><a href="/services/smi/blokir/">Блокировка информации в СМИ</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smi/">Работа со СМИ</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Комплексный продукт</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Работа с СМИ</h1>
            <div class="konasalting-price-item smi-main-item">
                <div class="service-search-op_order__title">
                    <h2>Работа с СМИ</h2>
                </div>
                <div class="service-search-op_order__price">
                    <h2>Цена: договорная</h2>
                </div>
                <div class="lidogen-price-item__content">
                    <ul class="list_yeloow-mark">
                        <li><span>Составление планов по реализации информационной стратегии.</span></li>
                        <li><span>Составление, распространение пресс-релизов и освещение мероприятий проводимых организацией в СМИ.</span></li>
                        <li><span>Информирование СМИ о деятельности клиента: организационные изменения, участие в общественно значимых мероприятиях и проектах.</span></li>
                        <li><span>Организация совместно со СМИ общественных акций, подготовка программ на ТВ и радио.</span></li>
                        <li><span>Сотрудничество с главными редакторами изданий ( договориться о том, чтобы организации предоставляли отдельную полосу или заметку в газете)</span></li>
                        <li><span>Консультации о потенциальной реакции СМИ на предложенные решения.</span></li>
                        <li><span>Подготовка выступлений, или, по меньшей мере, пересмотр готовых речей и сообщений.</span></li>
                        <li><span>Анализ эффективности проведенного мероприятия и выработка рекомендаций на будущее.</span></li>
                        <li><span>Логистика приезжих журналистов.</span></li>
                        <li><span>Сотрудничество с организациями, осуществляющими защиту прав и интересов журналистов и СМИ в своем регионе.</span></li>
                        <li><span>Сотрудничество с пресс-службами общественных организаций и проведение совместных акций.</span></li>
                        <li><span>Организация брифингов, пресс-конференций. Формирование состава пресс-центра и организация его работы во время мероприятий.</span></li>
                        <li><span>Формирование круга “доверенных” журналистов и обозревателей, которые будут постоянно сотрудничать с Вами.</span></li>
                        <li><span>Подготовка и размещение информационных материалов и имиджевых статей, пресс-релизов, справок и других материалов, касающихся Вашей деятельности.</span></li>
                        <li><span>Организация интервью клиента для СМИ (перед публикацией интервью утверждать).</span></li>
                        <li><span>Консультации о потенциальной реакции СМИ на предложенные решения.</span></li>
                        <li><span>Отслеживание всех материалов вышедших в СМИ.</span></li>
                        <li><span>Создание архива. </span></li>
                        <li><span>Формирование базы данных СМИ и отслеживание изменений на рынке СМИ своего региона. </span></li>
                        <li><span>Аккредитация журналистов.</span></li>
                        <li><span>Сотрудничество с пресс-службами, департаментами по связям с общественностью органов власти в регионе.</span></li>
                        <li><span>Выпуск собственного печатного издания.</span></li>
                        <li><span>Участие в создании фирменного стиля, собственной рекламной продукции (бланки, визитки, плакаты, сувенирные календари, буклеты, брошюры и т.д., и т.п.).</span></li>
                    </ul>
                    <a href="#" class="show-modal-order" data-service="Работа с СМИ"><button>Заказать</button></a>
                </div>
            </div>
        </section>
    </div>
    </main>
    @include('layouts.modal')
@endsection
