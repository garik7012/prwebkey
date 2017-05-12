<!-- modal -->
<div id="online-order-modal" class="modal-container">
    <div class="smi-modal" onclick="event.stopPropagation()">
        <h3>Онлайн заявка на услугу</h3>
        <h4>Пожалуйста, введите свои данные.</h4>
        <form action="/order/order" method="post">
            <div class="left-aside-form">
                <label for="left-aside__input-fio1">Имя</label>
                <input id="left-aside__input-fio1" type="text" name="fio" required>
                <label for="left-aside__input-phone1">Телефон</label>
                <input id="left-aside__input-phone1" type="text" name="phone" required>
                <label for="left-aside__input-email1">E-mail</label>
                <input id="left-aside__input-email1" type="email" name="email" required>
                <label for="order-service1">Услуга</label>
                <input id="order-service1" type="text" name='service' value="" required>
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
        $('.online-order_button').click(function(){
            $('#online-order-modal').show();

        });
        $('#online-order-modal').click(function(){
            $('#online-order-modal').hide();
        });
        $('#online-order-modal .close-modal').click(function(){
            $('#online-order-modal').hide();
            $(this).parent().find('input').val('');
            $(this).parent().find('textarea').val('');
        });
    })
</script>