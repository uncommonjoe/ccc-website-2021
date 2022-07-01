<?php

	/* Template Name: SET LIVE DATA */
	// Create page with this file as the template

	// http://localhost:8888/cornerstone/set-live/?live=true

	$checkLive = $wpdb->get_var( "SELECT isLive FROM wp_live WHERE id = 1");
    
    // if there is a GET parameter
    if (!empty($_GET)) {

        // get live value from GET parameter
        $getLive = $_GET['live'];
        
        // set isLive to 1 if true, else 0
		$isLive = $getLive === 'true'? 1 : 0;

		global $wpdb;
		
		$setLive = $wpdb->update(
			'wp_live', 
			array('isLive' => $isLive),
			array('id' => 1)
		);
		
        if ($checkLive == $isLive) {
            $title = '<span style="color: red;">Live is already '. ($isLive == 1 ? 'on' : 'off') .'</span>';
        }
		else if(!$setLive){
			$wpdb->print_error();

            $query = $wpdb->last_query;
		}
		else {	
			if($isLive === 1){
				$title = 'Now live!';
			}

			else if($isLive === 0) {
				$title = 'Live is off';
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
            <form method="get">
                <input type="hidden" name="live" value="<?php echo $isLive == 1 ? 'false' : 'true'; ?>">
                <button type="submit">Turn live <?php echo $isLive == 1 ? 'off' : 'on'; ?></button>
            </form>
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