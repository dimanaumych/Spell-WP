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
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twt/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/wp-content/themes/twt/css/style.css">
    <link rel="stylesheet" href="/wp-content/themes/twt/css/services.css">
    <link rel="stylesheet" href="/wp-content/themes/twt/css/header.css">
	<link rel="stylesheet" href="/wp-content/themes/twt/css/footer.css">
	<link rel="stylesheet" href="/wp-content/themes/twt/css/contact.css">
	<link rel="shortcut icon" type="image/png" href="/wp-content/themes/twt/images/header/logo.png"/>
	<script type="text/javascript" src="/wp-content/themes/twt/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twt/slick-1.8.1/slick/slick.min.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
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
<!-- 					<a  href="#sales_wrapper">Главная</a>
                        <a  href="#profile-systems">Услуги</a>
					<a  href="#guarantee">Контакты</a>
					<a href="#certifications">Этапы</a> -->
					 <?php
                wp_nav_menu( array(
                    'them_location' => 'menu-1',
                    'container_id'       => 'primary-menu',
                    'container_class'    => 'header-menu',
                ));
                ?>
				</nav>
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
			<a href="<?php 
                          if (ICL_LANGUAGE_CODE == 'uk')
                            echo do_shortcode('uk'); 

                          else            
                              echo do_shortcode('/'); 
                    ?>"><img class="logo" src="/wp-content/themes/twt/images/logo.png"></a>
			<nav class="header-menu">
				 <?php
                wp_nav_menu( array(
                    'them_location' => 'menu-1',
                    'container_id'       => 'primary-menu',
                    'container_class'    => 'header-menu',
                ));
                ?>
			</nav>

				<p class="header-phone-number">+380 67 55 55 555</p>
				<a href="#call-back-form">
				<div class="call-back-button-header">
						<div class="call-back-button-header-inner"></div>
						<p><?php echo __('Заказать звонок', 'project_name'); ?></p>
					</div>
			</a>
		</header>
	</div>
</div>