<?php
header("Access-Control-Allow-Origin: *"); // allows cross orgin ajax

// get tz
if(!empty($_GET['tz'])){
	$timezone = $_GET['tz'];
}else{
	$timezone = 'PT';
}
// get time of day
if(!empty($_GET['tod'])){
	$tod = $_GET['tod'];
}else{
	$tod = '10:00am';
}

// set timezone to pacific
date_default_timezone_set('America/Los_Angeles');
$unconverted = strtotime($tod);

switch($timezone){
	case 'PT':
		$userTimeZone         = 'America/Los_Angeles';
	break;
	case 'MT':
		$userTimeZone         = 'America/Denver';
	break;
	case 'CT':
		$userTimeZone         = 'America/Chicago';
	break;
	case 'ET':
		$userTimeZone         = 'America/New_York';
	break;
	case 'GMT':
		$userTimeZone         = 'Europe/London';
	break;
	case 'AS':
		$userTimeZone         = 'Australia/Sydney';
	break;
	case 'NZ':
		$userTimeZone         = 'Pacific/Auckland';
	break;
	default:
		$userTimeZone         = 'America/Los_Angeles';
	break;
}

// set timezone to user timezone
date_default_timezone_set($userTimeZone);

echo date('h:ia', $unconverted);