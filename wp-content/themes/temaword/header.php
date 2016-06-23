<?php require_once('wp_bootstrap_navwalker.php') ?>

<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->


  
    </head>

    <body>

        <!-- class container -->
        <div class="container-fluid">
                <div class="row">
                        <!-- logo -->
                        <div class="col-lg-12">
                        <img id="logo_escuela" class="img-thumbnail" src="http://escuelapacifico.com/archivos/logo.jpg">
                        </div>

                </div>

                <div class="row">
                        <!-- banner slider -->
                        <div id="banner_escuela">
                        <?php 
                        echo do_shortcode("[metaslider id=7]"); 
                        ?>
                        </div>

                </div>

                    <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                    </a>
                    </div>

                    <?php
                    wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                    </div>
                    </nav>

                
    


