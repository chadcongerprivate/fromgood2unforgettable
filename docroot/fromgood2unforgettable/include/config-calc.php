<?php

// calculate video seconds
$eventVidStart    = $eventVidStart - $preRollVidStart;


// if date is selected, add it to the webinar & cal links (this helps keep down api calls)
if($unixStartTime){
	$addToQsWebLink = '&webId='.$unixStartTime;
}else{
	$addToQsWebLink = '';
}

// do the same for the merge link in the emails
if($dateTimeType == 'text'){
	$infQs = '?contactId=~Contact.Id~&tz=~Contact.'.$tzMergeField.'~&webId=~Contact._'.$infApiDateField.'~';
}else{
	$infQs = '?contactId=~Contact.Id~&tz=~Contact.'.$tzMergeField.'~';
}

// check for replay or summary
if(isset($replay)){
	if($replay){
		$videoId     = $videoIdReplay;
		$tagAttended = $tagAttendedReplay;
		$tagsTiming  = $tagsTimingReplay;
	}
}
if(isset($summary)){
	if($summary){
		$videoId     = $videoIdSummary;
		$tagsTiming  = $tagsTimingSummary;
		$tagAttended = $tagAttendedSummary;
		
		// summary has new cta time and video length
		$ctaVidShow       = $ctaVidShowSummary;
		$videoLengthHours = $summaryLengthHours;
		$videoLengthMin   = $summaryLengthMin;
		$videoLengthSec   = $summaryLengthSec;
	}
}

// generate calendar links
$calLinkGoogle  = $shareLink.'add-to-calendar/?contactId='.$contactId.'&tz='.urlencode($timezone).'&cal=google'.$addToQsWebLink;
$calLinkOutlook = $shareLink.'add-to-calendar/?contactId='.$contactId.'&tz='.urlencode($timezone).'&cal=outlook'.$addToQsWebLink;
$calLinkICal    = $shareLink.'add-to-calendar/?contactId='.$contactId.'&tz='.urlencode($timezone).'&cal=ical'.$addToQsWebLink;
$mergeLinkGoogle  = $shareLink.'add-to-calendar/'.$infQs.'&cal=google';
$mergeLinkOutlook = $shareLink.'add-to-calendar/'.$infQs.'&cal=outlook';
$mergeLinkICal    = $shareLink.'add-to-calendar/'.$infQs.'&cal=ical';

// create links
$ctaLink           = $ctaLink;
$shareLink         = $domainPrefix.$domainName.$path;
$tzMergeField      = str_replace('inf_custom', $infTimezoneField );
$webinarLink       = $domainPrefix.$domainName.$path.'attend/?contactId='.$contactId.'&tz='.urlencode($timezone).$addToQsWebLink;
$InfMergeLink      = $domainPrefix.$domainName.$path.'attend/'.$infQs;
$InfMergeConfirm   = $domainPrefix.$domainName.$path.'confirmation/'.$infQs;

if($dateTimeType == 'text'){
	$infMergKey['webId'] = '~Contact._'.$infApiDateField.'~';
}


// create sharing information
$twitterShareLink  = 'https://twitter.com/home?status='.urlencode($shareLink);
$googleShareLink   = 'https://plus.google.com/share?url='.urlencode($shareLink);
$facebookShareLink = 'https://www.facebook.com/sharer.php?u='.urlencode($shareLink);
$linkedinShareLink = 'https://www.linkedin.com/shareArticle?mini=true&url='.urlencode($shareLink).'&title='.urlencode($shareTitle).'&summary='.urlencode($shareDescription);
$subject           = $shareTitle;
$body              = htmlentities($shareDescription.' Register here: '.$shareLink);
$emailShareLink    = 'mailto:?subject='.$subject.'&body='.$body;



