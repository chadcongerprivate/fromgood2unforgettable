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
	<title>
		Order Complete
	</title>
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
	<link href="../../style.css?v=1" rel="stylesheet">

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

	<!-- Start Section -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="../../images/registration/logo.png">
				</div>
				<div class="col-md-6 text-right hidden-sm hidden-xs">
				</div>
			</div>
		</div>
	</header>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div id="confirmationBox">
						<h2 class="text-center">Congratulations!</h2>
						<p>I’m thrilled that you’re saying “YES!” to learning how to live and abundant life!</p>
						<p>So many people struggle with developing an abundant mindset and living harmonizes with their desired lifestyle.</p>
						<p>But you’ve just jumped quite a bit closer by making the savvy decision to invest in my <em>Abundant Life Program.</em></p>
						<p>I’ve worked hard – really hard – for more than 20 years to build the systems and resources you’ll discover in this program.</p>
						<p>Open your heart and mind, follow along and complete the simple assignments I give you – and I promise …</p>
						<p>Your life will transform.						</p>
						<p><strong>Do these two easy things right now so you can get started:</strong></p>
						<ol>
							<li>Check your email now for access instructions and your personalized log-in information. </li>
							<li>Please add lisa@motivatingthemasses.com to your list of approved addresses so you don't miss any important updates from me about the course.</li>
						</ol>
						<p>I'm really looking forward to helping you create the life you love – and deserve!</p>
						<p>Your sister in prosperity and possibility,</p>
						<p>Lisa</p>
						<p>P.S. If you have any questions about accessing the training modules or other resources, please email my team at lisa@motivatingthemasses.com.</p>
					</div>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs">
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section white-bg fade-on-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2 class="text-center purple">SPREAD THE WORD!</h2>
					<p class="text-center">Have a friend who would be interested? Invite them to our this FREE webinar training:</p>
					<ul class="platform text-center">
						<li><a href="<?=$twitterShareLink?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li><a href="<?=$facebookShareLink?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="spacer-40"></div>
					<h2>ALTERNATIVE FACEBOOK POSTS:</h2>
					<p>How To Accomplish Unfathomable Goals And Tap Into Your Limitless Potential! <a href="<?=$shareLink?>" target="_blank">
					<?=$shareLink?>
					</a> </p>
					<p> Learn exactly how to realign, reset and reenergize your mindset to live the Abundant Life you deserve! <a href="<?=$shareLink?>" target="_blank">
						<?=$shareLink?>
					</a> </p>
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
				
					<div class="social-holder"><a id="learn">
						</a>
					
						<a href="https://www.facebook.com/LisaNicholsFanPage"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://twitter.com/2motivate"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/company-beta/3675653/?pathWildcard=3675653"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<div class="copyright">
						Copyright © 2010-<?=date('Y')?> Motivating The Masses. All Rights Reserved.
					</div>
					<a class="privacy" href="https://www.motivatingthemasses.com/privacy-terms-of-use">Privacy &amp; Terms of Use</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Section -->

	<!-- Modal -->
	<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title text-center">From Good to UNFORGETTABLE</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center subhead"><strong class="orange">REVEALED!  Why Most Speakers Never Break the 6-Figure Mark</strong><br> – and What to Do Differently to Earn a Great Living AND Have a Massive Impact Get Proven Scripts and Step-by-Step Processes During Lisa Nichols’ New Free Speaker Training...</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<form accept-charset="UTF-8" action="https://wqy87770.infusionsoft.com/app/form/process/184467a5691a628784d832071524d1ab" class="infusion-form" method="POST">
								<input name="inf_form_xid" type="hidden" value="184467a5691a628784d832071524d1ab"/>
								<input name="inf_form_name" type="hidden" value="Speak For Ultimate Impact & Profit - Registration"/>
								<input name="infusionsoft_version" type="hidden" value="1.68.0.154"/>
								<input type="hidden" name="inf_custom_SFUIPDateTime" value="<?=$availableDates[0]?>">
								<input type="hidden" name="<?=$infTimezoneField?>" value="<?=$timezone?>">
								<h2>Sign Up Now</h2>
								<div class="form-group form-group-lg">
									<select name="inf_custom_SFUIPUnixDate" class="form-control time-select" data-error="Date is required." required>
										<option value="">Select a time...</option>
										<?php
										foreach ( $availableDates as $unix ) {
											$text = date( 'l, F jS \a\t g:ia', $unix );
											$tzAbr = date( 'T', $unix );
											?>
										<option value="<?=$unix?>">
											<?=$text?>(
											<?=$tzAbr?>)
										</option>
										<?php
										}
										?>
									</select>
									<div class="help-block with-errors"></div>

								</div>

								<div class="form-group form-group-lg">
									<input name="inf_field_FirstName" type="text" class="form-control" id="inf_field_FirstName" placeholder="Enter Your First Name Here..." data-error="First name is required." required>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group form-group-lg">
									<input name="inf_field_Email" type="email" class="form-control" id="inf_field_Email" placeholder="Enter Your Email Address Here..." data-error="Valid email is required." required>
									<div class="help-block with-errors"></div>
								</div>
								<button class="btn btn-block btn-register">Yes! REserve my spot in this free event!</button>
								<p class="text-center">We guarantee 100% privacy. Your Information will not be shared.
								</p>
							</form>
							<div class="spacer-40 visible-xs"></div>
						</div>
						<div class="col-md-6 col-md-pull-6">
							<h3>How to Create Impact and Profit as a Professional Speaker</h3>
							<p>Tune in to discover:</p>
							<ul class="num-list">
								<li><strong>4 key techniques</strong> for crafting an unforgettable message</li>
								<li><strong>A step-by-step process</strong> for booking speaking engagements and asking for referrals</li>
								<li><strong>Scripts</strong> for having dignified conversations about your speaker fee</li>
								<li><strong>How to hook your audience</strong> so they become fans – and then paying students</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

	<script>

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
		} );
	</script>


	<script src="../../js/viewportchecker.js"></script>
	<script>
		// Now to add the functions once viewport is active
		$( document ).ready( function () {
			$( '.fade-on-scroll' ).addClass( "pre-animate" ).viewportChecker( {
				classToAdd: 'post-animate animated fadeIn',
				offset: 100
			} );
			$( '.slide-left-on-scroll' ).addClass( "pre-animate" ).viewportChecker( {
				classToAdd: 'post-animate animated slideInLeft',
				offset: 100
			} );
			$( '.slide-right-on-scroll' ).addClass( "pre-animate" ).viewportChecker( {
				classToAdd: 'post-animate animated slideInRight',
				offset: 100
			} );
		} );
	</script>
</body>

</html>