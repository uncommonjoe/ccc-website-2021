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

		$title = null;
		$hasTitle = null;
		
		if(!$success){
			$wpdb->print_error();
		}
		else {
			
			if($isLive === "true"){
				$title = 'Now live!';
				$hasTitle = true;
			}

			else if($isLive === "false") {
				$title = 'Live is off';
				$hasTitle = true;
			}
			
		}
	}  
?>
<html>

<body>
    <section>
        <div>
            <img src="../wp-content/themes/ccc-website-2021/img/logo-header.svg" />
            <h1><?php echo $title; ?></h1>
            <h1><?php if(!$hasTitle && !$isLive) { echo "Enter parameter in URL"; } ?></h1>
        </div>
    </section>
</body>

<style type="text/css">
body {
    font-family: Montserrat, -apple-system, "Segoe UI", "Open Sans", "Helvetica Neue", sans-serif;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
}

section>div {
    text-align: center;
}

img {
    width: 50vw;
}

h1 {
    font-size: 4vw;
}
</style>

</html>