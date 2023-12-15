<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=5"/>
        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>

    </head>
    <body <?php body_class() ?>>
        <?php wp_body_open(); ?>

    <!-- <div id="grid"> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!--     <div class="grid&#45;item"></div> -->
    <!-- </div> -->

    <div id="container">


    <header>
        <div class="header-title">
            <a class="" role="link" href=" <?php echo esc_url( get_home_url() ); ?>">
                <?php get_template_part( 'template-parts/logo' );?>
            </a>
        </div>

        <?php
            $args = [ 'theme_location' => 'header-menu', 'menu' => 'Main menu', 'container'=> 'div', ];
            wp_nav_menu( $args );
        ?>

        <div class="header-hamburger-menu">
            <span>menu</span>
        </div>
    </header>

    <div class="main-container">
