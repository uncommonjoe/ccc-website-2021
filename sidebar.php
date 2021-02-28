<div class="margin-lg-bottom" id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h3>About</h3>
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'footer-about',
                                'depth' => 1,
                                'container' => false,
                            ));
                        ?>
                    </div>

                    <div class="col-3">
                        <h3>Connect</h3>
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'footer-connect',
                                'depth' => 1,
                                'container' => false,
                            ));
                        ?>
                    </div>

                    <div class="col-3">
                        <h3>Sermons</h3>
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'footer-sermons',
                                'depth' => 1,
                                'container' => false,
                            ));
                        ?>
                    </div>

                    <div class="col-3">
                        <h3>Contact</h3>
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'footer-contact',
                                'depth' => 1,
                                'container' => false,
                            ));
                        ?>
                    </div>
                </div>

                <div class="row slogan">
                    <div class="col-12">
                        <p>Worshiping God, discipling people, and serving the world!</p>
                    </div>
                </div>

                <div class="row copyright margin-xl-top">
                    <div class="col-6">
                        <a class="logo float-left" href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" />
                            <h1>Cornerstone</h1>
                        </a>
                    </div>

                    <div class="col-6 text-right">
                        <p class="margin-xs-top">
                            Copyright &copy; 2018 Cornerstone Community Church.<br />
                            All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
