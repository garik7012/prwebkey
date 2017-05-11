<aside class="left-aside">
    <div class="left-top-menu">
        @yield('topaside')
    </div>
    <div class="left-menu-also">
        <h3>Смотрите также:</h3>
        <ul class="left-menu-also__items">
            <?php $also_items = [
            '<li><a href="/services/search-optimisation/">Поисковая оптимизация</a></li>',
            '<li><a href="/services/internet-reklama/">Интернет реклама</a></li>',
            '<li><a href="/services/reputation/">Управление репутацией</a></li>',
            '<li><a href="/services/lidogen/">Лидогенерация</a></li>',
            '<li><a href="/services/copywriting/">Копирайтинг</a></li>',
            '<li><a href="/services/videomaking/">Видео производство</a></li>',
            '<li><a href="/services/konsalting/">PR консалтинг</a></li>',
            '<li><a href="/services/smm/">SMM</a></li>',
            '<li><a href="/services/smi/">Работа со СМИ</a></li>'
            ];?>
            @foreach($also_items as $also_item)
                {!! $also_item !!}
            @endforeach
        </ul>
    </div>
    <div class="show-mobile-order">
        <button>Заказать услугу</button>
    </div>
    <div class="left-aside-order">
        <h2>заявка на услуги</h2>
        <div class="left-aside-form">
            <form id="left-form_aside" action="/order/aside" method="post">
                <label for="left-aside__input-offer">Услуга</label>
                <input id="left-aside__input-offer" type="text" name='service'>
                <label for="left-aside__input-fio">Имя</label>
                <input id="left-aside__input-fio" type="text" name="fio">
                <label for="left-aside__input-phone">Телефон</label>
                <input id="left-aside__input-phone" type="text" name="phone">
                <label for="left-aside__input-email">E-mail</label>
                <input id="left-aside__input-email" type="text" name="email">
                <label for="left-aside__input-site">Ваш сайт</label>
                <input id="left-aside__input-site" type="text" name="site">
                {{csrf_field()}}
                <input type="submit" value="Заказать консультацию">
            </form>
        </div>
    </div>
</aside>