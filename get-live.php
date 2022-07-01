<?php

	/* Template Name: GET LIVE DATA */
	// Create page with this file as the template

	global $wpdb;

	$results = $wpdb->get_var( "SELECT isLive FROM wp_live where id = 1" );
	
	if(!$results){
		$wpdb->print_error();
	}
	else {
		echo $results;
	}
?>