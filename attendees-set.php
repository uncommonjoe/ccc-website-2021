<?php
	/* Template Name: SET Attendees */

	$form_data = json_decode(file_get_contents("php://input"));

    $name = $form_data->name;
    $email = $form_data->email;
    $time = $form_data->time;
    $currentTime = current_time('mysql');
	$people = $form_data->people;
	$kindergarden = $form_data->kindergarden;
	
	if($kindergarden >= 1) {
		$kindergardenValue = $kindergarden;
	}else {
		$kindergardenValue = 0;
	}

	if($time == "8:30 AM") {
		$firstPeople = $people;
		$secondPeople = 0;
		$firstOverflowPeople = 0;
		$secondOverflowPeople = 0;
	}
	else if($time == "10:30 AM") {
		$firstPeople = 0;
		$secondPeople = $people;
		$firstOverflowPeople = 0;
		$secondOverflowPeople = 0;
	}
	else if($time == "8:30 AM Overflow") {
		$firstPeople = 0;
		$secondPeople = 0;
		$firstOverflowPeople = $people;
		$secondOverflowPeople = 0;
	}
	else if($time == "10:30 AM Overflow") {
		$firstPeople = 0;
		$secondPeople = 0;
		$firstOverflowPeople = 0;
		$secondOverflowPeople = $people;
	}

	global $wpdb;
	
	$wpdb->insert(
		'wp_service_attendees', 
		array(
			'name' => $name,
			'time' => $currentTime,
			'email' => $email,
			'kindergarden' => $kindergardenValue,
			'firstService' => $firstPeople,
			'secondService' => $secondPeople,
			'firstServiceOverflow' => $firstOverflowPeople,
			'secondServiceOverflow' => $secondOverflowPeople,
		)
		);

	$results = $wpdb->get_results("
		SELECT 
			SUM(firstService) AS firstService,
			SUM(secondService) AS secondService,
			SUM(firstServiceOverflow) AS firstServiceOverflow,
			SUM(secondServiceOverflow) AS secondServiceOverflow
			FROM `wp_service_attendees`
			WHERE 1
		");

	if($results){
		echo json_encode($results);

		$message = '
			<body style="background: linear-gradient(to right, rgba(2, 168, 204, 0.5), rgba(255, 128, 055, 0.5)), url(https://cornerstonebillings.org/wp-content/uploads/2020/03/photo-1434394354979-a235cd36269d.jpeg) center center / cover no-repeat;">
				<table style="text-align: center;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 30px;"></tr>

						<tr>
							<td colspan="2" style="width: 100%;" width="100%">
								<img src="https://cornerstonebillings.org/wp-content/uploads/2020/03/logo-complete.png" alt="Cornerstone Community Church" style="width: 100%;max-width: 220px;">
							</td>
						</tr>
					</tbody>
				</table>

				<table style="background-color: white;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 50px;"></tr>

						<tr>
							<td colspan="2" style="width: 100%;" width="100%">
								<h2>Your seats are saved!</h2>
								<p>Hi ' . $name . ', We just wanted to let you know that we have received your request for <strong>' . $people. ' people</strong> to be included in Sunday&#8217;s <strong>' . $time .'</strong> service. We have room for you! We are looking forward to seeing
									you at church on Sunday!</p>
							</td>
						</tr>

						<tr class="spacer-90" style="height: 50px;"></tr>
					</tbody>
				</table>

				<table style="text-align: center;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 30px;"></tr>
					</tbody>
				</table>
			</body>
		';


		$recipient = $email;

		$headers = "From: Cornerstone Community Church <office@cornerstonebillings.org>\r\n";
		$headers .= "Reply-To: <office@cornerstonebillings.org>\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		$subject = "Confirmation for Sunday Worship Service"; 

		mail($recipient, $subject, $message, $headers);

	}
	else {
		$wpdb->print_error();
	}
?>