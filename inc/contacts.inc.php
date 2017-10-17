<script type="text/javascript" src="/js/ajax.js"></script>
<div class="contact">
    <div class="contact_info">
        <div class="contact_address contact_info_float">
            <span class="fa icon_map_marker"></span>
            <p>Адрес:<br>
                <span>Москва, ул.Комарова 32, офис 3</span>
            </p>
        </div>
        <div class="contact_phone contact_info_float">
            <span class="fa icon_phone"></span>
            <p>Телефон:<br>
                <span>+7 (918) 080-77-91</span>
            </p>
        </div>
        <div class="contact_email contact_info_float">
            <span class="fa icon_email"></span>
            <p>E-mail: <br>
                <span><a href="mailto:samovar-web@bk.ru">samovar-web@bk.ru</a></span>
            </p>
        </div>
        <div class="contact_time contact_info_float">
            <span class="fa icon_time"></span>
            <p>Режим работы: <br>
                <span>Пн. – Сб.: с 9:00 до 18:00 <br>Вс.: выходной</span>
            </p>
        </div>
    </div>

    <div class="clear"></div>
    <div class="contact_form">
        <div class="form_title">
            <p>Обратный звонок</p>
            <span>Представьтесь, мы вам перезвоним.</span>
        </div>

        <form action="/contacts/" method="post" id="contact_phone">
            <label>ФИО:<span class="required_star">*</span>
                <p>
                    <input name="name" type="text" required="required">
                    <span class="fa icon_user"></span>
                </p>
            </label>
            <label>Телефон:<span class="required_star">*</span>
                <p>
                    <input name="phone" type="tel" required="required">
                    <span class="fa icon_phone"></span>
                </p>
            </label>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>