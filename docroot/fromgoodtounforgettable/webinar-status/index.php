<?php

// get contactId
if(!empty($_GET['contactId'])){
	$contactId = intval($_GET['contactId']);
}else{
	echo json_encode(array('success' => false), true);
	exit();
}

// include config file
include('../include/config.php');

// set timezone
date_default_timezone_set($defaultTimeZone);

//load contact tags
include('../infusionsoft-sdk/src/isdk.php');
$app = new iSDK;
$app->cfgCon($infApp, $infKey);

$returnFields = array('_'.$infApiDateField);
if($dateTimeType == 'date'){
	$returnFields[] = 'Groups';
}

$conDat = $app->dsLoad("Contact", $contactId, $returnFields);

if(!isset($conDat['Groups'])){
	$tags = array();
}else{
	$tags = explode(',', $conDat['Groups']);
}

// check for date
if(!isset($conDat['_'.$infApiDateField])){
	echo json_encode(array('success' => false), true);
	exit();
}else{
	$infDate = $conDat['_'.$infApiDateField];
}

// set defaults
$unixStartTime = false;

switch($dateTimeType){
	case 'text':
		$unixStartTime = intval($infDate);
	break;
	case 'dateTime':
		$unixStartTime = strtotime($infDate);
	break;
	case 'date':
		$unixStartDay = strtotime($infDate);
		$startDayText = date('F d Y');
		$time         = false;
		
		foreach($timeTags as $tagInfo){
			$tagId   = $tagInfo[0];
			$tagTime = $tagInfo[1];
			
			if(in_array($tagId, $tags)){
				$time = $tagTime;
			}
		}
		
		if($time){
			$unixStartTime = strtotime($startDayText.' '.$time);
		}
		
	break;
}


// don't return it if it's over a year old
if($unixStartTime < strtotime('-1 year')){
	$unixStartTime = false;
}

if($unixStartTime){
	$success = true;
	//echo date('g:ia F d Y', $unixStartTime); exit();
}

// json return findings
echo json_encode(
	array(
			'success'       => $success,
			'unixStartTime' => $unixStartTime
	), true
);