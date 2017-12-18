<?php
header("Access-Control-Allow-Origin: *"); // allows cross orgin ajax

include( '../../include/webinar-include.php' );
echo '<option value="" selected>Select a time...</option>';

foreach ( $availableDates as $unix ) {
	// display time in user timezone
	date_default_timezone_set($timezone);
	$text = date( 'l, F jS \a\t g:ia', $unix );
	$tzAbr = date('T', $unix);
	
	// set inf date/time in default
	date_default_timezone_set($defaultTimeZone);

	echo '<option data-date="'.date('m-d-Y', $unix).'" data-time="'.date('H:i', $unix).'" value="'.$unix.'">'.$text.' ('.$tzAbr.')</option>';
}
								