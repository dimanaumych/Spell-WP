<?php /* Template Name: contact-page*/ ?>
<?php get_header('service'); ?>

<div class="contact">
    <div class="contact-wrapper">
        <img src="/wp-content/themes/twt/images/contact/Vector.png" class="contact-img">
        <div class="footer_info__wrapper">
            <p class="info_footer">DON’T BE SHY, </p>
            <p class="title_footer">SAY HI.</p>
            <p class="text-bold_footer"><?php the_field('text-bold_footer','option'); ?></p>
            <p class="text_footer"><?php echo __('ул. Владимирская 16, офис 24', 'project_name'); ?></p>
            <p class="text_footer"><?php the_field('mail-footer','option'); ?></p>
            <div class="social-clubs">
                <img src="/wp-content/themes/twt/images/contact/inst.png">
                <img src="/wp-content/themes/twt/images/contact/telegram.png">
                <img src="/wp-content/themes/twt/images/contact/facebook.png">
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68780316407!2d30.252511957059642!3d50.4016990487754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1601219538780!5m2!1sru!2sua" width="559px" height="559px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>

<?php get_footer(); ?>
