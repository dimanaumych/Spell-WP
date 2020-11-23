<footer>
    <div class="feedback" id="call-back-form">
        <div class="feedback_info">
            <div class="feedback_info__wrapper">
                <p class="info_feedback"><?php echo __('МЫ ПОМОЖЕМ?', 'project_name'); ?></p>
                <p class="title_feedback"><?php echo __('вашему бизнесу?', 'project_name'); ?></p>
                <p class="text_feedback"><?php the_field('text_feedback','option'); ?></p>
                <form class="form-feedback" id = "call-back-form"  method="POST">
                    <div class="input-wrapper">
                        <input ype="text" name="first_name" id="user-name" placeholder="Ваше имя" maxlength="50">
                        <input type ="tel" name="phone" id = "user-phone" placeholder="Телефон" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" maxlength="15">
                        <input type="text" name="additional_info" id = "user-additional-info" placeholder="Расскажите о вашем проекте">
                        <button type="submit" class="feedback-button">
                            <div class="feedback-button-inner"></div>
                            <p>Отправить</p>
                        </button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="lights_feedback">
                <img src="/wp-content/themes/twt/images/front-page/feedback-lights.png">
                <img src="/wp-content/themes/twt/images/front-page/feedback-lights 2.png">
                <img src="/wp-content/themes/twt/images/front-page/feedback-lights3.png">
            </div>
        </div>
        <div class="footer-info">
            <div class="footer-info_wrapper">
                <div class="footer_info__wrapper">
                    <p class="info_footer">DON’T BE SHY,</p>
                    <p class="title_footer">SAY HI.</p>
                    <p class="text-bold_footer"><?php the_field('text-bold_footer','option'); ?></p>
                    <p class="text_footer"><?php echo __('ул. Владимирская 16, офис 24?', 'project_name'); ?></p>
                    <p class="text_footer"><?php the_field('mail-footer','option'); ?></p>
                </div>
                <div class="footer-pagination">
                    <ul class="footer-pagination__li">
                        <li><?php echo __('Услуги', 'project_name'); ?></li>
                        <li><?php echo __('Этапы', 'project_name'); ?></li>
                        <li><?php echo __('Контакты', 'project_name'); ?></li>
                    </ul>
                    <ul class="footer-pagination__social">
                        <a href=""><li>Behance</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Facebook</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="/wp-content/themes/twt/scripts/slow_anchor.js"></script>
<script src="/wp-content/themes/twt/scripts/header.js"></script>
<script src="/wp-content/themes/twt/scripts/additional_text.js"></script>
<script src="/wp-content/themes/twt/scripts/show_more.js"></script>
<script src="/wp-content/themes/twt/scripts/contact_form.js"></script>
</body>
</html>
