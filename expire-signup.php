<?php

	/* Template Name: Expire Signup */
	// Create page with this file as the template

	global $wpdb;

	$query = $wpdb->prepare("
		UPDATE `wp_service_attendees`
		SET `expired` = CURRENT_TIMESTAMP()
		WHERE (`id` > 1 AND `expired` IS NULL)
	");

	$results = $wpdb->get_results($query);

	if($results){
		echo json_encode($results);
	}
	else {
		$wpdb->print_error();
	}
?>