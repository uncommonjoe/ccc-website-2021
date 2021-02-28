<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en-US" data-ng-app="ccc">
    <head>
    <title>
    <?php
        if(is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
            echo ' | Billings Montana';
        } else {
            wp_title('');
            echo ' | ';
            bloginfo('name');
        }
        ?>
        </title>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <meta property="og:title" content="<?php echo wp_title(''); ?>" />
        <meta property="og:url" content="<?php echo get_page_link(); ?>" />
        
        <link href="<?php echo get_template_directory_uri(); ?>/style.min.css?v.3.7" rel="stylesheet" type="text/css">

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
        <div class="page">
            <div id="header-nav">
                <div class="row align-items-center">
                    <div class="col-10 offset-1 col-md-4 offset-md-4 col-lg-3 offset-lg-0 justify-content-center d-flex">
                        <a class="logo" href="<?php echo get_home_url(); ?>">
                            <img src="https://cornerstonebillings.org/wp-content/uploads/2020/03/logo-complete.png" alt="<?php echo bloginfo('name'); ?>" />
                            <!-- <h1>Cornerstone</h1> -->
                        </a>
                    </div>

                    <div class="col-lg-9 d-none d-lg-block">
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'primary',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'text-right',
                                'walker' => new wp_bootstrap_navwalker()
                            ));
                        ?>
                    </div>
                </div>
            </div>
        
            <div id="top-fixed-nav">
                <a class="logo float-left margin-lg-left" href="<?php echo get_home_url(); ?>">
                   <img src="https://cornerstonebillings.org/wp-content/uploads/2020/03/Cornerstone-iconmark-light.png" alt="<?php echo bloginfo('name'); ?>" />
                </a>

                <div class="side-nav-button float-right margin-lg-right" id="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div id="top-nav-slideout">              
                <?php include('menu.php'); ?>
            </div>