<?php
// find out when the webinar is
$unixStartTime = false;
$dateSelected  = false;
$ended         = false;
$live          = false;

if($liveDate){
	$live          = true;
	$unixStartTime = strtotime($liveDate);
	$dateSelected  = 'live date';
}else if(!empty($_GET['webId'])){
	$unixStartTime = intval($_GET['webId']);
	$dateSelected  = 'query string';
}else if(!empty($_GET['inf_custom_'.$infApiDateField])){
	$unixStartTime = intval($_GET['inf_custom_'.$infApiDateField]);
	$dateSelected  = 'query string';
}else if(!empty($_COOKIE[$dateCookieName])){
	$unixStartTime = intval($_COOKIE[$dateCookieName]);
	$dateSelected  = 'cookie';
}else if($contactId != ''){
	if($local){
		$webinarStatus = file_get_contents('http://'.$localHttpHost.$localPath.'webinar-status/?contactId='.$contactId);
	}else{
		$webinarStatus = file_get_contents($domainPrefix.$domainName.$path.'webinar-status/?contactId='.$contactId);
	}
	
	// get date from Infusionsoft
	$contactData = json_decode($webinarStatus, true);
	
	// check for webinar date
	if($contactData['success']){
		$dateSelected  = 'api';
		$unixStartTime = $contactData['unixStartTime'];
	}
}