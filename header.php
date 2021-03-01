<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en-US" data-ng-app="ccc">
    <head>
    <title><?php wp_title(''); ?></title>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <meta property="og:title" content="<?php echo wp_title(''); ?>" />
        <meta property="og:url" content="<?php echo get_page_link(); ?>" />
        
        <link href="<?php echo get_template_directory_uri(); ?>/style.min.css?v.1.1" rel="stylesheet" type="text/css">

        <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/img/favicon_teal.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon.png">

        <style type="text/css">
            .page-header::before {
                background: linear-gradient(to right, rgba(2, 168, 204, 0.5), rgba(255, 128, 055, 0.5)),
                url('<?php header_image(); ?>') center center / cover no-repeat;
            }
        </style>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> id="<?php echo get_field('is_alert_active', 2017) == 1 ? 'alert-bar-active' : ''; ?>">
    <?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light padding-md-top padding-md-bottom">
        <div class="container">
            <a class="navbar-brand margin-lg-right" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg" alt="<?php echo bloginfo('name'); ?>" />
            </a>

            <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                ria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <?php
                    wp_nav_menu( array(
                        'menu' => 'nav-primary',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                ?>

                <?php
                    wp_nav_menu( array(
                        'menu' => 'nav-secondary',
                        'depth' => 1,
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                ?>
            </div>
        </div>
    </nav>

    <div class="page">