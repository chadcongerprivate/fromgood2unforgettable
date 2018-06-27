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
<link rel="shortcut icon" href="https://webinars.motivatingthemasses.com/favicon.png">

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
	<link href="../css/event.css?v=2" rel="stylesheet">
	<link href="../css/auto-chat.css?v=1" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
// include tracking code
include($includePath.'tracking-code.php');
?>
</head>

<body>
	<div class="left-col">
		<header>&ldquo;Opening to Abundance&rdquo; <span class="word-wrap">with Lisa Nichols</span></header>
		<div id="video-container">
			<div id="event-stream">
			</div>
			
		<div id="info-area">
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
		<div class="pre-cta">
			<p>If you would like to learn more about MTM products/services <a href="<?=$ctaLink?>" target="_blank"><strong>click here</strong></a> or call (760)-931-9400.</p><p>

If you require support or have a question please email <a href="mailto:support@motivatingthemasses.com" target="_blank"><strong>support@motivatingthemasses.com</strong></a></p>
	</div>
		<div class="post-cta hidden">
			<a href="<?=$ctaLink?>" target="_blank" class="btn btn-block btn-cta cta">Add to Cart</a>
			<p style="margin-top: 10px;"><strong><a href="<?=$ctaLink?>" target="_blank">YES! YES! Lisa! I’m ready to become an <span class="word-wrap">unforgettable speaker!</span></a></strong></p>
			
		</div></div>
		</div>
		</div>
		</div>
		</div>
	</div>
	<div class="right-col">
		<div id="logo-header" class="hidden-xs hidden-sm">
			<img src="../images/logo.png" class="img-responsive img-responsive-center">
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
					<h2>YES! YES! Lisa! I’m ready to become an unforgettable speaker!</h2>
					<a href="<?=$ctaLink?>" target="_blank"><img class="img-responsive img-responsive-center" src="../images/presenter.jpg"></a><br>
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
	stretchChat();
	$( window ).resize( function () {
		containVideo();
		stretchChat();
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
$autoChatUrl = '../ajax/auto-chat/?tz='.urlencode($tz).'&t='.urlencode($_GET['t']).'&webId='.$unixStartTime;
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
<script src="../js/event-actions.js?v=4"></script>
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

<?php
// include tracking code
//include($includePath.'share-plugin.php');
?>
</body>
</html>