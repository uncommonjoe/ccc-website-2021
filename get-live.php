<?php

	/* Template Name: GET LIVE DATA */
	// Create page with this file as the template

	global $wpdb;

	$table = "wp_live";
	$results = $wpdb->get_var( "SELECT isLive FROM wp_live" );
	
	if(!$results){
		$wpdb->print_error();
	}
	else {
		echo $results;
	}
?>