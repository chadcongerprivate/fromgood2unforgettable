<?php
// get contactId
$contactId = '';
if(!empty($_COOKIE['contactId'])){
	$contactId = intval($_COOKIE['contactId']);
}
if(!empty($_GET['contactId'])){
	$contactId = intval($_GET['contactId']);
}
if(isset($contactId)){
	// set cookie for contactId
	$expire =  time()+60*60*24*90; // 90 days
	setcookie("contactId", $contactId, $expire, '/', '.'.$domainName);
}

//get email
$email = '';
if(!empty($_GET['inf_field_Email'])){
	$email = urldecode($_GET['inf_field_Email']);
}
if(!empty($_GET['email'])){
	$email = urldecode($_GET['email']);
}

// check for timezone
if(!empty($_COOKIE['timezone'])){
	$timezone = $_COOKIE['timezone'];
}	

// tz in url takes priority over cookie
if(!empty($_GET['tz'])){
	$timezone = urldecode($_GET['tz']);
}

// check for timezone sent via infusionsoft
if(!empty($_GET[$infTimezoneField])){
	$timezone = urldecode($_GET[$infTimezoneField]);
}

// set default timezone if it hasn't been set
if(!isset($timezone) || !isValidTimezone($timezone)){
	$timezone = $defaultTimeZone;
}

// set cookie for timezone
$expire =  time()+60*60*24*90; // 90 days
setcookie("timezone", $timezone, $expire, '/', '.'.$domainName);

// set timezone
if(in_array($timezone, $playInUserTZ)){
	date_default_timezone_set($timezone);
}else{
	date_default_timezone_set($defaultTimeZone);
}