<?php
include( '../include/webinar-include.php' );

// redirect to registration if no date is selected
if(!$dateSelected){
	header('Location: ../');
	exit();
}

// redirect to staging if event hasn't started
if($now < $unixStartTime){
	header('Location: ../attend/?'.$_SERVER['QUERY_STRING']);
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
	<title><?=$webinarName?></title>

	<!-- Start Page Description Meta Tags -->
	<meta name="description" content="<?=$shareDescription?>">
	<meta property="og:title" content="<?=$shareTitle?>">
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?=$shareLink?>">
	<meta property="og:image" content="<?=$shareImage?>">
	<meta property="og:description" content="<?=$shareDescription?>">
	<meta property="og:site_name" content="<?=$webinarName?>">
	<!-- End Page Description Meta Tags -->

	<meta name="theme-color" content="#81b15f">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/event.css" rel="stylesheet">
	<link href="../css/auto-chat.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="left-col">
		<header><?=$webinarName?> <img src="../images/presenter.jpg">
		</header>
		<div id="video-container">
			<div id="event-stream">
			</div>
		</div>
	</div>
	<div class="right-col">
		<div id="chat-header" class="hidden-xs hidden-sm">
			<img src="../images/logo.png" class="img-responsive img-responsive-center">
		</div>
		<div class="post-cta hidden cta-mobile hidden-lg hidden-md">
			<a href="<?=$ctaLink?>" target="_blank" class="btn btn-block btn-cta cta">Yes, I Want This!</a>
		</div>
		<?php
	if(!$autoChat){
		?>
		<div id="chat-disabled"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Chat is currently disabled</div>
		<?php
	}
		?>
		<div id="chat-box">
			<div id="main-chat-container"></div>
		</div>
		<div id="cta-box" class="post-cta hidden hidden-sm hidden-xs">
				<div class="cta-tab">Learn More</div>
				<div class="cta-toggle"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
				<div class="cta-content">
					<h2>Click Here To Save $1,000!</h2>
					<img class="img-responsive img-responsive-center" src="../images/presenter.jpg">
					<p>This $1,000 Discount is Extremely Limited</p>
				</div>
				<a href="<?=$ctaLink?>" target="_blank" class="btn btn-block btn-cta">Add to Cart</a>
			</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Start Video Resizing -->
<script>
$(function () {
	containVideo();

	$( window ).resize( function () {
		containVideo();
	} );

});
</script>
<!-- End Video Resizing -->

<?php
if($autoChat){
?>
<!-- Start Auto Chat Functions -->
<?php
$chatSeconds = $now - $unixStartTime;
$autoChatUrl = '../ajax/auto-chat/?tz='.urlencode($tz).'&t='.urlencode($_GET['t']);
?>
<script>
chatSeconds = <?=$chatSeconds?>;
autoChatUrl = '<?=$autoChatUrl?>';
</script>
<script src="../js/auto-chat.js"></script>
<!-- End Auto Chat Functions -->
<?php
}
?>


<script>
var ctaShowing    = false;
var contactId     = '<?=$contactId?>';
var tagSawCta     = <?=$tagSawCta?>;
var secTilEnd     = <?=$secTilEndEvent?>;
var starttime     = <?=$secSinceStart?>;
var endtime       = <?=$runTimeSeconds?>;
var ctaTime       = <?php if($ctaVidShow){echo $ctaVidShow;}else{echo 'false';} ?>;
var posterPlay    = '<?=$domainPrefix.$domainName.$path.'images/poster-play.gif'?>';
var posterloading = '<?=$domainPrefix.$domainName.$path.'images/poster-loading.gif'?>';
var videoId       = '<?=$videoId?>';
var videoSources  = '<?=generateVideoSrc()?>';
</script>

<!-- Include Event Actions -->
<script src="../js/event-actions.js?v=3"></script>
<?php
videoBasedActions();
timedTagActions();
clickTagActions();

$playerPath = '../js/player';
switch($videoType){
	case 'html5':
		$playerPath .= 'HTML5.js';
	break;
	case 'youTube':
		$playerPath .= 'youTube.js';
	break;
	case 'vimeo':
		$playerPath .= 'Vimeo.js';
		echo '<script src="https://player.vimeo.com/api/player.js"></script>';
	break;
	default:
		echo '<script>alert("Video type is invalid");</script>';
	break;
}
	
echo '<script src="'.$playerPath.'"></script>';
?>

<script>
$( function () {

	if(secTilEnd > 0){
		playVideo();
	}else{
		endEvent();
		$( '.post-cta' ).removeClass( 'hidden' );
		ctaToggle();
	}

	$( '.cta-tab, .cta-toggle' ).click(
		function () {
			ctaToggle();
		}
	);

	$('.disclaimer-close').click(
		function(){
			$('.disclaimer').addClass('hidden');
		}
	);
} );
</script>

</body>
</html>