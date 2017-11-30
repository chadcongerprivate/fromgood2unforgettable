<?php

include('../include/webinar-inclued.php');

$calStartDate = gmdate('Ymd\\THi00\\Z', $unixStartTime);
$calEndDate   = gmdate('Ymd\\THi00\\Z', $unixCalEnd);

if(!empty($_GET['cal'])){
	$cal = $_GET['cal'];
}


switch($cal){
	case 'google':
		$googleLink = 'https://www.google.com/calendar/render?action=TEMPLATE&text='.urlencode($shareTitle).'&details='.urlencode($shareDesc).'&location='.str_replace('&', '%26', $webinarLink).'&dates='.$calStartDate.'/'.$calEndDate.'&sprop=website:&sf=true&output=xml';
	
		header("Location: $googleLink");
		exit();
	break;
	default:
		header("Content-Type: text/Calendar");
		header("Content-Disposition: inline; filename=calendar.ics");
		
		$calen = "BEGIN:VCALENDAR";
		$calen .= "\nPRODID:-//Microsoft Corporation//Outlook 14.0 MIMEDIR//EN";
		$calen .= "\nVERSION:2.0";
		$calen .= "\nMETHOD:PUBLISH";
		$calen .= "\nX-MS-OLK-FORCEINSPECTOROPEN:TRUE";
		$calen .= "\nBEGIN:VTIMEZONE";
		$calen .= "\nTZID:PST8PDT";
		$calen .= "\nTZNAME: PST";
		$calen .= "\nBEGIN:STANDARD";
		$calen .= "\nDTSTART:" .$calStartDate;
		$calen .= "\nTZOFFSETFROM:-0800";
		$calen .= "\nTZOFFSETTO:-0700";
		$calen .= "\nEND:STANDARD";
		$calen .= "\nEND:VTIMEZONE";
		$calen .= "\nBEGIN:VEVENT";
		$calen .= "\nCLASS:PUBLIC";
		$calen .= "\nCREATED:".$calStartDate;
		$calen .= "\nDESCRIPTION;ENCODING=QUOTED-PRINTABLE: ".$shareDesc;
		$calen .= "\nDTEND;TZID=\"PST8PDT\":".$calEndDate;
		$calen .= "\nDTSTAMP:20141021T022510Z";
		$calen .= "\nDTSTART;TZID=\"PST8PDT\":".$calStartDate;
		$calen .= "\nLOCATION:" .$webinarLink;
		$calen .= "\nPRIORITY:5";
		$calen .= "\nSEQUENCE:0";
		$calen .= "\nSUMMARY:".$shareTitle."";
		$calen .= "\nTRANSP:OPAQUE";
		$calen .= "\nUID:040000008200E00074C5B7101A82E0080000000000D87B17BDECCF01000000000000000010000000D72DCCEE22E22D4A975DA940D9BB3A32";
		$calen .= "\nX-MICROSOFT-CDO-BUSYSTATUS:BUSY";
		$calen .= "\nX-MICROSOFT-CDO-IMPORTANCE:1";
		$calen .= "\nX-MICROSOFT-DISALLOW-COUNTER:FALSE";
		$calen .= "\nX-MS-OLK-AUTOFILLLOCATION:FALSE";
		$calen .= "\nX-MS-OLK-CONFTYPE:0";
		$calen .= "\nBEGIN:VALARM";
		$calen .= "\nTRIGGER:-PT15M";
		$calen .= "\nACTION:DISPLAY";
		$calen .= "\nDESCRIPTION:Reminder";
		$calen .= "\nEND:VALARM";
		$calen .= "\nEND:VEVENT";
		$calen .= "\nEND:VCALENDAR";
		
		echo $calen;
	break;
}