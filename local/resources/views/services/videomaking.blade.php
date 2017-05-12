@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/videomaking/">Видеопроизводство</a></li>
        <li><a class="current-link-aside" href="/services/videomaking/">Комплексный продукт</a></li>
        <li><a href="/services/videomaking/etaps/">Этапы производства</a></li>
        <li><a href="/services/videomaking/price/">Стоимость видеоролика</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/videomaking/">Видеопроизводство</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Комплексный продукт</span>
        </nav>
        <section class="page-section videomaking">
            <h1 class="page-title">Видеопроизводство</h1>
            <div class="videomaking-prices">
                <ul class="videomaking-price-items">
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>Видео. Инфографика</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 15 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Определение ЦА</span></li>
                                    <li><span>Разработка коцепции:</span>
                                        <ul>
                                            <li>Маркетолог</li>
                                            <li>Копирайтер</li>
                                            <li>Сценарист</li>
                                        </ul>
                                    </li>
                                    <li><span>Разработка персонажей:</span>
                                        <ul>
                                            <li>Моушн дизайнер</li>
                                            <li>Раскадровка</li>
                                            <li>Сториборд</li>
                                        </ul>
                                    </li>
                                    <li><span>Постобработка:</span>
                                        <ul>
                                            <li>Титрование</li>
                                            <li>Flat</li>
                                            <li>2D шейп графика</li>
                                        </ul>
                                    </li>
                                    <li><span>Сдача готового ролика</span></li>
                                    <li><span>Посев (опционально)</span></li>
                                    <li><span>Хранение исходников до 1 года</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Видеопроизводство - Видео. Инфографика"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>Видеопрезентация</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 20 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Для выставки</span></li>
                                    <li><span>Для тендера</span></li>
                                    <li><span>Для господрядчика</span></li>
                                    <li><span>Разработка креатива:</span>
                                        <ul>
                                            <li>Сценарист</li>
                                            <li>Копирайтер</li>
                                            <li>Маркетолог</li>
                                            <li>Сториборд</li>
                                        </ul>
                                    </li>
                                    <li><span>Производственный период:</span>
                                        <ul>
                                            <li>Поиск и выкуп графических материалов</li>
                                            <li>Монтаж</li>
                                            <li>Цветокоррекция</li>
                                        </ul>
                                    </li>
                                    <li><span>Озвучивание (выбор из 50 топовых дикторов)</span></li>
                                    <li><span>Титрование</span></li>
                                    <li><span>2D шейп графика</span></li>
                                    <li><span>3D графика (опционально)</span></li>
                                    <li><span>Сдача готового ролика</span></li>
                                    <li><span>Посев (опционально)</span></li>
                                    <li><span>Хранение исходников до 1 года</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Видеопроизводство - Видеопрезентация"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="videomaking-price-item">
                            <div class="service-search-op_order__title">
                                <h2>Видеоролики для ТВ.</h2>
                            </div>
                            <div class="service-search-op_order__price">
                                <h2>Цена: от 35 000 грн.</h2>
                            </div>
                            <div class="videomaking-price-item__content">
                                <ul class="list_yeloow-mark">
                                    <li><span>Определение ЦА</span></li>
                                    <li><span>Коммуникационная идея:</span>
                                        <ul>
                                            <li>Креативный директор</li>
                                            <li>Копирайтер</li>
                                            <li>Сценарист</li>
                                            <li>Маркетолог</li>
                                        </ul>
                                    </li>
                                    <li><span>Режисерский сценарий</span></li>
                                    <li><span>Съемочный период:</span>
                                        <ul>
                                            <li>Постановочная съемка</li>
                                            <li>База актеров более 300 человек</li>
                                            <li>Профессиональный видеооператор</li>
                                            <li>Режисер-постановщик</li>
                                            <li>Постобработка:</li>
                                            <li>Монтаж</li>
                                            <li>Цветокоррекция</li>
                                        </ul>
                                    </li>
                                    <li><span>Озвучивание (выбор из 50 топовых дикторов)</span></li>
                                    <li><span>Титрование</span></li>
                                    <li><span>2D шейп графика</span></li>
                                    <li><span>3D графика (опционально)</span></li>
                                    <li><span>Сдача готового ролика</span></li>
                                    <li><span>Полное соответствие требованиям канала</span></li>
                                    <li><span>Посев (опционально)</span></li>
                                </ul>
                                <a href="#" class="show-modal-order" data-service="Видеопроизводство - Видеоролики для ТВ"><button>Заказать</button></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="videomaking-concept">
                <ul class="videomaking-concept-items">
                    <li class="videomaking-concept-item">
                        <h4>Рекламные ролики</h4>
                        <span>Постановочная реклама со сценарием и актерами</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Репортажная съемка</h4>
                        <span>Отчетные видео о событиях</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Видеоинфографика</h4>
                        <span>Мощный маркетинговый инструмент</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Бизнес-трейлеры</h4>
                        <span>Описание вашего бизнеса или продукта</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Конференции и мероприятия</h4>
                        <span>Запись лекций, концертов или спортивных мероприятий</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Обзоры и уроки</h4>
                        <span>Создание видеообзоров и инструкций</span>
                    </li>
                    <li class="videomaking-concept-item">
                        <h4>Музыкальные клипы</h4>
                        <span>Постановочный или концертный видеоклип</span>
                    </li>
                </ul>
            </div>
            <h2 class="videomaking-portfolio-title">ПОРТФОЛИО</h2>
            <ul class="videomaking-portfolio-items">
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/jSbpW9sLUwc" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/bydI2mrrU1s" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/Cqu92Xu6xzs" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/cxbbsoPQ0TM" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/7XW7x3BWG8s" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/Ykr6tJzyBp0" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/GvETIqFnnFc" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/w3xma5EHnhE" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/8vRTwChhjJk" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/OhMvl3jcuUc" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/82DxIJufKqU" frameborder="0" allowfullscreen></iframe></li>
                <li class="videomaking-portfolio-item"><iframe width="250" height="250" src="https://www.youtube.com/embed/hwsTPxrj0nA" frameborder="0" allowfullscreen></iframe></li>
            </ul>   
        </section>
    </div>
    </main>
    @include('layouts.modal')
@endsection
