<div id="menu">
	<div class="container">
		<div class="row footer-links">
			<div class="col-6 col-sm-3 offset-lg-2 col-lg-2">
				<h3 class="blue-underline bold">About</h3>
				<?php
                    wp_nav_menu(array(
                        'menu' => 'menu-about',
                        'depth' => 1,
                        'container' => false,
                    ));
                ?>
			</div>

			<div class="col-6 col-sm-3 col-lg-2">
				<h3 class="blue-underline bold">Connect</h3>
				<?php
                    wp_nav_menu(array(
                        'menu' => 'menu-connect',
                        'depth' => 1,
                        'container' => false,
                    ));
                ?>
			</div>

			<div class="col-6 col-sm-3 col-lg-2">
				<h3 class="blue-underline bold">Sermons</h3>
				<?php
                    wp_nav_menu(array(
                        'menu' => 'menu-sermons',
                        'depth' => 1,
                        'container' => false,
                    ));
                ?>
			</div>

			<div class="col-6 col-sm-3 col-lg-2">
				<h3 class="blue-underline bold">Contact</h3>
				<?php
                    wp_nav_menu(array(
                        'menu' => 'menu-contact',
                        'depth' => 1,
                        'container' => false,
                    ));
                ?>
			</div>
		</div>

		<div class="row slogan">
			<div class="col-12">
				<p><?php echo get_bloginfo('description', 'display'); ?></p>
			</div>
		</div>

		<div class="row copyright">
			<div class="col-12 col-sm-6">
				<a class="logo" href="<?php echo get_home_url(); ?>">
					<img src="https://cornerstonebillings.org/wp-content/uploads/2020/03/logo-short.png"
						alt="<?php echo bloginfo('name'); ?>" />
				</a>
			</div>

			<div class="col-12 col-sm-6">
				<p class="margin-xs-top">
					Copyright &copy; <?php echo date('Y'); ?> Cornerstone Community Church.<br />
					All Rights Reserved. Created by <a href="https://uncommonjoe.com" target="_blank">UncommonJoe
						LLC</a>
				</p>
			</div>
		</div>
	</div>
</div>
