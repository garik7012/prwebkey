<!-- modal -->
<div class="modal-container service-order-modal">
    <div class="smi-modal" onclick="event.stopPropagation()">
        <h3>Заявка на услугу <span class="order-to-site" style="color: #fc0"></span></h3>
        <h4>Пожалуйста, введите свои данные.</h4>
        <form action="/order/order" method="post">
            <div class="left-aside-form">
                <label for="left-aside__input-fio1">Имя</label>
                <input id="left-aside__input-fio1" type="text" name="fio" required >
                <label for="left-aside__input-phone1">Телефон</label>
                <input id="left-aside__input-phone1" type="text" name="phone" required>
                <label for="left-aside__input-email1">E-mail</label>
                <input id="left-aside__input-email1" type="email" name="email">
                <input id="order-service" type="hidden" name='service' value="">
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
        $('.show-modal-order').click(function(){
            var service = $(this).data('service');
            $('.order-to-site').text(service);
            $('#order-service').val(service);
            $('.service-order-modal').fadeIn();

        });
        $('.service-order-modal').click(function(){
            $('.service-order-modal').fadeOut();
        });
        $('.close-modal').click(function(){
            $('.service-order-modal').fadeOut();
            $(this).parent().find('input').val('');
            $(this).parent().find('textarea').val('');
        });
    })
</script>