@extends('layouts.master')
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/videomaking/">Видеопроизводство</a></li>
        <li><a href="#">Комплексный продукт</a></li>
        <li><a href="#">Этапы производства</a></li>
        <li><a href="#">Стоимость видеоролика</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next"><svg xmlns="http://www.w3.org/2000/svg"version="1.1" viewBox="0 0 240.823 240.823" >
<g>
	<path id="Chevron_Right_1_" d="M183.189,111.816L74.892,3.555c-4.752-4.74-12.451-4.74-17.215,0c-4.752,4.74-4.752,12.439,0,17.179   l99.707,99.671l-99.695,99.671c-4.752,4.74-4.752,12.439,0,17.191c4.752,4.74,12.463,4.74,17.215,0l108.297-108.261   C187.881,124.315,187.881,116.495,183.189,111.816z"/>
</g>
</svg></span>
            <span class="bread-current">Видеопроизводство</span>
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
                                <a href="#"><button>Заказать</button></a>
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
                                <a href="#"><button>Заказать</button></a>
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
                                <a href="#"><button>Заказать</button></a>
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
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
                <li class="videomaking-portfolio-item"></li>
            </ul>
            <h2 class="videomaking-etaps-title">Этапы производства</h2>
            <div class="videomaking-etaps-content">
                <p>Коротко о том, как строиться видеопроизводсто. <strong>Препродакшн - подготовка.</strong> Все начинается с брифа или технического задания на изготовление рекламного ролика, содержащего информацию о товаре или услуге, маркетинговую стратегию.	</p>
                <p>После тщательного анализа информации в брифе, готовится оптимальное предложение – концепция, предварительный сценарий и расчет стоимости производства рекламного ролика. Отметим, что стоимость информационного ролика зависит от количества смен, локаций, оборудования, задействованного в съемке и уровня сложности элементов компьютерной графики на посте.		</p>
                <p>Стоимость постановочного ролика зависит от количества задействованных специалистов – режиссер, оператор; актеров – гонорары; съемочных дней, локаций; реквизита и оборудования, задействованного в съемке и от сложности элементов компьютерной графики.</p>
                <p>Креатив. Для начала достаточно High Concept - основанная идея в пару абзацев. После этого пишется сценарный план, который утверждается вместе с заказчиком. Вносятся правки. Заключается договор.</p>
                <p>Создается режиссерский сценарий - сториборд, который включает в себя раскадровку, локации, текст, диктора, хронометраж.</p>
                <p><strong>Продакшн - это съемочный период</strong>. Перед видеосъемкой пару часов уходит на установку и проверку оборудования, грима и света и это в лучшем случае. Грим для видео требует тщательной и кропотливой работы гримера. Как любит говаривать один знакомый продюсер: «Не все можно исправить на посте».</p>
                <p>Занимаясь сложной постановочной съемкой лучше иметь монтажера на площадке для монтажа в реальном времени	</p>
            </div>
            <div class="videomaking-price-descr">
                <h2>Стоимость видеоролика</h2>
                <p>Видеоролик - один лучших способов представить продукт, услугу или фирму. С одной стороны на рекламе экономить не стоит, с другой - бюджет всегда ограничен.<br/>От чего зависит окончательная стоимость видео рекламы:</p>
                <ul class="videomaking-price-descr__items">
                    <li>
                        <div class="videomaking-price-descr_number"><span>1</span></div>
                        <span><strong>От видеопродакшна.</strong> Естественно, чем известнее студия, тем дороже его продукты. На известный студию придется раскошелится, но за эти деньги вы получите хороший результат без срывов, нервов и точно в срок.</span>
                    </li>
                    <li>
                        <div class="videomaking-price-descr_number"><span>2</span></div>
                        <span><strong>Креатив.</strong> При создании видеоролика - главное креатив. Однако стоимость его тоже разная. Пара строк, заказанных у фриласера гораздо дешевле, чем тексты от именитого сценариста или копирайтера: от 1000 до 50 000 рублей за разработку. Думаем, не стоит напоминать, что эффективность тоже будет разной.</span>
                    </li>
                    <li>
                        <div class="videomaking-price-descr_number"><span>3</span></div>
                        <span><strong>Актеры и актеры массовых сцен.</strong> Постановочный видеоролик снимают с участием актеров. Известность актера влияет на гонорара и стоимость смены в целом.</span>
                    </li>
                    <li>
                        <div class="videomaking-price-descr_number"><span>4</span></div>
                        <span><strong>Непосредственно производство.</strong><br/><br/><br/></span>
                    </li>
                    <li>
                        <div class="videomaking-price-descr_number"><span>5</span></div>
                        <span>Когда съемочный процесс окончен, <strong>начинается работа</strong>, которая занимает гораздо больше времени. Процесс обработки отснятого материал.</span>
                    </li>
                </ul>
                <p>А это: монтаж, цветокоррекция, наложение компьютерных спецэффектов, инфографика, озвучка, диктор, компьютерная 3D графика и анимация, которые уменьшает бюджет по секундно, потому что ее стоимость рассчитывается исходя из секунды графики.</p>
                <p>В общем если сравнивать стоимость видеорекламы с пользой которой она принесет, то эта мизерная стоимость при высокой эффективности.</p>
            </div>
        </section>
    </div>
    </main>
@endsection
