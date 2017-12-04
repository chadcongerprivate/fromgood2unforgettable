<?php

$includePath = '/include/';
$path  = '/';
// functions
include($includePath.'functions.php');

// config
include($includePath.'config.php');

// visitor information
include($includePath.'visitor-info.php');

// time simulation
include($includePath.'simulator.php');

// check for selected date
include($includePath.'selected-date.php');

// include config calculations
include($includePath.'config-calc.php');

// get available dates
$availableDates = getAvailableDates();

// calculate dates & times
include($includePath.'date-time-calc.php');
?>
