<?php

// infusionsoft API infromation
$infApp 		   = 'wqy87770';
$infKey 		   = '80bd3b75d451b3d84e95921ab625137a';

// Infusionsoft merge field information (possible: contactId, timezone, first, last, email, phone)
$passToReg         = array('first', 'last', 'email');
$passToCta         = array('first', 'last', 'email');

// video information
$videoType         = 'vimeo'; // youTube, vimeo or html5
$videoLinksHTML    = array( // paths to videos for html embed
						//array('https://d2s041pl4mm20g.cloudfront.net/WebbyNoCarlCompressed.mp4', 'video/mp4') // path, type https://www.pathToVideo.com/video.mp4
					); 
$videoId             = '276103536';//'220867396'; // youTube or vimeo video id, leave blank if using html5
$videoIdReplay       = '276103536'; //'244923795';
$videoIdSummary      = '209415407';
$preRollVidStart     = 0; // seconds in video where pre-roll should start (IF THERE IS NO PRE-ROLL THIS SHOULD MATCH $eventVidStart below)
$eventVidStart       = 0; // seconds in video where event starts (where it should be at the start time)
$ctaVidShow          = 20 * 60; // seconds in video where main CTA should show (set false if you aren't using a main cta)
$ctaVidShowSummary   = 0; // seconds in video where main CTA should show (set false if you aren't using a main cta)
$videoLengthHours    = 1;
$videoLengthMin      = 47;
$videoLengthSec      = 36; // if this is over even by 1 decimal point, the event will not end
$calRunTimeMin       = 90; // number of minutes to use as end time for calender
$summaryLengthHours  = 0;
$summaryLengthMin    = 56;
$summaryLengthSec    = 31; // if this is over even by 1 decimal point, the event will not end

// path information (YOU MUST ALSO SET SOME PATH INFORMATION AT THE TOP OF THE webinar-include.php file)
$domainName        = 'motivatingthemasses.com';
$domainPrefix      = 'https://webinars.';
$ctaLink           = 'http://abundancenowonline.com/abundance-now-online-course/';//$domainPrefix.$domainName.$path.'order/';
$dateCookieName    = 'sfuipDate';

// timezone information
$defaultTimeZone   = 'America/Los_Angeles'; // find supported timezones here: http://php.net/manual/en/timezones.php
$infTimeZone       = 'America/New_York'; // timezone infusionsoft uses
$infTimezoneField  = 'inf_custom_Timezone0'; // this is the name of the field as it appears in your registration webform
$playInUserTZ      = array(); // array of timezones to play in their own timezones at the same time as the default timezone

// selected date/time information
$liveDate          = false; // If this is a live webinar that will turn evergreen set text date here (Example: 'January 28 2018 10:00am' )
$secTilCutOffReg   = 60; // When to stop showing a registration date (example: -60 would be 1 minute BEFORE it starts. 60 would be 1 minute AFTER it starts)
$secTilConRedirect = 60 * 30; // Seconds before start time to start redirecting confirmation page directly to staging
$dateTimeType      = 'text'; // dateTime (infusionsoft dateTime field), text (RECOMENDED - Infuisonsoft text field stored in unix format), date (Infuisonsoft date field)
$infApiDateField   = 'ALPUnixDate'; // this is where you are storing the date in Infusionsoft
$timeTags          = array( // this is required only if using date above (this is not as reliable)
			         //array(124, '10:00am'), // tagid, time (time intervals do not work with this because registration time is unkown)
			         //array(242, '4:00am'),
);

// event information
$webinarName       = 'Opening to Abundance';
$autoChat          = true;
$shareTitle        = 'Opening to Abundance';
$shareImage        = $domainPrefix.$domainName.$path.'images/share.jpg';
$shareDescription  = 'How to cultivate an abundant mindset by adopting the traits of abundant thinkers';
$pagesToAddToSim   = array(
					// array('Nurture 1', 'https://www.example.com/nurtur1/', array('contactId')), // name, link, array of qs paramaters to merge into email
);

// event date informaion (The following time intervals may be used: 15min, 30min, hour)
if(!isset($dateOverride)){
$earliestDate      = false; // false (no earliest date), Use text to describe (Examples 'tomorrow 12:00am', '+3 days 12:00am')
$maxDates          = 3;
$excludeDates      = array('12-25'); // format MM-DD (Christmas Example: 12-25)
$earliestTime      = '11:00am'; // earliest time to play intervals (15min, 30min, hour)
$lastestTime       = '10:00pm'; // latest time to play intervals (15min, 30min, hour)
$playDates         = array(
					 array(), // leave blank
					 array('6:00pm'), // Monday
					 array('6:00pm'), // Tuesday
					 array('6:00pm'), // Wednesday
					 array('6:00pm'), // Thursday
					 array('3:00pm'), // Friday
					 array('9:00am'), // Saturday
					 array('9:00am') // Sunday
);
}
// showing/hiding elements on event page (seconds in video, css selector, showing, description of event for testing simulator), tagId if showed/showing
// IMPORTANT: CTA MUST BE CALLED CTA IN THE DESCRIPTION FOR THE SAW CTA TAG TO BE APPLIED
$visualElements    = array(
					// array(500, '.post-cta', true, 'CTA', 123),
					// array(14569, '.pre-cta', false, 'Customer Support', '') // use empty string if no tag
);

/* event tags (use the line below to create in Infusionsoft)
Registered,SMS Reminders,Attended,Saw CTA,Clicked CTA
*/
$groupCategoryId    = 177;
$tagRegistered      = 5269;
$tagSMSReminder     = 5279;
$tagAttended        = 5281;
$tagAttendedReplay  = 5309;
$tagAttendedSummary = 5311;
$tagSawCta          = 5285;
$tagClickedCta      = 5287;

/* timing tags (use the line below to create in Infusionsoft - delete any that you don't want first)
Stayed 10min,Stayed 15min,Stayed 20min,Stayed 30min,Stayed 40min,Stayed 45min,Stayed 50min,Stayed 60min,Stayed 70min,Stayed 80min,Stayed 90min,Stayed 120min,Stayed 180min,Stayed 240min,Stayed 300min,Stayed 360min,Stayed 420min,Stayed 480min


Stayed 10min,Stayed 20min,Stayed 30min,Stayed 40min,Stayed 50min,Stayed 60min,Stayed 70min,Stayed 80min,Stayed 90min,Stayed 100min,Stayed 120min,Stayed 180min,Stayed 240min,Stayed 300min,Stayed 360min,Stayed 420min,Stayed 480min
*/
$tagsTiming        = array( // minutes stayed => tagId
						10   => 5339,
						20   => 5341,
						30   => 5343,
						40   => 5345,
						50   => 5347,
						60   => 5349,
						70   => 5351,
						80   => 5353,
						90   => 5355,
						100  => 5357,
						110  => 5447,
						120  => 5359,
						130  => 5361,
						150  => 5363,
						170  => 5365,
						190  => 5367,
						210  => 5369,
						230  => 5371,
						250  => 5373,
						);
$tagsTimingReplay  = array( // minutes stayed => tagId
						10   => 5375,
						20   => 5377,
						30   => 5379,
						40   => 5381,
						50   => 5383,
						60   => 5385,
						70   => 5387,
						80   => 5389,
						90   => 5391,
						100  => 5393,
						110  => 5449,
						120  => 5395,
						130  => 5397,
						150  => 5399,
						170  => 5401,
						190  => 5403,
						210  => 5405,
						230  => 5407,
						250  => 5409,
						);
$tagsTimingSummary = array( // minutes stayed => tagId
						10   => 5411,
						20   => 5413,
						30   => 5415,
						40   => 5417,
						50   => 5419,
						60   => 5421,
						70   => 5423,
						80   => 5425,
						90   => 5427,
						100  => 5429,
						110  => 5451,
						120  => 5431,
						130  => 5433,
						150  => 5435,
						170  => 5437,
						190  => 5439,
						210  => 5441,
						230  => 5443,
						250  => 5445,
						);
// segment tags (tag based on which sements they saw the begining of)
$tagsSegments     = array( // seconds in video => tagId
						//15  => 5
						);

// click tags (tag based on elements that where clicked - make sure they open in a new window)
$tagsClicks     = array( // cssSelector => tagId
						//'.cta'  => 5, 
						//'.cta-mobile'  => 6
						);
