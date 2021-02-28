<?php

	// Template Name: DELETE Attendee
	// Create page with this file as the template

	$path = $_SERVER['DOCUMENT_ROOT']; 
	include_once $path . '/wp-load.php';

	$form_data = json_decode(file_get_contents("php://input"));

	global $wpdb;

	$database = 'wp_service_attendees';
	$currentTime = current_time('mysql');
	$data = array('expired' => $currentTime);

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($form_data === null){

			$get_ids = $wpdb->get_col("
				SELECT id
				FROM $database
				WHERE (`id` > 1 AND `expired` IS NULL)
			");
		
			// foreach($get_ids as $value){
				$where = array('id' => $value);

				$wpdb->update(
					$database,
					$data,
					$where,
				);
			// };

		 	echo "Expired";	
		}

		else {
			$wpdb->delete(
				$database,
				array(
					'id' => $form_data
					)
			);

			echo "Deleted";
		}
	}

	else {
		echo "Don't access this file directly";
	};
?>