<?php
include( '../include/webinar-include.php' );
include('../infusionsoft-sdk/src/isdk.php');
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?=$webinarName?> Simulator</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="../css/simulator.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php
	if ( !$dateSelected ) {
		?>
	<?php
	}
		?>
		<!-- Start Section -->
		<div class="section light-grey-bg">
			<div class="container">
				<div class="row">
				</div>
				<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<h3 class="dark-grey"><?=$webinarName?> Testing Simulator</h3>
					<p> <strong>Current Time:</strong><br>
							<?php
								echo date( 'l g:ia M d Y', $now ).' ('.$timezone.')';
							?>
						</p>
						<p><strong>Selected Date:<br>
      </strong>
							<?php
							switch ( $dateSelected ) {
								case 'query string':
									echo 'You date has been selected based on a query string parameter';
									break;
								case 'cookie':
									echo 'You date has been selected based on a cookie';
									break;
								case 'api':
									echo 'You date has been selected based on and API lookup on your contact record';
									break;
								case 'live date':
									echo 'You date has been selected based on a live date that is hard coded';
								break;
								default:
									echo 'No date selected.';
									break;
							}
							?>
						</p>
						<p><strong>Infusionsoft Merge Link To Attend:<br>
      </strong>
							<?=$InfMergeLink?>
						</p>
						<p><strong>Current Timezone:<br>
      </strong>
							<?=$timezone?>
						</p>
						<?php
	if ( $dateSelected ) {
		?>
						<p> <strong>Start Time:</strong><br>
							<?php
							if ( $ended ) {
								echo 'Webinar has ended';
							} else {
								echo date( 'l g:ia M d Y', $unixStartTime );
							?>
					<p><a href="schedule/?<?=$_SERVER['QUERY_STRING']?>" target="_blank">Click here</a> to test the schedule.</p>
							<?php
							}
							?>
						</p>
				<?php
	}
		?>
				</div>
				<div class="col-md-5">
				<br><br><br>
					<p>
						 Enter any information below that you wish to test.<em></em>
					</p>

					<form action="" method="get">
					<div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="t" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <?php
						if(!$live){
			?>
						<div class="form-group">
							<select name="webId" class="form-control">
								<option value="">Available dates based on current time...</option>
								<?php
								foreach ( $availableDates as $unix ) {
									$text = date( 'l, F jS \a\t g:ia', $unix );

									?>
								<option value="<?=$unix?>">
									<?=$text.' ('.$timezoneAbr.')'?>
								</option>
								<?php
								}
								?>
							</select>

						</div>
			
            <?php
						}
			?>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter contactId" name="contactId">
						</div>
						<div class="form-group">
							<?php simTZSelect(); ?>
						</div>
						<button class="btn btn-primary btn-block">Test With These Settings</button>
					</form>
				</div>
				</div>

			</div>
		</div>
		<!-- End Section -->


		<!-- Start Section -->
		<div class="section">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h3 class="text-center"><?=$webinarName?> Information</h3>
				<br>
				
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading1">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
          Available Webinar Dates &amp; Times
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
      <div class="panel-body">
        <?php
			if($liveDate AND $liveDate){
				echo 'This webinar will be live on '.$liveDate;
			}else{
		?>
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Max Available Dates</th>
			<th>Earliest Date</th>
			<th>Earliest Time</th>
			<th>Latest Time</th>
			<th>Possible Start Times</th>
			<th>Excluded Dates</th>
		</tr>
		<tr>
			<td><?=$maxDates?></td>
			<td>
			<?php
			if(!$earliestDate){
				echo 'Today';
			}else{
				echo $earliestDate;
			}
				?>
			</td>
			<td><?=$earliestTime?>
			</td>
			<td><?=$lastestTime?></td>
			<td>
			<?php
			$dowKey = array('', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
			foreach($playDates as $key => $dayOfWeek){
				if(count($dayOfWeek) > 0){
					echo '<strong>'.$dowKey[$key].'</strong><br>';
					
					foreach($dayOfWeek as $time){
						switch($time){
							case '15min':
								echo '15 min intervals<br>';
							break;
							case '30min':
								echo '30 min intervals<br>';
							break;
							case 'hour':
								echo '1 hour intervals<br>';
							break;
							default:
								echo $time.'<br>';
							break;
						}
					}
				}
			}
			?></td>
			<td>
			<?php
			foreach($excludeDates as $eDates){
				echo $eDates."<br>";
			}
			?></td>
		</tr>
	</tbody>
</table>
     <?php
			} // end live date
	?>
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading2">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
          Video</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body">
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Video Type</th>
			<?php
			if($videoType == 'youTube'){
				$heading = 'youTube Id';
			}else{
				$heading = 'Video Files';
			}
			?>
			<th><?=$heading?></th>
			<th>Pre-Roll Start</th>
			<th>Event Start</th>
			<th>Video Length</th>
			<th>Video Id</th>
		</tr>
		<tr>
			<td><?=$videoType?></td>
			<td>&nbsp;</td>
			<td><?=gmdate("H:i:s", $preRollVidStart)?></td>
			<td><?=gmdate("H:i:s", $eventVidStart)?></td>
			<td><?=$videoLengthHours?>:<?=$videoLengthMin?>:<?=$videoLengthSec?></td>
			<td>
			<?=$videoId?>
			</td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading3">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
          Selected Date &amp; Timezone</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
      <div class="panel-body">
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Default Timezone</th>
			<th>Inf. Timezone Field</th>
			<th>Inf. Date Field</th>
			<th>Date Field Type</th>
			<th>Inf. Selected Time Tags</th>
			<th>Remove Available Time</th>
			<th>Redirect Confirmation</th>
			<th>Play In Visitors Timezone</th>
		</tr>
		<tr>
			<td><?=$defaultTimeZone?></td>
			<td><?=$infTimezoneField?></td>
			<td><?=$infApiDateField?></td>
			<td><?=$dateTimeType?></td>
			<td>
			<?php
			foreach($timeTags as $tagData){
				echo '<strong>'.$tagData[0].'<strong> - '.$tagData[1].'<br>';
			}
			?>
			</td>
			<td>
			<?php
			if($secTilCutOffReg < 0){
				$text = 'before';
			}else{
				$text = 'after';
			}
			echo gmdate("H:i:s", abs($secTilCutOffReg)).' '.$text.' event starts';
			?>
			</td>
			<td><?=gmdate("H:i:s", $secTilConRedirect)?> before start time</td>
			<td>
			<?php
			foreach($playInUserTZ as $uTz){
				echo $uTz.'<br>';
			}
			?>
			</td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
          Path</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body">
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Domain Prefix</th>
			<th>Domain Name</th>
			<th>Path to Webinar</th>
			<th>CTA Link</th>
			<th>Selected Date Cookie Name</th>
		</tr>
		<tr>
			<td><?=$domainPrefix?></td>
			<td><?=$domainName?></td>
			<td><?=$path?></td>
			<td><?=$ctaLink?></td>
			<td><?=$dateCookieName?></td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading5">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
          Social Share</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
      <div class="panel-body">
       <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Share Title</th>
			<th>Share Description</th>
			<th>Share Link</th>
			<th>Share Image</th>
		</tr>
		<tr>
			<td><?=$shareTitle?></td>
			<td><?=$shareDescription?></td>
			<td><?=$shareLink?></td>
			<td><img class="img-responsive" src="<?=$shareImage?>"></td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading6">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
          Infusionsoft Tagging</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Event Tags</th>
			<th>Timed Tags</th>
			<th>Segment Tags</th>
			<th>Click Tags</th>
		</tr>
		<tr>
			<td>
			<p><strong>Registered</strong><br><?=tagInfo($tagRegistered)?></p>
			<p><strong>SMS Reminders</strong><br><?=tagInfo($tagSMSReminder)?></p>
			<p><strong>Attended</strong><br><?=tagInfo($tagAttended)?></p>
			<p><strong>Saw CTA</strong><br><?=tagInfo($tagSawCta)?></p>
			<p><strong>Clicked CTA</strong><br><?=tagInfo($tagClickedCta)?></p>
			</td>
			<td>
	<?php
	foreach($tagsTiming as $minutes => $tagId){
		echo '<p><strong>'.$minutes.'min</strong><br>'.tagInfo($tagId).'<br></p>';
	}
	?>
	</td>
			<td>
	<?php
	foreach($tagsSegments as $seconds => $tagId){
		echo '<p><strong>'.gmdate("H:i:s", $seconds).'</strong><br>'.tagInfo($tagId).'<br></p>';
	}
	?>
	</td>
			<td>
	<?php
	foreach($tagsClicks as $selector => $tagId){
		echo '<p><strong>'.$selector.'</strong><br>'.tagInfo($tagId).'<br></p>';
	}
	?>
	</td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default hidden">
    <div class="panel-heading" role="tab" id="heading7">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
          Visual Element Timing &amp; Tagging</a></h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
      <div class="panel-body">
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Showing</th>
			<th>Hiding</th>
		</tr>
		<tr>
			<td>
			
			<table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Timing</th>
			<th>Time</th>
			<th>Action</th>
			<th>TagId</th>
		</tr>
		<?php
		foreach($visualElements as $vData){
			$timing      = $vData[0];
			$showing     = $vData[2];
			$description = $vData[3];
			
			if(isset($vData[4])){
				$tag = tagInfo($vData[4]);
			}else{
				$tag = '';
			}
			
			if($showing){
		?>
		<tr>
			<td><?=gmdate("H:i:s", $timing)?></td>
			<td><?php
			if($dateSelected){
				echo date('g:i:sa, l, M jS', secInVidToUnix($timing));
			}else{
			 echo 'No date selected';	
			}
				?></td>
			<td>Show <?=$description?></td>
			<td><?=$tag?></td>
		</tr>
		<?php
			}
		}
		?>
	</tbody>
</table>
			
			
			
			
			
			
			</td>
			<td>
			<table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Timing</th>
			<th>Action</th>
		</tr>
		<?php
		foreach($visualElements as $vData){
			$timing      = $vData[0];
			$showing     = $vData[2];
			$description = $vData[3];
			
			if(!$showing){
		?>
		<tr>
			<td><?=gmdate("H:i:s", $timing)?></td>
			<td>Hide <?=$description?></td>
		</tr>
		<?php
			}
		}
		?>
	</tbody>
</table>
			
			
			
			
			
			
			
			</td>
		</tr>
	</tbody>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading8">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
          Links</a></h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
      <div class="panel-body">
        
          <h4><strong>Webinar Pages</strong> </h4>
         
          <p>(some pages will redirect you if you don't have a selected date or the webinar has ended)</p>
           <blockquote>
          <p><strong>Registration Page</strong><br><a href="<?=$shareLink?>" target="_blank"><?=$shareLink?></a></p>
          <p><strong>Confirmation Page</strong><br><a href="<?=$shareLink?>confirmation/" target="_blank"><?=$shareLink?>confirmation/</a></p>
          <p><strong>Staging Page</strong><br><a href="<?=$shareLink?>attend/" target="_blank"><?=$shareLink?>attend/</a></p>
          <p><strong>Event Page</strong><br><a href="<?=$shareLink?>event/" target="_blank"><?=$shareLink?>event/</a></p>
          <p><strong>CTA Link</strong><br><a href="<?=$ctaLink?>" target="_blank"><?=$ctaLink?></a></p>
          </blockquote>
          <h4><strong>Extra Pages</strong></h4>
          <blockquote>
          <?php
	foreach($pagesToAddToSim as $pageInfo){
		?>
		<p><strong><?=$pageInfo[0]?></strong><br><a href="<?=$pageInfo[1]?>" target="_blank"><?=$pageInfo[1]?></a></p>
		<?php
	}
	?>
         </blockquote>
         <?php
		  if($dateSelected){
		?>
          <h4><strong>Calendar</strong></h4>
          <blockquote>
          <p><strong>Outlook</strong><br><a href="<?=$calLinkOutlook?>" target="_blank"><?=$calLinkOutlook?></a></p>
          <p><strong>iCal</strong><br><a href="<?=$calLinkICal?>" target="_blank"><?=$calLinkICal?></a></p>
          <p><strong>Google</strong><br><a href="<?=$calLinkGoogle?>" target="_blank"><?=$calLinkGoogle?></a></p>
          </blockquote>
          <?php
		  }
		  ?>
          <h4><strong>Sharing</strong></h4>
          <blockquote>
          <p><strong>Twitter</strong><br><a href="<?=$twitterShareLink?>" target="_blank"><?=$twitterShareLink?></a></p>
          <p><strong>Google Plus</strong><br><a href="<?=$googleShareLink?>" target="_blank"><?=$googleShareLink?></a></p>
          <p><strong>Facebook</strong><br><a href="<?=$facebookShareLink?>" target="_blank"><?=$facebookShareLink?></a></p>
          <p><strong>LinkedIn</strong><br><a href="<?=$linkedinShareLink?>" target="_blank"><?=$linkedinShareLink?></a></p>
          <p><strong>Email</strong><br><a href="<?=$emailShareLink?>" target="_blank"><?=$emailShareLink?></a></p>
          </blockquote>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading9">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
          Infusiosoft Links With Merge Fields</a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
      <div class="panel-body">
        
          <h4><strong>Webinar Pages</strong> </h4>
         
          <p>(some pages will redirect you if you don't have a selected date or the webinar has ended)</p>
           <blockquote>
          <p><strong>Registration Page</strong><br><a href="<?=$shareLink?>?<?=infMergeQs($passToReg);?>" target="_blank"><?=$shareLink?>?<?=infMergeQs($passToReg);?></a></p>
          <p><strong>Confirmation Page</strong><br><a href="<?=$InfMergeConfirm?>" target="_blank"><?=$InfMergeConfirm?></a></p>
          <p><strong>Staging Page</strong><br><a href="<?=$InfMergeLink?>" target="_blank"><?=$InfMergeLink?></a></p>
          <p><strong>CTA Link</strong><br><a href="<?=$ctaLink.infMergeQs($passToCta)?>" target="_blank"><?=$ctaLink.infMergeQs($passToCta)?></a></p>
          </blockquote>
          <?php
	if(count($pagesToAddToSim) > 0){
		?>
          <h4><strong>Extra Pages</strong></h4>
          <blockquote>
          <?php
	foreach($pagesToAddToSim as $pageInfo){
		?>
		<p><strong><?=$pageInfo[0]?></strong><br><a href="<?=$pageInfo[1].infMergeQs($pageInfo[2])?>" target="_blank"><?=$pageInfo[1].infMergeQs($pageInfo[2])?></a></p>
		<?php
	}
	?>
         </blockquote>
         <?php
	}
		  if($dateSelected){
		?>
          <h4><strong>Calendar</strong></h4>
          <blockquote>
          <p><strong>Outlook</strong><br><a href="<?=$mergeLinkOutlook?>" target="_blank"><?=$mergeLinkOutlook?></a></p>
          <p><strong>iCal</strong><br><a href="<?=$mergeLinkICal?>" target="_blank"><?=$mergeLinkICal?></a></p>
          <p><strong>Google</strong><br><a href="<?=$mergeLinkGoogle?>" target="_blank"><?=$mergeLinkGoogle?></a></p>
          </blockquote>
          <?php
		  }
		  ?>
          <h4><strong>Sharing</strong></h4>
          <blockquote>
          <p><strong>Twitter</strong><br><a href="<?=$twitterShareLink?>" target="_blank"><?=$twitterShareLink?></a></p>
          <p><strong>Google Plus</strong><br><a href="<?=$googleShareLink?>" target="_blank"><?=$googleShareLink?></a></p>
          <p><strong>Facebook</strong><br><a href="<?=$facebookShareLink?>" target="_blank"><?=$facebookShareLink?></a></p>
          <p><strong>LinkedIn</strong><br><a href="<?=$linkedinShareLink?>" target="_blank"><?=$linkedinShareLink?></a></p>
          <p><strong>Email</strong><br><a href="<?=$emailShareLink?>" target="_blank"><?=$emailShareLink?></a></p>
          </blockquote>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading10">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
          PHP Variables Available For Use On Pages</a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
      <div class="panel-body">
       <h3>Unix Timestamps</h3>
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Variable</th>
			<th>Output</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>$now</td>
			<td><?=$now?></td>
			<td><?=simDateExample($now)?>Current time or simulated time</td>
		</tr>
		<tr>
			<td>$unixStartTime</td>
			<td><?=needsDate($unixStartTime)?></td>
			<td><?=simDateExample($unixStartTime)?>Start time of event</td>
		</tr>
		<tr>
			<td>$unixPreRollTime</td>
			<td><?=needsDate($unixPreRollTime)?></td>
			<td><?=simDateExample($unixPreRollTime)?>Pre-roll start time</td>
		</tr>
		<tr>
			<td>$unixRegCuttoff</td>
			<td><?=needsDate($unixRegCuttoff)?></td>
			<td><?=simDateExample($unixRegCuttoff)?>Time when selected date is removed from available dates on registration page</td>
		</tr>
		<tr>
			<td>$unixConRedirect</td>
			<td><?=needsDate($unixConRedirect)?></td>
			<td><?=simDateExample($unixConRedirect)?>Time when confirmation page starts redirecting to staging page</td>
		</tr>
		<tr>
			<td>$unixCtaTime</td>
			<td><?=needsDate($unixCtaTime)?></td>
			<td><?=simDateExample($unixCtaTime)?>Main CTA time (optional if using visual elements for CTA)</td>
		</tr>
		<tr>
			<td>$unixEndEvent</td>
			<td><?=needsDate($unixEndEvent)?></td>
			<td><?=simDateExample($unixEndEvent)?>Event end time</td>
		</tr>
	</tbody>
</table>
 <h3>Timezone</h3>
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Variable</th>
			<th>Output</th>
		</tr>
		<tr>
			<td>$defaultTimeZone</td>
			<td><?=$defaultTimeZone?></td>
		</tr>
		<tr>
			<td>$timezone</td>
			<td><?=$timezone?></td>
		</tr>
		<tr>
			<td>$infTimezoneField</td>
			<td><?=$infTimezoneField?></td>
		</tr>
		<tr>
			<td>$timezoneAbr</td>
			<td><?=$timezoneAbr?></td>
		</tr>
	</tbody>
</table>
       <h3>Date/Time</h3>
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Variable</th>
			<th>Output</th>
		</tr>
		<tr>
			<td>$startTime</td>
			<td><?=needsDate($startTime)?></td>
		</tr>
		<tr>
			<td>$suffix</td>
			<td><?=needsDate($suffix)?></td>
		</tr>
		<tr>
			<td>$month</td>
			<td><?=needsDate($month)?></td>
		</tr>
		<tr>
			<td>$monthAbr</td>
			<td><?=needsDate($monthAbr)?></td>
		</tr>
		<tr>
			<td>$year</td>
			<td><?=needsDate($year)?></td>
		</tr>
		<tr>
			<td>$day</td>
			<td><?=needsDate($day)?></td>
		</tr>
		<tr>
			<td>$weekDay</td>
			<td><?=needsDate($weekDay)?></td>
		</tr>
		<tr>
			<td>$weekDayAbr</td>
			<td><?=needsDate($weekDayAbr)?></td>
		</tr>
		<tr>
			<td>$timezoneAbr</td>
			<td><?=needsDate($timezoneAbr)?></td>
		</tr>
		<tr>
			<td>$infDate</td>
			<td><?=needsDate($infDate)?></td>
		</tr>
		<tr>
			<td>$infDateTime</td>
			<td><?=needsDate($infDateTime)?></td>
		</tr>
		<tr>
			<td>$fullDate1</td>
			<td><?=needsDate($fullDate1)?></td>
		</tr>
		<tr>
			<td>$fullDate2</td>
			<td><?=needsDate($fullDate2)?></td>
		</tr>
		<tr>
			<td>$fullDate3</td>
			<td><?=needsDate($fullDate3)?></td>
		</tr>
		<tr>
			<td>$fullDate4</td>
			<td><?=needsDate($fullDate4)?></td>
		</tr>
		<tr>
			<td>$fullDate5</td>
			<td><?=needsDate($fullDate5)?></td>
		</tr>
		<tr>
			<td>$fullDate6</td>
			<td><?=needsDate($fullDate6)?></td>
		</tr>
	</tbody>
</table>
       <h3>Countdown</h3>
        <table class="table  table-bordered table-hover">
	<tbody>
		<tr>
			<th>Variable</th>
			<th>Output</th>
		</tr>
		<tr>
			<td>$secTilPreRoll</td>
			<td><?=needsDate($secTilPreRoll)?></td>
		</tr>
		<tr>
			<td>$secSincePreRoll</td>
			<td><?=needsDate($secSincePreRoll)?></td>
		</tr>
		<tr>
			<td>$secTilStart</td>
			<td><?=needsDate($secTilStart)?></td>
		</tr>
		<tr>
			<td>$secSinceStart</td>
			<td><?=needsDate($secSinceStart)?></td>
		</tr>
		<tr>
			<td>$secTilRegCuttoff</td>
			<td><?=needsDate($secTilRegCuttoff)?></td>
		</tr>
		<tr>
			<td>$secSinceRegCuttoff</td>
			<td><?=needsDate($secSinceRegCuttoff)?></td>
		</tr>
		<tr>
			<td>$secTilRedirectCon</td>
			<td><?=needsDate($secTilRedirectCon)?></td>
		</tr>
		<tr>
			<td>$secSinceRedirectCon</td>
			<td><?=needsDate($secSinceRedirectCon)?></td>
		</tr>
		<tr>
			<td>$secTilCta</td>
			<td><?=needsDate($secTilCta)?></td>
		</tr>
		<tr>
			<td>$secSinceCta</td>
			<td><?=needsDate($secSinceCta)?></td>
		</tr>
		<tr>
			<td>$secTilEndEvent</td>
			<td><?=needsDate($secTilEndEvent)?></td>
		</tr>
		<tr>
			<td>$secSinceEndEvent</td>
			<td><?=needsDate($secSinceEndEvent)?></td>
		</tr>
	</tbody>
      </table>
     
      </div>
    </div>
  </div>

					
				</div>
			</div>
		</div>
  </div>
  </div>
		<!-- End Section -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../js/moment-with-locales.min.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>