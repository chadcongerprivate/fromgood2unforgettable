<?php
// allows cross orgin ajax for subdomains
header("Access-Control-Allow-Origin: *");

// Update Timezone via API so that 2 optins aren't counted for tracking links
include('../../include/webinar-include.php');

if(($contactId != '' || $email != '') AND !empty($_GET['phone'])){
	include('../../../infusionsoft-sdk/src/isdk.php');
	$app = new iSDK;
	$app->cfgCon($infApp, $infKey);
}else{
	echo '0';
	exit();
}

if($contactId == ''){
	$returnFields = array('Id');
	$data = $app->findByEmail($email, $returnFields);
	$contactId = intval($data[0]['Id']);
}

if(!empty($_GET['phone']) AND $contactId != ''){
	$update = array();
	$update['Phone1']     = $_GET['phone'];
	$update['Phone1Type'] = 'Mobile';
	
	// apply tag for sms
	$result = $app->grpAssign($contactId, $tagSMSReminder);
	
	// add phone
	$conID = $app->updateCon($contactId, $update);
	echo '1';
	exit();
}else{
	echo '0';
	exit();
}

