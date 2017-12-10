<?php
include('../../include/config.php');

$contactId = false;
$tagId     = false;

if(!empty($_COOKIE['contactId'])){
    $contactId = intval($_COOKIE['contactId']);
}
if(!empty($_GET['contactId'])){
    $contactId = intval($_GET['contactId']);
}
if(!empty($_POST['contactId'])){
    $contactId = intval($_POST['contactId']);
}

if(!empty($_REQUEST['tagId'])){
    $tagId = intval($_REQUEST['tagId']);
}

if($contactId AND $tagId){
	include('../../infusionsoft-sdk/src/isdk.php');
	$app = new iSDK;
	$app->cfgCon($infApp, $infKey);
    $result = $app->grpAssign($contactId, $tagId);
}
?>