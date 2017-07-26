<?php
    /*

    // Create a whitelist
    $aWhitelist = array();
    $aWhitelist[] = "IP";

    // Check if we have an remote address
    if (!empty($_SERVER['REMOTE_ADDR'])) {

        // @TODO: Use global whitelist?
        if (!in_array($_SERVER['REMOTE_ADDR'], $aWhitelist)) exit('www.imresimon.nl - Binnenkort online');

    }

    */
?>

<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?><?php the_title(' | '); ?></title>
    <?php //require "favicon.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="description" content="Projectmanagement bureau" />
    <meta name="keywords" content="Projecten, Projectmanagement, marketing, organisatie, duurzaam" />
    <meta name="author" content="Imre Simon" />

    <!--//////////////////////////////////////////////////////

    Majada Projectmanagement
    Designed and developed by www.imresimon.nl

    Website:        www.imresimon.nl
    Email:          info@imresimon.nl
    Facebook:       //www.facebook.com/imresimonnl
    Instagram:      //www.instagram.com/imresimonnl
    LinkedIn:       //www.linkedin.com/in/imresimonnl/

    //////////////////////////////////////////////////////-->


    
    <!-- Animate.css -->
        <link rel="stylesheet" href="//www.majada.nl/wp-content/themes/Majada-website/css/animate.css">
    <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="//www.majada.nl/wp-content/themes/Majada-website/css/icomoon.css">
    <!-- Simple Line Icons -->
        <link rel="stylesheet" href="//www.majada.nl/wp-content/themes/Majada-website/css/simple-line-icons.css">
    <!-- Magnific Popup -->
        <link rel="stylesheet" href="//www.majada.nl/wp-content/themes/Majada-website/css/magnific-popup.css">
    <!-- Bootstrap  -->
        <link rel="stylesheet" href="//www.majada.nl/wp-content/themes/Majada-website/css/bootstrap.css">
    <!-- Theme style -->
        <!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

    <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!-- <link rel="stylesheet" href="//cdn.linearicons.com/free/1.0.0/icon-font.min.css"> -->

    <!-- Modernizr JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="//www.majada.nl/wp-content/themes/Majada-website/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
    </head>
    <body <?php body_class( $class ); ?>>
    
    <!-- Loader -->
    <div class="site-loader"></div>
    <div class="site-page">
    <nav>
        <div class="site-main-nav">
            <div class="container">
                <a href="/home">
                    <img class="site-main-nav-logo" src="//www.majada.nl/wp-content/themes/Majada-website/images/logo-majada1.png">
                </a>
                <div class="site-menu-1">
                    <?php 
                        // Define the Main Menu
                        // wp_nav_menu( array('theme_location' => 'HeaderMenu') );
                    ?>
                    <a href="#" data-nav-section="home">Home</a>
                    <!-- <a href="#" data-nav-section="mission">Wat doen wij</a> -->
                    <!-- <a href="#" data-nav-section="services">Projecten</a> -->
                    <!-- <a href="#" data-nav-section="team">Wie zijn wij</a> -->
                    <a href="#" data-nav-section="contact" class="btn-menu">Contact</a>
                </div>
            </div>
        </div>

        <div class="basic-nav">
        </div>
    </nav>

    