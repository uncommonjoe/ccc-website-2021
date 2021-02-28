<?php

	/* Template Name: SET LIVE DATA */
	// Create page with this file as the template

	// http://localhost:8888/cornerstone/set-live/?live=true

	/*

		CREATE TABLE wp_live (
			id int(1),
			live varchar(20)
		);

		INSERT INTO `wp_live`(`id`) VALUES (1)
	*/

	if (!empty($_GET)) {
		$isLive = $_GET['live'];
		global $wpdb;

        $table = "wp_live";
		
		$data = array(
            'live' => $isLive
		);
		
		//$success = $wpdb->insert( $table, $data );
		//$success = $wpdb->query("UPDATE $table SET live = '$isLive' WHERE id = 1"));

		$success = $wpdb->update(
			'wp_live', 
			array('live' => $isLive),
			array('id'=>1)
		);
		
        if(!$success){
			$wpdb->print_error();
		}
		else {
			echo 'Success';
		}
	}  
?>