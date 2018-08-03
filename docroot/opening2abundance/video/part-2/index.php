<?php
include('../../include/webinar-include.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>The Abundant Life Online Program | Video 2</title>
<link rel="shortcut icon" href="https://webinars.motivatingthemasses.com/favicon.png">

	<!-- Start Page Description Meta Tags -->
	<meta name="description" content="<?=$shareDescription?>">
	<meta property="og:title" content="<?=$shareTitle?>">
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?=$shareLink?>">
	<meta property="og:image" content="<?=$shareImage?>">
	<meta property="og:description" content="<?=$shareDescription?>">
	<meta property="og:site_name" content="<?=$webinarName?>">
	<!-- End Page Description Meta Tags -->

	<meta name="theme-color" content="#81b15f">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/animate.css" rel="stylesheet">
	<link href="../style.css?v=4" rel="stylesheet">

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

<!-- Exit Trigger -->
<div class="exit-trigger"></div>
<!-- End Exit Trigger -->

	<!-- Start Section -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<img src="../../images/registration/logo.png">
				</div>
				<div class="col-md-4 col-sm-6 hidden-xs">
				</div>
				<div class="col-md-4 text-right hidden-sm hidden-xs">
					<a class="btn btn-orange margin-15-tb btn-scroll" href="../../order/?<?=$_SERVER['QUERY_STRING']?>" target="_blank">Enroll Now >></a>
				</div>
			</div>
		</div>
	</header>
	<!-- End Section -->






<!-- Start Section -->
	<div class="section guar">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://player.vimeo.com/video/280245248?autoplay=1&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						
					</div>
					<a class="btn btn-orange btn-orange-lg btn-orange-lg-big-text btn-scroll btn-block margin-30-b" href="../../order/?<?=$_SERVER['QUERY_STRING']?>" target="_blank">Enroll Now &gt;&gt;</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section fade-on-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2 class="text-center blue">Leave a comment below…</h2>
					
					
					<div class="fb-comments" data-order-by="reverse_time" data-href="http://webinars.motivatingthemasses.com/opening2abundance/video/part-2/" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	
	<!-- Start Section -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a id="learn">
					</a>
				

					<div class="social-holder hidden"><a id="learn">
						</a>
					

						<a href="https://www.facebook.com/LisaNicholsFanPage"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://twitter.com/2motivate"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/company-beta/3675653/?pathWildcard=3675653"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<div class="copyright">
						Copyright © 2010-<?=date('Y')?> Motivating The Masses. All Rights Reserved.
					</div>
					<a href="https://www.motivatingthemasses.com/privacy-terms-of-use" target="_blank" class="privacy">Privacy &amp; Terms of Use</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Section -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
		// scroll to anchor
		function scrollToSelector( cssSelector, miliseconds, offset ) {
			var offset = offset || 0;
			var position = $( cssSelector );
			$( 'html,body' ).animate( {
				scrollTop: position.offset().top - offset
			}, miliseconds );
		}


		function headerScroll() {
			var scrollPos = window.scrollY || window.scollTop || document.getElementsByTagName( "html" )[ 0 ].scrollTop;

			var changePos = 40;

			if ( scrollPos >= changePos && header == 'trans' ) {
				header = 'dark';
				$( 'header' ).addClass( 'dark-grey-header' );
			}
			if ( scrollPos < changePos && header == 'dark' ) {
				header = 'trans';
				$( 'header' ).removeClass( 'dark-grey-header' );
			}
		}

		var header = 'trans';
		$( function () {
			headerScroll();
			$( window ).scroll(
				function () {
					headerScroll();
				}
			);

			$( '.btn-scroll' ).click(
				function () {
					scrollToSelector( '#orderForm', 500, 60 )
				}
			);
		} );
	</script>


<!-- Start FB Comments -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=647430838981738&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End FB Comments -->


<?php
// include tracking code
//include($includePath.'share-plugin.php');
?>
</body>

</html>