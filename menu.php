<div class="clearfix"></div>

</div><!-- .page -->

<div id="connect">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h3 class="bold">Connect with us</h3>
				<p class="font-size-sm margin-xs-bottom">
					4525 Grand Ave.<br />Billings, MT 59106</p>

				<p class="font-size-sm margin-xs-bottom">
					<a class="btn-link light" href="tel:+14066564407">(406) 656-4407</a>
				</p>

				<p class="font-size-sm margin-xs-bottom">
					<a class="btn-link light" href="about/contact/">office@cornerstonebillings.org</a>
				</p>
				</p>
			</div>

			<div class="col-12 offset-md-2 col-md-4 offset-lg-3 col-lg-3 text-right margin-md-top">
				<a class="btn btn-yellow d-block text-left font-500 padding-md-left margin-sm-bottom" href=""
					alt="Download our mobile app on Apple Store and Google Play"
					title="Download our mobile app on Apple Store and Google Play">
					<img class="padding-md-right"
						src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-app.svg"
						alt="Download our mobile app on Apple Store and Google Play" />
					Get the app
				</a>

				<a class="btn btn-light d-block text-left font-500 padding-md-left margin-sm-bottom"
					href="https://www.facebook.com/cornerstonebillings/" target="_blank"
					alt="Cornerstone Community Church Facebook Page" title="Cornerstone Community Church Facebook Page">
					<img class="padding-md-right"
						src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-facebook.svg" alt="Facebook" />
					Facebook
				</a>

				<a class="btn btn-light d-block text-left font-500 padding-md-left margin-sm-bottom"
					href="https://www.youtube.com/channel/UC1Ynk4qAMEVc92G-t-RXmeg" target="_blank"
					alt="Cornerstone Community Church YouTube Page" title="Cornerstone Community Church YouTube Page">
					<img class="padding-md-right"
						src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-youtube.svg" alt="YouTube" />
					YouTube
				</a>
			</div>
		</div>
	</div>
</div>

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
