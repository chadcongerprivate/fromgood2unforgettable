<?php
include( '../../include/webinar-include.php' );
echo '<option value="" selected>Select a time...</option>';

foreach ( $availableDates as $unix ) {
	$text = date( 'l, F jS \a\t g:ia', $unix );
	$tzAbr = date('T', $unix);

	echo '<option value="'.$unix.'">'.$text.' ('.$tzAbr.')</option>';
}
								