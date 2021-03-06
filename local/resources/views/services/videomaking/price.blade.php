@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/videomaking/">Видеопроизводство</a></li>
        <li><a href="/services/videomaking/">Комплексный продукт</a></li>
        <li><a href="/services/videomaking/etaps/">Этапы производства</a></li>
        <li><a class="current-link-aside" href="/services/videomaking/price/">Стоимость видеоролика</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/videomaking/">Видеопроизводство</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Стоимость видеоролика</span>
        </nav>
        <section class="page-section videomaking">
            <h1 class="page-title">Стоимость видеоролика</h1>

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
