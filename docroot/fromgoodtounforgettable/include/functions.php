<?php

// function to convert any negative numbers to 0
function noNegatives($number){
	if($number < 0){
		return 0;
	}else{
		return $number;
	}
}

function next15(){
	global $now;
	// determine how long until next 15min interval
	$currentMin = date('i', $now);
	$currentSec = date('s', $now);
	$secToAdd   = 0;
	if($currentMin > 0 && $currentMin < 15){
		$secToAdd = (15 - $currentMin) * 60;
	}else if($currentMin > 15 && $currentMin < 30){
		$secToAdd = (30 - $currentMin) * 60;
	}else if($currentMin > 30 && $currentMin < 45){
		$secToAdd = (45 - $currentMin) * 60;
	}else if($currentMin > 45 && $currentMin < 60){
		$secToAdd = (60 - $currentMin) * 60;
	}
	// subtract the seconds we didn't account for
	$secToAdd = $secToAdd - $currentSec;
	
	return $now + $secToAdd;
}

function next30(){
	global $now;
	// determine how long until next 15min interval
	$currentMin = date('i', $now);
	$currentSec = date('s', $now);
	$secToAdd   = 0;
	if($currentMin > 0 && $currentMin < 30){
		$secToAdd = (30 - $currentMin) * 60;
	}else if($currentMin > 30 && $currentMin < 60){
		$secToAdd = (60 - $currentMin) * 60;
	}
	// subtract the seconds we didn't account for
	$secToAdd = $secToAdd - $currentSec;
	
	return $now + $secToAdd;
}

function nextHour(){
	global $now;
	// determine how long until next 15min interval
	$currentMin = date('i', $now);
	$currentSec = date('s', $now);
	$secToAdd   = 0;
	
	if($currentMin > 0 && $currentMin < 60){
		$secToAdd = (60 - $currentMin) * 60;
	}
	// subtract the seconds we didn't account for
	$secToAdd = $secToAdd - $currentSec;
	
	return $now + $secToAdd;
}


function getAvailableDates(){
	global $now;
	global $maxDates;
	global $playDates;
	global $secTilCutOffReg;
	global $earliestTime;
	global $lastestTime;
	global $excludeDates;
	global $earliestDate;
	global $intervalOnlyToday;
	
	if($earliestDate){
		$compareDate = strtotime('Today '.$earliestDate, $now);
	}else{
		$compareDate = $now;
	}
	
	$earliestUnix = strtotime('Today '.$earliestTime, $compareDate);
	$lastestUnix  = strtotime('Today '.$lastestTime, $compareDate);
	$cuttoff      = $now + $secTilCutOffReg;
	$dayOfWeek    = date('N', $now);
	
	$daysOfWeek = array(
		1 => 'Monday',
		2 => 'Tuesday',
		3 => 'Wednesday',
		4 => 'Thursday',
		5 => 'Friday',
		6 => 'Saturday',
		7 => 'Sunday',
	);
	
	$day = date('N', $compareDate); // start with today
	$loops = 1;
	
	$availableDate = array();
	
	while($loops < 8){
		$timesToAdd = $playDates[$day];
		$today      = false;
		
		if($loops == 1){
			$textDay = 'Today';
			if(!$earliestDate){
				$today   = true;
			}
		}else{
			$textDay = 'Next '.$daysOfWeek[$day];
		}
		
		foreach($playDates[$day] as $time){
			switch($time){
				case '15min':
					$unixDate = next15();
					if($today AND $unixDate >= $earliestUnix AND $unixDate <= $lastestUnix){
						$availableDates[] =$unixDate;
					}
				break;
				case '30min':
					$unixDate = next30();
					
					if($today AND $unixDate >= $earliestUnix AND $unixDate <= $lastestUnix){
						$availableDates[] =$unixDate;
					}
				break;
				case 'hour':
					$unixDate = nextHour();
					
					if($today AND $unixDate >= $earliestUnix AND $unixDate <= $lastestUnix){
						$availableDates[] =$unixDate;
					}
				break;
				default:
					$unixDate      = strtotime($textDay.' '.$time, $compareDate);
					
					if($unixDate > $cuttoff){
						// date won't get added if only using intervals today and day is today
						if($intervalOnlyToday AND $dayOfWeek != $day){
							$availableDates[] = $unixDate;
						}
					}
				break;
			}
		}
		
		
		if($day < 7){
			$day++;
		}else{
			$day = 1;
		}
		
		$loops++;
	}
	
	// remove dups
	$availableDates = array_unique($availableDates);
	
	$count = 1;
	foreach($availableDates as $key => $unixDate){
		$excludeFormat = date('m-d', $unixDate);
		
		if(in_array($excludeFormat, $excludeDates)){
			unset($availableDates[$key]);
			// subtract 1 from $count so this one doesn't count
			$count--;
		}
		
		if($count > $maxDates){
			unset($availableDates[$key]);
		}
		$count++;
	}
	
	return $availableDates;
}

function simTZSelect(){
	// timezone select
	$common  = array('America/Los_Angeles','America/Denver','America/Chicago','America/New_York','Europe/London','Australia/Sydney','Pacific/Auckland');
	$regions = array(
		'Africa' => DateTimeZone::AFRICA,
		'America' => DateTimeZone::AMERICA,
		'Antarctica' => DateTimeZone::ANTARCTICA,
		'Aisa' => DateTimeZone::ASIA,
		'Atlantic' => DateTimeZone::ATLANTIC,
		'Europe' => DateTimeZone::EUROPE,
		'Indian' => DateTimeZone::INDIAN,
		'Pacific' => DateTimeZone::PACIFIC
	);
	$timezones = array();
	foreach ($regions as $name => $mask)
	{
		$zones = DateTimeZone::listIdentifiers($mask);
		foreach($zones as $timezone)
		{
			// Remove region name and add a sample time
			$timezones[$name][$timezone] = substr($timezone, strlen($name) + 1);
		}
	}
	// View
	print '<select class="form-control" name="tz">';
	print '<option value="" selected>Select different timezone...</option>' . "\n";
	
	print '<optgroup label="Most Common">' . "\n";
		
	foreach($common as $timezone){
		print '<option value="' . $timezone . '">' . $timezone . '</option>' . "\n";
	}
	print '<optgroup>' . "\n";
	
	foreach($timezones as $region => $list)
	{
		
		print '<optgroup label="' . $region . '">' . "\n";
		foreach($list as $timezone => $name)
		{
			print '<option value="' . $timezone . '">' . $timezone . '</option>' . "\n";
		}
		print '<optgroup>' . "\n";
	}
	print '</select>';
}

function infMergeQs($array){
	$params = array();
	$infMergKey = array(
				  'contactId' => '~Contact.Id~',
				  'timezone'  => '~Contact.'.$tzMergeField.'~',
				  'first'     => '~Contact.FirstName~',
				  'last'      => '~Contact.LastName~',
				  'email'     => '~Contact.Email~',
				  'phone'     => '~Contact.Phone1~'
	);
	
	foreach($array as $key){
		$params[] = $key.'='.$infMergKey[$key];
	}
	
	return implode('&', $params);
}

function needsDate($x){
	if(isset($x) AND $x){
		return $x;
	}else{
		if($x === 0){
			return '0';
		}else{
			return 'Needs selected date';
		}
	}
}

function simDateExample($x){
	if(!isset($x) || !$x){
		return '';
	}else{
		return '<strong>'.date('g:ia, l, M jS', $x).'</strong> - ';
	}
}

function avoidDup($date){
	global $schedule;
	
	if(array_key_exists($date, $schedule)){
		return $date + 1;
	}else{
		return $date;
	}
}

function tagInfo($tagId){
	global $tags;
	global $tagCatName;
	
	$tagArray = array();
	
	if(!isset($tags) || count($tags) < 1){
		return 'No tags found in group';
	}else{
		foreach($tags as $tag){
			$tagArray[$tag['Id']] = $tag['GroupName'];
		}
	}
	
	if(array_key_exists($tagId, $tagArray)){
		return '('.$tagId.') '.$tagCatName.' -> '.$tagArray[$tagId];
	}
}

function secInVidToUnix($seconds){
	global $unixPreRollTime;
	global $unixPreRollTime;
	return ($seconds - $preRollVidStart) + $unixPreRollTime;
}


function secTilUnix($unixTimeStamp){
	global $now;
	return noNegatives($unixTimeStamp -$now);
}

function secSinceUnix($unixTimeStamp){
	global $now;
	return noNegatives($now - $unixTimeStamp);
}

function getPageState($unix){
	global $unixRegCuttoff;
	global $unixConRedirect;
	global $unixStartTime;
	global $unixEndEvent;
	global $unixPreRollTime;
	
	$pageStates =  array();

	$pageStates['registration'] = array(
		0 => 'No action',
		$unixRegCuttoff => 'Selected date is removed'
	);

	$pageStates['confirmation'] = array(
		0                => 'No action',
		$unixConRedirect => 'Redirects to staging',
		$unixStartTime   => 'Redirects to event',
	);

	$pageStates['staging'] = array(
		0                => 'No action',
		$unixPreRollTime => 'Redirects to event'
	);

	$pageStates['event'] = array(
		0                => 'Redirects to staging',
		$unixStartTime   => 'Plays event',
		$unixEndEvent    => 'Event ended'
	);

	if($ctaVidShow){
		$pageStates['confirmation'][$unixCtaTime] = 'Shows CTA';
	}
	
	
	$currentPageStates = array();
	$currentPageUnix   = array();
	
	foreach($pageStates as $page => $pageState){
		
		foreach($pageState as $time => $state){
			// set inital state
			if(!isset($currentPageStates[$page])){
				$currentPageStates[$page] = $state;
				$currentPageUnix[$page]  = $time;
			}
			
			// overwrite current state if needed
			if($time <= $unix AND $time > $currentPageUnix[$page]){
				$currentPageStates[$page] = $state;
			}
		}
	}
	
	return $currentPageStates;
	
}

function addToSchedule($unix, $desc){
	global $schedule;
	
	// 5 seconds beforme
	if(array_key_exists($unix - 5, $schedule)){
		// only description needs updated
		$schedule[$unix - 5]['description'] = $schedule[$unix]['description'].'<li>'.$desc.'</li>';
	}else{
		$pageStates = getPageState($unix - 5);
		$schedule[$unix - 5] = array(
							'description' => '<li>5 seconds until '.$desc.'</li>',
							'actions'     => array(
												'Registration'        => $pageStates['registration'],
												'Confirmation'        => $pageStates['confirmation'],
												'Staging'             => $pageStates['staging'],
												'Event'               => $pageStates['event']
												)
		);
	}
	
	//actual time
	if(array_key_exists($unix, $schedule)){
		// only description needs updated
		$schedule[$unix]['description']     = $schedule[$unix]['description'].'<li>'.$desc.'</li>';
	}else{
		$pageStates = getPageState($unix);
		
		$schedule[$unix] = array(
							'description' => '<li>'.$desc.'</li>',
							'actions'     => array(
												'Registration'        => $pageStates['registration'],
												'Confirmation'        => $pageStates['confirmation'],
												'Staging'             => $pageStates['staging'],
												'Event'               => $pageStates['event']
												)
		);
	}
}

function visualElement($selector, $showing, $tagId, $seconds){
	global $contactId;
	
	if($showing){
		echo 'showElement(0, '.$seconds.', "'.$selector.'");';

		if($tagId AND $contactId != ''){
			echo 'infTag('.$tagId.','.$contactId.');';
		}
	}else{
		echo 'hideElement(0, '.$seconds.', "'.$selector.'");';
	}
	
	
}

// this function applies current actions, it does not schedule future actions because they are based on the video time
function videoBasedActions(){
	global $tagAttended;
	global $contactId;
	global $now;
	global $unixCtaTime;
	global $tagSawCta;
	global $visualElementsUnix;
	global $tagsSegments;
	
	$future  = array();
	
	echo '<script>$(function() {';
		
	// attended
	echo 'infTag('.$tagAttended.','.$contactId.');';
	
	// main CTA
	if($now >= $unixCtaTime){
		echo "showElement(0, 0, '.cta');";
		echo 'infTag('.$tagSawCta.','.$contactId.');';
	}
	
	// visual  array($unixVeTime, $fullDesc, $tagId, $selector, $showing, $secInVid);
	foreach($visualElementsUnix as $ve){
		$unix     = $ve[0];
		$tagId    = $ve[2];
		$selector = $ve[3];
		$showing  = $ve[4];
		$secInVid = $ve[5];
		$current = array();

		if($now <= $unix){
			// if in the past, keep overwriting until getting the latest visual state
			$current[$selector] = array($showing, $tagId);
		}else{
			if($showing){
				$type = 'show';
			}else{
				$type = 'hide';
			}
			$future[] = array(
				'type'     => $type,
				'selector' => $selector,
				'sec'      => $secInVid,
				'tagId'    => $tagId
			);
		}
	}

	// set current states
	foreach($current as $selector => $info){
		$showing  = $info[0];
		$tagId    = $info[1];
		visualElement($selector, $showing, $tagId, 0);
	}
	
	//var_dump($tagsSegments); exit();
	// set future tag sements
	foreach($tagsSegments as $secInVid => $tagId){
		
		$future[] = array(
				'type'     => 'tag',
				'selector' => '',
				'sec'      => $secInVid,
				'tagId'    => $tagId
			);
	}
	
	// output actions object
	
	echo '
	
	
	
	
	
	
	actions = {';
	$output = array();
	foreach($future as $action){
		$type      = $action['type'];
		$selector  = $action['selector'];
		$sec       = $action['sec'];
		$tagId     = $action['tagId'];
		$setAction = true;
		$aName     = 'action'.$sec ;
		
		// check for dups
		if(in_array($aName, $output)){
			$aName = 'action'.$sec.'b';
			
			if(in_array($aName, $output)){
				$aName = 'action'.$sec.'c';
				
				if(in_array($aName, $output)){
					$aName = 'action'.$sec.'d';
					
					if(in_array($aName, $output)){
						$setAction = false;
					}
				}
			}
		}
		
		if($setAction){
			// add to output
			$output[] = $aName;
			echo $aName.': { type: "'.$type.'", selector: "'.$selector.'", tag: "'.$tagId.'"  },';
		}
	}
	echo '}
	
	
	
	
	
	';

	echo '});</script>';
}

function timedTagActions(){
	global $contactId;
	global $summary;
	global $tagsTiming;
	global $secTilEndEvent;
	
	if($contactId != '' AND $secTilEndEvent != 0){
		echo '<script>$(function() {';

		foreach($tagsTiming as $minutes => $tagId){
			echo 'timedTag('.$minutes.', 0, '.$tagId.', '.$contactId.');';
		}
		echo '});</script>';
	}
}

function clickTagActions(){
	global $contactId;
	global $tagsClicks;
	global $secTilEndEvent;
	global $tagClickedCta;
	
	// add main cta
	$tagsClicks['.cta'] = $tagClickedCta;
	
	
	if($contactId != '' AND $secTilEndEvent != 0){
		echo '<script>$(function() {';

		foreach($tagsClicks as $selector => $tagId){
			
			echo '$("'.$selector.'").click(function(){';
			echo 'infTag('.$tagId.','.$contactId.');';
			echo '});';
		}
		echo '});</script>';
	}
}

function generateVideoSrc(){
	global $videoLinksHTML;
	
	$sources = '';
	
	foreach($videoLinksHTML as $file){
		$src  = $file[0]; 
		$type = $file[1]; 
		$sources .= '<source src="'.$src.'" type="'.$type.'">';
	}
	
	return $sources;
}

function isValidTimezone($timezone) {
  return in_array($timezone, timezone_identifiers_list());
}

function addToCalBtn(){
	global $unixStartTime;
	global $unixCalEnd;
	global $webinarName;
	global $shareDescription;
	global $webinarLink;
	global $timezone;
	echo '<div title="Add to Calendar" class="addeventatc">
    Add to Calendar
    <span class="start">'.date('m/d/Y h:i A', $unixStartTime).'</span>
    <span class="end">'.date('m/d/Y h:i A', $unixCalEnd).'</span>
    <span class="timezone">'.$timezone.'</span>
    <span class="title">'.$webinarName.'</span>
    <span class="description">'.$shareDescription.'</span>
    <span class="location">'.$webinarLink.'</span>
</div>';
}