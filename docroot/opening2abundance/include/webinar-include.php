<?php

$path              = '/opening2abundance/'; // (/ = root)
$localPath         = '/mtm/opening2abundance/'; // leave blank if root
$localHttpHost     = 'localhost:8888'; // use $_SERVER['HTTP_HOST'] on your local testing server if you're not sure

// don't edit anything past this line
if($_SERVER['HTTP_HOST'] == $localHttpHost){
	$local       = true;
	$includePath = $_SERVER['DOCUMENT_ROOT'].$localPath.'include/';
}else{
	$local       = false;
	$includePath = $_SERVER['DOCUMENT_ROOT'].$path.'include/';
}

// functions
include($includePath.'functions.php');

// config
include($includePath.'config.php');

// visitor information
include($includePath.'visitor-info.php');

// time simulation
include($includePath.'simulator.php');

// check for selected date
include($includePath.'selected-date.php');

// include config calculations
include($includePath.'config-calc.php');

// get available dates
$availableDates = getAvailableDates();

// calculate dates & times
include($includePath.'date-time-calc.php');
?>
