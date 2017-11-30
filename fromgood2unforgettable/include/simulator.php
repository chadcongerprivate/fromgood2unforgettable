<?php
// set timezone to user timezone and set now to simulation time if a simulation time is sent
if(!empty($_GET['t'])){
	date_default_timezone_set($timezone);
	$now = strtotime(urldecode($_GET['t']));
}else{
	$now = strtotime('now');
}