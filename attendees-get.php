<?php
	/* Template Name: GET Attendees */
	// Create page with this file as the template

	global $wpdb;

	$query = $wpdb->get_results("
		SELECT *,
		(SELECT 
			SUM(firstService)
				FROM `wp_service_attendees`
				WHERE `expired` IS NULL)
				AS `sumFirstService`,
			
		(SELECT
			SUM(secondService)
				FROM `wp_service_attendees`
				WHERE `expired` IS NULL)
				AS `sumSecondService`,
		
		(SELECT
			SUM(firstServiceOverflow)
				FROM `wp_service_attendees`
				WHERE `expired` IS NULL)
				AS `sumFirstServiceOverflow`,

		(SELECT
			SUM(secondServiceOverflow)
				FROM `wp_service_attendees`
				WHERE `expired` IS NULL)
				AS `sumSecondServiceOverflow`,
				
				CURDATE() + INTERVAL 6 - weekday(CURDATE()) DAY
				AS sunday
			FROM `wp_service_attendees`
			WHERE `expired` IS NULL;
		");


	if($query){
		echo json_encode($query);
	}
	else {
		$wpdb->print_error();
	}
?>