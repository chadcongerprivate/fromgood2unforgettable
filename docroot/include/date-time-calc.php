<?php

if($unixStartTime){
	// calculate run time
	$runTimeSeconds   = $videoLengthHours * 60 * 60; // convert hours to seconds
	$runTimeSeconds   = $videoLengthMin * 60 + $runTimeSeconds; // convert minutes to seconds and add hours
	$runTimeSeconds   = $videoLengthSec + $runTimeSeconds; // add seconds
	
	// get next event dates and convert to unix timestamp
	$unixPreRollTime = $unixStartTime - $eventVidStart;
	$unixRegCuttoff  = $unixStartTime + $secTilCutOffReg;
	$unixConRedirect = $unixStartTime - $secTilConRedirect;
	$unixCtaTime     = secInVidToUnix($ctaVidShow);
	$unixEndEvent    = $unixPreRollTime + $runTimeSeconds;
	$unixCalEnd      = strtotime("+ $calRunTimeMin minutes", $unixStartTime);
	
	// calculate unix timestamps for visual elements
	$visualElementsUnix = array();
	
	foreach($visualElements as $ve){
		$secInVid = $ve[0];
		$selector = $ve[1];
		$showing  = $ve[2];
		$desc     = $ve[3];
		$fullDesc = '';
		
		if($showing){
			$fullDesc .= ' Show elements with css selector '.$selector;
		}else{
			$fullDesc .= ' Hide elements with css selector '.$selector;
		}
		
		if(isset($ve[4])){
			$tagId = $ve[4];
		}else{
			$tagId = false;
		}
		
		$unixVeTime     = secInVidToUnix($secInVid);
		$visualElementsUnix[] = array($unixVeTime, $fullDesc, $tagId, $selector, $showing, $secInVid);
	}

	// calculate event seconds 
	$secTilStart         = noNegatives($unixStartTime - $now);
	$secSinceStart       = noNegatives($now - $unixStartTime);
	$secTilPreRoll       = noNegatives($unixPreRollTime - $now);
	$secSincePreRoll     = noNegatives($now - $unixPreRollTime);
	$secTilRegCuttoff    = noNegatives($unixRegCuttoff - $now);
	$secSinceRegCuttoff  = noNegatives($now - $unixRegCuttoff);
	$secTilRedirectCon   = noNegatives($unixConRedirect - $now);
	$secSinceRedirectCon = noNegatives($now - $unixConRedirect);
	$secTilCta           = noNegatives($unixCtaTime - $now);
	$secSinceCta         = noNegatives($unixCtaTime - $now);
	$secTilEndEvent      = noNegatives($unixEndEvent - $now);
	$secSinceEndEvent    = noNegatives($now - $unixEndEvent);
	
	// Save selected date
	$expire =  time()+60*60*24*90; // 90 days
	setcookie($dateCookieName, $unixStartTime, $expire, '/', '.'.$domainName);
	
	// check if ended
	if(!$ended){
		if($now > $unixEndEvent){
			$ended = true;
		}
	}

	// event date variables for use on pages
	$startTime   = date('g:ia', $unixStartTime); // Example: 9:00am
	$suffix      = date('S', $unixStartTime);    // Examples: st, nd, rd
	$month       = date('F', $unixStartTime);    // Example: January
	$monthAbr    = date('M', $unixStartTime);    // Example: Jan
	$year        = date('Y', $unixStartTime);    // Example: 2016
	$day         = date('j', $unixStartTime);    // Example: 1
	$weekDay     = date('l', $unixStartTime);    // Example: Saturday
	$weekDayAbr  = date('D', $unixStartTime);    // Example: Sat
	$timezoneAbr = date('T', $unixStartTime);    // Example: EST
	$infDate     = date('m-d-Y', $unixStartTime);     // Example: 11-15-2017
	$infDateTime = date('m-d-Y,H:i', $unixStartTime); // Example: 11-02-2017,12:15 (24 hour format)
	$fullDate1   = date('l, F jS \a\t g:ia', $unixStartTime); // Example: Sunday, January 14th @ 10:00am
	$fullDate2   = date('l, M jS \a\t g:ia', $unixStartTime); // Example: Sunday, Jan 14th @ 10:00am
	$fullDate3   = date('D, F jS \a\t g:ia', $unixStartTime); // Example: Sun, January 14th @ 10:00am
	$fullDate4   = date('g:ia, l, F jS', $unixStartTime);  // Example: 10:00am, Sunday, January 14th
	$fullDate5   = date('g:ia, l, M jS', $unixStartTime);  // Example: 10:00am, Sunday, Jan 14th
	$fullDate6   = date('g:ia, D, F jS', $unixStartTime);  // Example: 10:00am, Sun, January 14th

}else{
	// variables needed if event is over
	$secSinceStart  = 0;
	$runTimeSeconds = 0;
	$videoSecTilCta = 0;
}


// Set timezone to user timezone to display in their timezone on page
date_default_timezone_set($timezone);

if(!isset($timezoneAbr)){
	$timezoneAbr = date('T', $now);
}