@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('topaside')
    <ul class="left-top-menu__items">
        <li class="left-menu_current"><a href="/services/smi/">Работа со СМИ</a></li>
        <li><a href="/services/smi/">Комплексный продукт</a></li>
        <li><a href="/services/smi/jurn/">Взаимосвязь с журналистами</a></li>
        <li><a class="current-link-aside" href="/services/smi/public/">Публикации в интернет СМИ</a></li>
        <li><a href="/services/smi/blokir/">Блокировка информации в СМИ</a></li>
    </ul>
@endsection
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <a href="/services/">Услуги</a><span class="bread-next">&#10095;</span>
            <a href="/services/smi/">Работа со СМИ</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Публикации в интернет СМИ</span>
        </nav>
        <section class="page-section">
            <h1 class="page-title">Публикации в интернет СМИ</h1>
            <div class="monitoring-descr">
                <p>Мы работаем с огромным количеством онлайн сми Украины и мира. Вы можете отправить  на согласование свой релиз и мы в течении нескольких часов напишем Вам ответ от редакции.</p>
            </div>
            <table class="smi-table">
                <tr>
                    <th>Название</th>
                    <th colspan="2">Ссылка на сайт</th>
                </tr>
                <tr>
                    <td colspan="3" class="smi-table__title">Информагенства</td>
                </tr>
                <tr>
                    <td>112</td>
                    <td><a href="http://112.ua">http://112.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Интерфакс-Украина</td>
                    <td><a href="http://www.interfax.com.ua">http://www.interfax.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>РБК</td>
                    <td><a href="http://www.rbc.ua">http://www.rbc.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Укрновини</td>
                    <td><a href="http://ukranews.com/ru">http://ukranews.com/ru</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>УНІАН-Вікно</td>
                    <td><a href="http://www.unian.net/detail/window">http://www.unian.net/detail/window</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>УНН</td>
                    <td><a href="http://www.unn.com.ua/ru">http://www.unn.com.ua/ru</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td colspan="3" class="smi-table__title">Сайты телеканалов</td>
                </tr>
                <tr>
                    <td>Телеканал новин «24»</td>
                    <td><a href="http://24tv.ua">http://24tv.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Телеканал "News one"</td>
                    <td><a href="https://newsone.ua">https://newsone.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Телеканал Еспресо ТВ</td>
                    <td><a href="http://espreso.tv">http://espreso.tv</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Телеканал ICTV - "Факты"</td>
                    <td><a href="http://fakty.ictv.ua/ru">http://fakty.ictv.ua/ru</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td colspan="3" class="smi-table__title">Популярные</td>
                </tr>
                <tr>
                    <td>Бигмир</td>
                    <td><a href="http://www.bigmir.net">http://www.bigmir.net</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Бизнес</td>
                    <td><a href="http://www.business.ua">http://www.business.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>В городе - Киев</td>
                    <td><a href="http://kiev.vgorode.ua">http://kiev.vgorode.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Власті</td>
                    <td><a href="www.vlasti.net">www.vlasti.net</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Всекомментарии</td>
                    <td><a href="http://vsekommentarii.com">http://vsekommentarii.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Дело</td>
                    <td><a href="http://delo.ua">http://delo.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Деловая столица</td>
                    <td><a href="http://www.dsnews.ua">http://www.dsnews.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>ДеПо</td>
                    <td><a href="http://www.depo.ua">http://www.depo.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Деньги</td>
                    <td><a href="http://www.dengi.ua">http://www.dengi.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Экономизвестия</td>
                    <td><a href="http://eizvestia.com">http://eizvestia.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Економічна правда</td>
                    <td><a href="http://www.epravda.com.ua">http://www.epravda.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Эксперт</td>
                    <td><a href="http://expert.ua">http://expert.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Зеркало недели</td>
                    <td><a href="http://zn.ua">http://zn.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Zik</td>
                    <td><a href="http://zik.ua/ru">http://zik.ua/ru</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Известия в Украине</td>
                    <td><a href="http://izvestia.kiev.ua">http://izvestia.kiev.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Капітал</td>
                    <td><a href="http://www.capital.ua">http://www.capital.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Kyivweekly</td>
                    <td><a href="http://www.kyivweekly.com">http://www.kyivweekly.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Киев Власть</td>
                    <td><a href="http://kievvlast.com.ua">http://kievvlast.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Kyivpost</td>
                    <td><a href="http://www.kyivpost.com">http://www.kyivpost.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Контракти</td>
                    <td><a href="www.kontrakty.com.ua">www.kontrakty.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Комментарии</td>
                    <td><a href="http://comments.ua/">http://comments.ua/</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Корреспондент</td>
                    <td><a href="http://korrespondent.net">http://korrespondent.net</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Лига</td>
                    <td><a href="http://www.liga.net">http://www.liga.net</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>МігНьюс</td>
                    <td><a href="http://mignews.com.ua">http://mignews.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Мінфін</td>
                    <td><a href="minfin.com.ua">minfin.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Кияни-Обозреватель</td>
                    <td><a href="http://kiyany.obozrevatel.com">http://kiyany.obozrevatel.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>ТСН</td>
                    <td><a href="http://tsn.ua">http://tsn.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>УкрБизнесПортал</td>
                    <td><a href="http://ubp.com.ua">http://ubp.com.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Forbes.ua</td>
                    <td><a href="forbes.ua">forbes.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Цензор</td>
                    <td><a href="http://censor.net.ua">http://censor.net.ua</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>ЧасUA</td>
                    <td><a href="http://timeua.com">http://timeua.com</a></td>
                    <td><button class="smi-table__button">Отправить</button></td>
                </tr>
                <tr>
                    <td>Ваш сайт</td>
                    <td colspan="2">Тут может быть Ваш сайт</td>
                </tr>
            </table>
            <div class="smi-public-after">
                Для того, что бы добавить Ваш сайт в этот список напишите нам на этот электронный адрес:<br/>
                <a href="mailto:support@webkey.one">support@webkey.one</a>
            </div>
        </section>
    </div>
    </main>
    <!-- modal -->
    <div id="smi-public-modal" class="modal-container">
        <div class="smi-modal" onclick="event.stopPropagation()">
            <h3>Вы хотите отправить свой материал на сайт <span class="order-to-site"></span></h3>
            <h4>Пожалуйста, введите свои данные.</h4>
            <form action="/order/publicsmi" method="post" enctype="multipart/form-data">
                <div class="left-aside-form">
                    <label for="left-aside__input-fio">Имя</label>
                    <input id="left-aside__input-fio" type="text" name="fio">
                    <label for="left-aside__input-phone">Телефон</label>
                    <input id="left-aside__input-phone" type="text" name="phone">
                    <label for="left-aside__input-email">E-mail</label>
                    <input id="left-aside__input-email" type="text" name="email">
                    <input type="hidden" name="site">
                    <input type="file" name="ofile">
                </div>
                <div class="right-modal-form">
                    <textarea name="message" placeholder="Введите сообщение"></textarea>
                    {{csrf_field()}}
                    <button type="submit" value="Отправить">Отправить</button>
                </div>
            </form>
            <span class="close-modal">X</span>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.smi-table__button').click(function(){
                var atosend = $(this).parent().parent().find('a').text();
                $('#smi-public-modal .order-to-site').text(atosend);
                $('#smi-public-modal input[name=site]').text(atosend);
                $('#smi-public-modal').show();
            });
            $('.modal-container').click(function(){
                $('.modal-container').hide();
            });
            $('.close-modal').click(function(){
                $('#smi-public-modal').hide();
                $(this).parent().find('input').val('');
                $(this).parent().find('textarea').val('');
            });
        })
    </script>
@endsection
