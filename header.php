<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en-US" data-ng-app="ccc">

<head>
    <title><?php wp_title(''); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta property="og:title" content="<?php echo wp_title(''); ?>" />
    <meta property="og:url" content="<?php echo get_page_link(); ?>" />


    <link rel="icon" type="image/png" sizes="512x512"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon_teal.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon.png">

    <style type="text/css">
    .page-header::before {

        background: linear-gradient(to right, rgba(69, 76, 87, 0.6), rgba(69, 76, 87, 0.6)),
            url('<?php header_image(); ?>') center center / cover no-repeat;
    }
    </style>

    <?php wp_head(); ?>

    <script src="https://js.churchcenter.com/modal/v1"></script>

    <!-- Global site tag (gtag.js) - Google Ads: 10805613755 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10805613755"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-10805613755');
    </script>
</head>

<body <?php body_class(); ?> id="<?php echo get_field('is_alert_active', 2017) == 1 ? 'alert-bar-active' : ''; ?>"
    live-service>
    <?php if (is_admin_bar_showing()) {
} ?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light padding-md-top padding-md-bottom">
        <div class="container">
            <a class="navbar-brand p-0" href="<?php echo get_home_url(); ?>" title="Cornerstone Community Church"
                alt="Cornerstone Community Church">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg?v=2.3"
                    alt="<?php echo bloginfo('name'); ?>" />
            </a>

            <button class="navbar-toggler btn btn-dark inverse" id="mobile-toggle" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" ria-expanded="false"
                aria-label="Toggle navigation">
                <div class="label d-none d-sm-block mr-2">Menu</div>

                <div class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <?php
                        wp_nav_menu(array(
                            'menu' => 'nav-primary',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'navbar-nav',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?>

                <ul id="menu-nav-secondary" class="navbar-nav">
                    <li class="menu-item nav-item">
                        <a title="Live" href="/live/" class="nav-link" ng-class="{'active' : isServiceLive}">
                            Live <span class="ng-cloak" ng-if="isServiceLive">now!</span>
                        </a>
                    </li>

                    <li class="menu-item nav-item">
                        <a title="Giving" href="/giving/" class="nav-link">
                            Giving
                        </a>
                    </li>
                    <li class="menu-item nav-item">
                        <a title="Visit" href="/visit/" class="nav-link">
                            Visit
                        </a>
                    </li>
                </ul>
                <!-- 					
					<?php
                        wp_nav_menu(array(
                            'menu' => 'nav-secondary',
                            'depth' => 1,
                            'container' => false,
                            'menu_class' => 'navbar-nav',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?> -->
            </div>
        </div>
    </nav>

    <div class="page">