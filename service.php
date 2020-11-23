<?php /* Template Name: service-page*/ ?>
<?php get_header('service'); ?>

<div class="header-banner">
    <div class="header-banner-left-side">
        <p class="header-banner-first-title"><?php the_field('service-banner-title',get_the_ID()); ?></p>
        <p class="header-banner-second-title"><?php the_field('service-banner-text',get_the_ID()); ?></p>
        <p class="header-banner-text"><?php the_field('header-banner-text',get_the_ID()); ?></p>
        <a href="#call-back-form"><div class="call-back-button-header-banner">
                <div class="call-back-button-header-banner-inner"></div>
                <p>Заказать</p></div></a>
    </div>
	<div class="header-banner-right-side-photo">
		<img src="/wp-content/themes/twt/images/back-header-service.png" class="back-header-service">
		<img class="header-banner-right-side" src="<?php the_field('service-banner-photo',get_the_ID()); ?>">
	</div>
   

</div>

<marquee  direction="left" bgcolor="white"  scrolldelay="30" truespeed="truespeed" style="display: flex">
    <p> <span class="run-text-filled"><?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('Что вы получаете', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('Что вы получаете', 'project_name'); ?></span></p>
</marquee>

<div class="advantages-wrapper">
    <?php

    if( have_rows('advantages_slider', get_the_ID()) ):

        while ( have_rows('advantages_slider', get_the_ID()) ) : the_row();

            ?>
            <div class="left-side-advantages">
                <div class="orange-bg-wrapper">
                    <img src="/wp-content/themes/twt/images/ad-back.png" class="ad-back">
                    <img class="advantages-bg-left" src="/wp-content/themes/twt/images/advantages/orange_bg.png">
                    <div class="black-underline"></div>
                    <img class="advantages-tassel-left" src="/wp-content/themes/twt/images/advantages/tassel.png">
                    <p class="advantages-title-left"><?php the_sub_field('advantages_title',get_the_ID()); ?></p>
                </div>
                <div class="advantages-arrow-wrapper">
                    <img class="advantages-arrow-white-left" src="/wp-content/themes/twt/images/advantages/white_arrow.png">
                    <img class="advantages-arrow-orange-left" src="/wp-content/themes/twt/images/advantages/orange_arrow.png">
                </div>
                <div class="orange-text-wrapper">
                    <p><span class="advantages-text-empty"><?php the_sub_field('advantages_first_empty',get_the_ID()); ?> </span>
                        <span class="advantages-text-filled"><?php the_sub_field('advantages_first_filled',get_the_ID()); ?> </span>
                        <span class="advantages-text-empty"><?php the_sub_field('advantages_second_empty',get_the_ID()); ?> </span>
                        <span class="advantages-text-filled"><?php the_sub_field('advantages_second_filled',get_the_ID()); ?> </span>
                        <span class="advantages-text-empty"><?php the_sub_field('advantages_third_empty',get_the_ID()); ?></span></p>
                    <p class="advantages-text"><?php the_sub_field('advantages_text',get_the_ID()); ?></p>
                </div>
            </div>
            <?php

        endwhile;
    else :
    endif;
    ?>
</div>

<div class="additional-info-wrapper">


        <?php

        if( have_rows('additional_info_slider', get_the_ID()) ):

            while ( have_rows('additional_info_slider', get_the_ID()) ) : the_row();

                ?>
    <div class="additional-info-section-wrapper">
                <p class="additional-info-title"><?php the_sub_field('additional_info_title',get_the_ID()); ?></p>
                <img class="additional-info-button" src="/wp-content/themes/twt/images/additional-info/plus.png">
                <img class="additional-info-cancel" src="/wp-content/themes/twt/images/additional-info/cancel.png">
                <p class="additional-info-text"><?php the_sub_field('additional_info_text',get_the_ID()); ?></p>
    </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
</div>
<div class="about-service-wrapper-full">
	<div class="about-service-wrapper">
    <p class="about-service-text-empty"><?php echo __('Как будем применять', 'project_name'); ?></p>
    <p class="about-service-text-filled"><?php echo __('На вашем бизнесе?', 'project_name'); ?></p>
    <div class="about-service">
        <div class="about-service-left">
            <p><?php the_field('help_business_left_side_text',get_the_ID()); ?></p>
            <div class="first-orange-line"></div>
            <div class="second-orange-line"></div>
            <div class="third-orange-line"></div>
        </div>
        <div class="about-service-right">
            <p>
                <?php the_field('help_business_right_side_text',get_the_ID()); ?>
            </p>
        </div>
    </div>
</div>
</div>


<marquee  direction="left" bgcolor="white"  scrolldelay="30" truespeed="truespeed" style="display: flex">
    <p> <span class="run-text-filled"><?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"><?php echo __('ЭТАПЫ', 'project_name'); ?> </span><span class="run-text-filled">ЭТАПЫ</span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
        <span class="run-text-empty"><?php echo __('ЭТАПЫ', 'project_name'); ?> </span><span class="run-text-filled"><?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
        <span class="run-text-empty"><?php echo __('ЭТАПЫ', 'project_name'); ?> </span><span class="run-text-filled"><?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
        <span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-empty"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span><span class="run-text-filled"> <?php echo __('ЭТАПЫ', 'project_name'); ?></span>
</marquee>

<div class="steps" id="steps">
    <img src="/wp-content/themes/twt/images/front-page/Vector-left.png" class="vector-left">
    <div class="steps_wrapper">
        <?php

        if( have_rows('steps_slider_show', get_the_ID()) ):
            $i = 1;
            while ( have_rows('steps_slider_show', get_the_ID()) ) : the_row();

                ?>
                <div class="steps_card">
                    <div class="steps_card__inc">
                        <img src="/wp-content/themes/twt/images/front-page/inc.png" class="inc-point">
                        <img src="/wp-content/themes/twt/images/front-page/icon-inc.png" class="inc-icon">
                        <p class="number-inc"><?php echo $i ?></p>
                    </div>
                    <div class="steps_card__info">
                        <p class="steps_card__title"><?php the_sub_field('steps_title',get_the_ID()); ?></p>
                        <p class="steps_card__text"><?php the_sub_field('steps_text',get_the_ID()); ?></p>
                    </div>
                </div>
            <?php
                $i++;
            endwhile;
        else :
        endif;
        ?>
        <div class="show-more">
            <?php

            if( have_rows('steps_slider_hide', get_the_ID()) ):

                while ( have_rows('steps_slider_hide', get_the_ID()) ) : the_row();

                    ?>
                    <div class="steps_card">
                        <div class="steps_card__inc">
                            <img src="/wp-content/themes/twt/images/front-page/inc.png" class="inc-point">
                            <img src="/wp-content/themes/twt/images/front-page/icon-inc.png" class="inc-icon">
                            <p class="number-inc"><?php echo $i ?></p>
                        </div>
                        <div class="steps_card__info">
                            <p class="steps_card__title"><?php the_sub_field('steps_title',get_the_ID()); ?></p>
                            <p class="steps_card__text"><?php the_sub_field('steps_text',get_the_ID()); ?></p>
                        </div>
                    </div>
                <?php
                    $i++;
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="steps_card__button">
            <div class="steps_card__button-inner"></div>
            <p><?php echo __('Посмотреть все этапы', 'project_name'); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
