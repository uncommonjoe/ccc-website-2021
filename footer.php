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
        					alt="Cornerstone Community Church Facebook Page"
        					title="Cornerstone Community Church Facebook Page">
        					<img class="padding-md-right"
        						src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-facebook.svg"
        						alt="Facebook" />
        					Facebook
        				</a>

        				<a class="btn btn-light d-block text-left font-500 padding-md-left margin-sm-bottom"
        					href="https://www.youtube.com/channel/UC1Ynk4qAMEVc92G-t-RXmeg" target="_blank"
        					alt="Cornerstone Community Church YouTube Page"
        					title="Cornerstone Community Church YouTube Page">
        					<img class="padding-md-right"
        						src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-youtube.svg"
        						alt="YouTube" />
        					YouTube
        				</a>
        			</div>
        		</div>
        	</div>
        </div>

        <?php include('menu.php'); ?>

        <div id="overlay"></div>

        <div class="window-mobile"></div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.2.0/gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.core.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>


        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.4/angular.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/app/app.module.js?v3.0.0"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/app/app.js?v3.0.0"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/app/controllers/theDailyController.js?v3.0.0">
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/app/controllers/signupListController.js?v3.0.0">
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/app/directives/serviceSignupDirective.js?v3.0.0">
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/app/directives/confirmClickDirective.js?v3.0.0">
        </script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js?v3.0.0"></script>

        <?php wp_footer(); ?>
        </body>

        </html>
