<?php /* Template Name: header*/ ?>
<?php
/*___________________________Filter begin______________________________*/
$args = array(
'post_type' => 'additionals',
'category_name' => 'header-button',
'publish' => true,
);
/*____________________________Filter end______________________________*/
$query = new WP_Query($args);
if( $query->have_posts() ){
while( $query->have_posts() ){ $query->the_post();
    $headerButtonLink = get_field( 'header-button_link' );
    $headerButtonTitle = get_field( 'header-button_title' );
    $headerButtonPopup = get_field( 'header-button_popup' );
}
wp_reset_postdata(); // сбрасываем переменную $post
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spell</title>
    <link rel="stylesheet" href="/wp-content/themes/twt/css/reset.css">
    <link rel="stylesheet" href="/wp-content/themes/twt/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/wp-content/themes/twt/css/style.css">
    <link rel="stylesheet" href="/wp-content/themes/twt/css/footer.css">
    <link rel="shortcut icon" type="image/png" href="/wp-content/themes/twt/images/header/logo.png"/>
    <script type="text/javascript" src="/wp-content/themes/twt/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="/wp-content/themes/twt/slick-1.8.1/slick/slick.min.js"></script>
</head>
<body>

<div class="header-wrapper">
    <div class="header-menu-wrapper">
        <header>
            <!-- Mobile navigation -->
            <div class="left_sidebar">
                <a href="" class="menu-btn" ><img src="/wp-content/themes/twt/images/header/open-menu.png" class="menu_button"></a>
                <a href="" class="cancel-btn"><img src="/wp-content/themes/twt/images/header/close.png" class="cancel_button"></a>
                <nav class="codrops-demos_sidebar">
                    <a  href="#sales_wrapper">Главная</a>
                    <a  href="#profile-systems">Услуги</a>
                    <a  href="#guarantee">Контакты</a>
                    <a href="#certifications">Этапы</a>
                </nav>

                <select class="mobile-menu-language-select" name="language[]">
                    <option value="ua">Укр</option>
                    <option value="ru">Рус</option>
                </select>
                <div class="mobile-menu-phone-wrapper">
                    <a href="tel:096 222 2263"><p>+38 096 222 22 63</p></a>
                </div>
                <div class="mobile-menu-social-wrapper">
                    <div class="mobile-menu-social">
                        <img src="/wp-content/themes/twt/images/header/instagram.png">
                        <img src="/wp-content/themes/twt/images/header/facebook.png">
                        <img src="/wp-content/themes/twt/images/header/telegram.png">
                    </div>
                </div>
            </div>
            <!-- Mobile navigation -->
            <a href="index.html"><img class="logo" src="/wp-content/themes/twt/images/logo.png"></a>
            <nav class="header-menu">
                <select class="laguage-select" name="language[]">
                    <option value="ua">Укр</option>
                    <option value="ru">Рус</option>
                </select>
<!--                <ul>-->
<!--                    <a href="tours.html"><li>Главная</li></a>-->
<!--                    <a href="tours.html" style="display: flex; align-items: center;"><li>Услуги</li><img style="width: 15px; height: 12px;" src="images/header/down-arrow.png"></a>-->
<!--                    <a href="tours.html"><li>Этапы</li></a>-->
<!--                    <a href="tours.html"><li>Контакты</li></a>-->
<!--                </ul>-->
                <?php
                wp_nav_menu( array(
                    'them_location' => 'menu-1',
                    'container_id'       => 'primary-menu',
                    'container_class'    => 'header-menu',
                ));
                ?>
            </nav>

            <p class="header-phone-number">+380 67 55 55 555</p>
            <div class="call-back-button-header">
                <div class="call-back-button-header-inner"></div>
                <p>Заказать звонок</p></div>
            <div class="lights">
                <div class="lights-one">
                    <div class="lights-one__animation">
                        <img class="lights-one-off" src="/wp-content/themes/twt/images/front-page/lights-1.png">
                        <img class="lights-one-on" src="/wp-content/themes/twt/images/front-page/lights-1-on.png">
                    </div>
                </div>
                <div class="lights-two">
                    <div class="lights-two__animation">
                        <img class="lights-two-off" src="/wp-content/themes/twt/images/front-page/lights-2.svg" width="167px" height="194px">
                        <img class="lights-two-on" src="/wp-content/themes/twt/images/front-page/lights-2-on.svg" width="167px" height="194px">
                    </div>
                </div>
                <div class="lights-three">
                    <div class="lights-three__animation">
                        <img class="lights-three-off" src="/wp-content/themes/twt/images/front-page/lights-3.png">
                        <img class="lights-three-on" src="/wp-content/themes/twt/images/front-page/lights-3-on.png">
                    </div>
                </div>
            </div>
        </header>
    </div>