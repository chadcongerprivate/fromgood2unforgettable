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
$videoId           = '215547436'; // youTube or vimeo video id, leave blank if using html5
$preRollVidStart   = 0; // seconds in video where pre-roll should start (IF THERE IS NO PRE-ROLL THIS SHOULD MATCH $eventVidStart below)
$eventVidStart     = 0; // seconds in video where event starts (where it should be at the start time)
$ctaVidShow        = 60 * 60; // seconds in video where main CTA should show (set false if you aren't using a main cta)
$videoLengthHours  = 1;
$videoLengthMin    = 45;
$videoLengthSec    = 25; // if this is over even by 1 decimal point, the event will not end
$calRunTimeMin     = 90; // number of minutes to use as end time for calender

// path information (YOU MUST ALSO SET SOME PATH INFORMATION AT THE TOP OF THE webinar-include.php file)
$domainName        = 'motivatingthemasses.com';
$domainPrefix      = 'https://webinars.';
$ctaLink           = $domainPrefix.$domainName.$path.'order/';
$dateCookieName    = 'sfuipDate';

// timezone information
$defaultTimeZone   = 'America/Los_Angeles'; // find supported timezones here: http://php.net/manual/en/timezones.php
$infTimezoneField  = 'inf_custom_Timezone0'; // this is the name of the field as it appears in your registration webform
$playInUserTZ      = array(); // array of timezones to play in their own timezones at the same time as the default timezone

// selected date/time information
$liveDate          = false; // If this is a live webinar that will turn evergreen set text date here (Example: 'January 28 2018 10:00am' )
$secTilCutOffReg   = 60; // When to stop showing a registration date (example: -60 would be 1 minute BEFORE it starts. 60 would be 1 minute AFTER it starts)
$secTilConRedirect = 60 * 30; // Seconds before start time to start redirecting confirmation page directly to staging
$dateTimeType      = 'text'; // dateTime (infusionsoft dateTime field), text (RECOMENDED - Infuisonsoft text field stored in unix format), date (Infuisonsoft date field)
$infApiDateField   = 'SFUIPUnixDate'; // this is where you are storing the date in Infusionsoft
$timeTags          = array( // this is required only if using date above (this is not as reliable)
			         //array(124, '10:00am'), // tagid, time (time intervals do not work with this because registration time is unkown)
			         //array(242, '4:00am'),
);

// event information
$webinarName       = 'Speak For Ultimate Impact & Profit';
$autoChat          = true;
$shareTitle        = 'Speak For Ultimate Impact & Profit';
$shareImage        = $domainPrefix.$domainName.$path.'images/share.jpg';
$shareDescription  = 'How to Create Impact and Profit as a Professional Speaker With Lisa Nichols';
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
$groupCategoryId   = 169;
$tagRegistered     = 4907;
$tagSMSReminder    = 4909;
$tagAttended       = 4911;
$tagSawCta         = 4913;
$tagClickedCta     = 4915;

/* timing tags (use the line below to create in Infusionsoft - delete any that you don't want first)
Stayed 10min,Stayed 15min,Stayed 20min,Stayed 30min,Stayed 40min,Stayed 45min,Stayed 50min,Stayed 60min,Stayed 70min,Stayed 80min,Stayed 90min,Stayed 120min,Stayed 180min,Stayed 240min,Stayed 300min,Stayed 360min,Stayed 420min,Stayed 480min


Stayed 10min,Stayed 20min,Stayed 30min,Stayed 40min,Stayed 50min,Stayed 60min,Stayed 70min,Stayed 80min,Stayed 90min,Stayed 100min,Stayed 120min,Stayed 180min,Stayed 240min,Stayed 300min,Stayed 360min,Stayed 420min,Stayed 480min
*/
$tagsTiming        = array( // minutes stayed => tagId
						10   => 4917,
						20   => 4919,
						30   => 4921,
						40   => 4923,
						50   => 4925,
						60   => 4927,
						70   => 4929,
						80   => 4931,
						90   => 4933,
						100  => 4935,
						110  => 4937,
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
