<?php
include('../../include/webinar-include.php');

if(!$dateSelected){
	header('Location: ../');
	exit();
}

include('../../infusionsoft-sdk/src/isdk.php');
	$app = new iSDK;
if($app->cfgCon($infApp, $infKey)){
	// get tag group name
	$returnFields = array('CategoryName');
	$groupData    = $app->dsLoad("ContactGroupCategory", $groupCategoryId, $returnFields);
	$tagCatName   = $groupData['CategoryName'];
	
	// get tags in the webinar category
	$returnFields = array('Id','GroupName');
	$query        = array('GroupCategoryId' => $groupCategoryId);
	$tags         = $app->dsQuery("ContactGroup",1000,0,$query,$returnFields);
}else{
	echo 'Infusionsoft API connection failed.';
	exit();
}

// start generating schedule
$schedule = array();

// loop through visual elements (use description)
foreach($visualElementsUnix as $ve){
	$unixTimeStamp = $ve[0];
	$description   = $ve[1];
	$tagId         = $ve[2];
	
	if($tagId){
		$description .= ' ('.tagInfo($tagId).')';
	}
	
	addToSchedule($unixTimeStamp, $description);
}
// pre-roll
if($preRollVidStart < $eventVidStart){
	addToSchedule($unixPreRollTime, 'Pre-Roll Plays');
}

// this date is removed from registration page
addToSchedule($unixRegCuttoff, 'This date is removed from available dates on registration');

// confirmation page starts redirecting
addToSchedule($unixConRedirect, 'Confirmation page redirects to staging');

// start time
addToSchedule($unixStartTime, 'Event Starts');

// Main CTA
if($ctaVidShow){
	addToSchedule($unixCtaTime, 'Main CTA Shows');
}

// end time
addToSchedule($unixEndEvent, 'Event Ends');

// bonus expiration
addToSchedule($unixBonusExpire, 'Bonuses expire');


// sort schedule in order by time
ksort($schedule);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Webinar Simulator</title>
<link rel="shortcut icon" href="https://webinars.motivatingthemasses.com/favicon.png">
	
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/simulator.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Start Section -->
<?php
$bg = 'light-grey-bg';
foreach($schedule as $k => $v){
	if($bg == 'white-bg'){
		$bg = 'light-grey-bg';
	}else{
		$bg = 'white-bg';
	}
?>
<!-- Start Section -->
<div class="section <?=$bg?>">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
        <h3><?=date('g:i:s a M d Y', $k)?>
        </h3>
        <?=$v['description']?>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-2 col-md-offset-1">
        <h4><a href="../../?t=<?=date('g:i:sa+M+d+Y', $k)?>&tz=<?=$timezone?>&webId=<?=$unixStartTime?>" target="_blank">Registration</a></h4>
        <p><?=$v['actions']['Registration']?></p>
      </div>
      <div class="col-md-2">
        <h4><a href="../../confirmation/?t=<?=date('g:i:sa+M+d+Y', $k)?>&tz=<?=$timezone?>&webId=<?=$unixStartTime?>" target="_blank">Confirmation</a></h4>
        <p><?=$v['actions']['Confirmation']?></p>
      </div>
      <div class="col-md-2">
        <h4><a href="../../attend/?t=<?=date('g:i:sa+M+d+Y', $k)?>&tz=<?=$timezone?>&webId=<?=$unixStartTime?>" target="_blank">Staging</a></h4>
        <p><?=$v['actions']['Staging']?></p>
      </div>
      <div class="col-md-2">
        <h4><a href="../../event/?t=<?=date('g:i:sa+M+d+Y', $k)?>&tz=<?=$timezone?>&webId=<?=$unixStartTime?>" target="_blank">Event</a></h4>
        <p><?=$v['actions']['Event']?></p>
      </div>
      <div class="col-md-2">
        <h4><a href="../../order/?t=<?=date('g:i:sa+M+d+Y', $k)?>&tz=<?=$timezone?>&webId=<?=$unixStartTime?>" target="_blank">Order</a></h4>
        <p><?=$v['actions']['Order']?></p>
      </div>
    </div>
    
  </div>
</div>
<!-- End Section -->
<?php
}
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

</body>
</html>

