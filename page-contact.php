<?php
    /* Template Name: Page - Contact */

    get_header();
    get_template_part('template-parts/header/page-header');
?>

<div class="page-content margin-xxl-top margin-xxl-bottom" data-ng-controller="ContactController as vm">
	<div class="container">
		<div class="row">
			<div
				class="col-12 col-lg-6 offset-xl-1 col-xl-6 padding-xl-right padding-xl-bottom r-padding-sm-right r-sm r-md">
				<h1 class="fw-600">We look forward to hearing from you!</h1>

				<form class="margin-xl-top" name="form" data-ng-submit="vm.submitForm(vm.contactForm)"
					data-ng-if="!vm.wasMessageSent">
					<div class="form-group">
						<label for="name">Name <span class="req">*</span></label>
						<input type="text" data-ng-model="vm.contactForm.name" class="form-control" id="name"
							name="name" required />
					</div>

					<div class="form-group">
						<label for="email">Email <span class="req">*</span></label>
						<input type="email" data-ng-model="vm.contactForm.email" class="form-control" id="email"
							name="email" required />
					</div>

					<div class="form-group">
						<label for="message">Message <span class="req">*</span></label>
						<textarea type="message" data-ng-model="vm.contactForm.message" class="form-control" rows="5"
							id="message" required></textarea>
					</div>

					<button type="submit" class="btn btn-dark btn-inverse">Send Message</button>
				</form>

				<div class="alert alert-success margin-xl-top" role="alert" data-ng-if="vm.wasMessageSent">
					Your email has been sent successfully.
				</div>
				<div class="alert alert-warning margin-lg-top" role="alert"
					data-ng-if="vm.messageError && !vm.wasMessageSent">
					Unable to send email. Please try again.
				</div>
			</div>

			<div class="col-12 col-lg-6 col-xl-4">

				<!-- Contact Info Section -->
				<?php
                   $contact_section = get_field('contact_section_contact');
                   $contact_title = esc_attr($contact_section['section_title']);
                   $contact_phone = esc_attr($contact_section['phone_label']);
                   $contact_email = esc_attr($contact_section['email_label']);

                   if ($contact_section && $contact_title && ($contact_phone || $contact_email)) :
                ?>

				<h3 class="fw-600 margin-md-bottom">
					<?php echo $contact_title;?>
				</h3>

				<?php
                    if ($contact_phone):
                ?>
				<div class="text-group">
					<div class="text-group-title font-color-accent ng-cloak">
						<?php echo $contact_phone ;?>
					</div>

					<div class="text-group-value">
						<a class="btn-link light"
							href="tel:<?php the_field('global_phone_number_unformatted', 'option'); ?>">
							<?php the_field('global_phone_number_formatted', 'option'); ?>
						</a>
					</div>
				</div>
				<?php endif; ?>

				<?php
                    if ($contact_email):
                ?>
				<div class="text-group">
					<div class="text-group-title font-color-accent ng-cloak">
						<?php echo $contact_email;?>
					</div>

					<div class="text-group-value">
						<a class="btn-link light" href="about/contact/">
							<?php the_field('global_email', 'option'); ?>
						</a>
					</div>
				</div>

				<?php
                    endif;
                    endif;
                ?>

				<!-- Location Section -->
				<?php
                   $location_section = get_field('location_section');
                   $location_title = esc_attr($location_section['section_title']);
                   $location_address = esc_attr($location_section['address_label']);

                   if ($location_section && $location_title && $location_address) :
                ?>

				<h3 class="fw-600 margin-md-bottom margin-lg-top">
					<?php echo $location_title;?>
				</h3>

				<div class=" text-group">
					<div class="text-group-title font-color-accent ng-cloak">
						<?php echo $location_address;?>
					</div>

					<div class="text-group-value">
						<?php the_field('global_address', 'option'); ?>
					</div>
				</div>

				<?php
                    endif;
                ?>

				<!-- Office Hours Section-->
				<?php
                   $office_hours_section = get_field('office_hours_section');
                   $office_hours_title = esc_attr($office_hours_section['section_title']);
                   $office_hours_label = esc_attr($office_hours_section['hours_label']);

                   if ($office_hours_section && $office_hours_title && $office_hours_label) :
                ?>

				<h3 class="fw-600 margin-md-bottom margin-lg-top">
					<?php echo $office_hours_title;?>
				</h3>

				<div class=" text-group">
					<div class="text-group-title font-color-accent ng-cloak">
						<?php echo $office_hours_label;?>
					</div>

					<div class="text-group-value text-uppercase">
						<?php echo esc_attr($office_hours_section['starting_hours']) ?>
						-
						<?php echo esc_attr($office_hours_section['ending_hours']) ?>
					</div>
				</div>

				<?php
                    endif;
                ?>

				<!-- Services Section -->

				<?php
                   $services_section = get_field('services_section1');
                   $services_title = esc_attr($services_section['section_title']);
                   $services_label = esc_attr($services_section['service_label']);

                   if ($services_section && $services_title && $services_label) :
                ?>

				<h3 class="fw-600 margin-md-bottom margin-lg-top">
					<?php echo $services_title; ?>
				</h3>

				<div class="text-group">
					<div class="text-group-title font-color-accent ng-cloak">
						<?php echo $services_label; ?>
					</div>

					<div class="text-group-value">
						<?php
                            $firstServiceTime = get_field('global_first_service_time', 'option');
                            $firstServiceAmpm = get_field('global_first_service_ampm', 'option');
                            $secondServiceTime = get_field('global_second_service_time', 'option');
                            $secondServiceAmpm = get_field('global_second_service_ampm', 'option');
                                
                            echo $firstServiceTime .' ' . $firstServiceAmpm;
                        
                            if ($secondServiceTime) {
                                echo ' and ';
                                echo $secondServiceTime .' ' . $secondServiceAmpm;
                            }
                        ?>
					</div>
				</div>

				<?php
                    endif;
                ?>

			</div>
		</div>
	</div>

	<?php
    include('menu.php');
    get_footer();
?>
