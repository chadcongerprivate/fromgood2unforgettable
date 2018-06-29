<?php
include( '../include/webinar-include.php' );

// set timezone to inf time for form
date_default_timezone_set($infTimeZone);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>
		<?=$webinarName?>
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
	<link href="../css/animate.css" rel="stylesheet">
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


	<!-- Start Section -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="../images/registration/logo.png">
				</div>
				<div class="col-md-6 text-right hidden-sm hidden-xs">
					<button class="btn btn-orange margin-15-tb" data-toggle="modal" data-target="#regModal">Sign Up Now!</button>
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
					<div id="infoBox" class="text-center">
						<p class="text-capitalize text-left">Ready to Move Beyond Scarcity or “Just Getting By”? </p>
						<h1 class="text-capitalize text-center">Discover a 3-Step Process for Shifting to an Abundance Mindset </h1>
						<h2 class="text-capitalize text-center white text-500">– and Creating True Wealth in All Areas of Your Life</h2>
					
						<div class="dark-grey-bg">
							“Give Me 90 Minutes – and I'll Show You How I Transformed My Life from Public Assistance for My Family to Leading a Multi-Million Dollar Enterprise”
						</div>
						<p>Join Lisa Nichols As She Reveals the Foundational Process She Used to Move from Welfare to Wall Street</p>
						<button class="btn btn-orange btn-orange-lg" data-toggle="modal" data-target="#regModal">Sign Up Now!</button><button class="btn btn-scroll btn-orange btn-orange-lg hidden">Learn More</button>
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
					<h2 class="text-center blue">Do you want more from life?</h2>
					<div class="row">
						<div class="col-md-3">
					<img class="img-responsive" src="../images/registration/lisa-pointing.jpg" alt=""></div>
						<div class="col-md-9">	<p dir="ltr">More money. More love. More adventure. More health. More spiritual connection. More acceptance of yourself.</p>
					<p dir="ltr">It can all be yours … anything you dream of and desire. </p>
					<p dir="ltr">In fact, it&rsquo;s meant to be yours. Abundance in all areas of life is your birthright.</p>
					<p dir="ltr">Yet most people grow up and still live with scarcity- and fear-based mindsets. They&rsquo;ve lost their connection to their natural state of abundance. </p>
					<p dir="ltr">If you want to turn your dreams of abundant life into a reality, you need to cultivate to an abundance mindset. Lisa Nichols will teach you how to it during this 90-minute online training.
					</p></div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section" id="tune-in">
		<div class="container">
			<div class="row">
				<div class="col-md-7 left-col slide-left-on-scroll">
					<h2>TUNE IN SO YOU CAN DISCOVER:</h2>

					<div class="row">
						<div class="col-sm-6">
							<i class="fa fa-list-ol" aria-hidden="true"></i>
							<h4 class="text-uppercase">The top 3 myths</h4>
							<p>The <strong>top 3 myths</strong> that prevent most people from ever experiencing true abundance – and how break free from their limiting power <em>(Once your eyes are opened, you’ll know that whether you live in abundance or scarcity is your choice.) </em></p>
						</div>
						<div class="col-sm-6">
							<div class="spacer-40 visible-xs"></div>
							<i class="fa fa-key" aria-hidden="true"></i>
							<h4 class="text-uppercase">9 key attributes</h4>
							<p><strong>9 key attributes of abundant thinkers</strong> … and how adopting them will help you connect to the natural abundance that’s available to you in every minute <em>(Abundance is more of a mindset than it is your actual circumstances. When you have an abundant mindset, you’ll attract, recognize and act on the opportunities to create the external circumstances you want.)</em></p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
							<h4 class="text-uppercase">The 5 influencers</h4>
							<p>The <strong>5 influencers that created your current money blueprint </strong>… and how they’re affecting the way you make money, what you think about money, how you spend money, and how you react when money flows into your life.<em> (Money is a major component of an abundant life. Once you know how your past is affecting your money blueprint … you can make different choices moving forward.)</em></p>
						</div>
						<div class="col-sm-6">
							<div class="spacer-40 visible-xs"></div>
							<i class="fa fa-users" aria-hidden="true"></i>
							<h4 class="text-uppercase">3 types of relationships</h4>
							<p>The <strong>3 types of relationships</strong> you’ll experience in a lifetime … and how to leverage them to increase your abundance <em>(I’ll also share a secret tip for dramatically reducing the conflict you experience in 80 percent of your relationships.) </em></p>
						</div>
					</div>

				</div>
				<div class="col-md-5 right-col">
					<p>You’ll also get to participate in a process that will open you to greater abundance immediately … so you can live your divine assignment and create the life that’s perfect for you.</p>
					<p>If you want to learn the same strategies that have <em><strong>helped thousands of my students transform their lives from average to extraordinary</strong></em> by tapping into the incredible abundance that is available to each and every one of us.</p>
					<p>During this 90-minute online training, I’m going to share the most important step you can take starting today to begin turning your dreams of an abundant life into a reality.</p>
					<form accept-charset="UTF-8" action="https://wqy87770.infusionsoft.com/app/form/process/0f85e4ed91bfc73c7d2524303e2ff30c" class="infusion-form" method="POST">
						<input name="inf_form_xid" type="hidden" value="0f85e4ed91bfc73c7d2524303e2ff30c" />
						<input name="inf_form_name" type="hidden" value="Abundant Life OnD -  Registration" />
						<input name="infusionsoft_version" type="hidden" value="1.68.0.179" />
						<input class="mergeDate" type="hidden" name="inf_custom_ALPMergeDate" value="<?=date('l, F jS \a\t g:ia', $availableDates[0])?>">
						<input class="selectedDate" type="hidden" name="inf_custom_ALPDateTime0" value="<?=date('m-d-Y', $availableDates[0])?>">
						<input class="selectedTime" type="hidden" name="inf_custom_ALPDateTime0" value="<?=date('H:i', $availableDates[0])?>">
						<h2>Sign Up Now</h2>
						<div class="form-group form-group-lg">
							<select name="inf_custom_ALPUnixDate" class="form-control time-select selectedDateTime" data-error="Date is required." required>
								<option value="">Select a time...</option>
								<?php
								foreach ( $availableDates as $unix ) {
									$text = date( 'l, F jS \a\t g:ia', $unix );
									$tzAbr = date('T', $unix);
									
									echo '<option data-date="'.date('m-d-Y', $unix).'" data-time="'.date('H:i', $unix).'" value="'.$unix.'">'.$text.' ('.$tzAbr.')</option>';
									
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
					<p>You and you alone are the creator of your abundant life and once you recognize this fact, <em><strong>you can bring to yourself the things that you need to bring, so that you can have the future that you want to have.</strong></em><strong></strong></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section white-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">ABOUT LISA NICHOLS</h2>

					<div class="light-grey-box">
						<strong class="orange">LISA NICHOLS</strong> is one of the world’s most-requested motivational speakers, as well as media personality and corporate CEO whose global platform has reached and served nearly 30 million people. From a struggling single mom on public assistance to a millionaire entrepreneur, Lisa’s courage and determination has inspired fans worldwide and helped countless audiences break through, to discover their own untapped talents and infinite potential. As Founder and Chief Executive Officer of Motivating the Masses, Inc. – one of the country’s only publicly traded personal and business development training companies – Lisa has helped develop workshops and programs that have transformed the lives of men and women, and altered the trajectory of businesses throughout the country and across the world.
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div id="about" class="section white-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 col-lg-offset-1 left-col slide-left-on-scroll">
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
					<h2>MOTIVATING THE MASSES</h2>
					<p>Lisa is also a best-selling author of six books, and her 7th book, ABUNDANCE NOW, published by HarperCollins. In ABUNDANCE NOW, Lisa continues her journey with her fans, providing a clear and practical blueprint for personal success, drawn directly from the life experiences of its beloved author. Lisa lives, plays and works in the greater San Diego, California, area and on stages around the world, working alongside her world-class team committed to Motivating the Masses.
					</p>
					<i class="fa fa-diamond" aria-hidden="true"></i>
					<h2>ABUNDANCE NOW</h2>
					<p>ABUNDANCE NOW is the follow-up to Lisa’s New York Times bestseller, NO MATTER WHAT. Lisa’s extraordinary story of transforming her own life from public assistance for her family to leading a multi-million dollar enterprise is the inspiration behind her bold mission to teach others that it is possible to do the same. Today, fans worldwide revere Lisa for her mastery of teaching people how to accomplish unfathomable goals and tap into their limitless potential.
					</p>
				</div>
				<div class="col-md-4 center-col">
					<img class="img-responsive" src="../images/order/lisa-standing3.png" alt="">
				</div>
				<div class="col-md-4 col-lg-3 right-col slide-right-on-scroll">
					<i class="fa fa-rocket" aria-hidden="true"></i>
					<h2>MOTIVATING THE TEEN SPIRIT</h2>
					<p>A noted media personality who has appeared on Oprah, The Today Show, the Steve Harvey Show, and Extra – just to name a few, Lisa is also celebrated for the impact she has on the lives of teens. Through Lisa’s non-profit foundation Empowering the Human Spirit, she has touched the lives of 211,650 teens, prevented over 3,800 teen suicides, supported 2,500 dropouts in returning to school, and has helped thousands reunite with families.

					</p>

					<i class="fa fa-trophy" aria-hidden="true"></i>

					<h2>AWARDS</h2>
					<p>Among the prestigious awards and honors bestowed upon Lisa for her extensive work are the Humanitarian Award from the country of South Africa, The Ambassador Award, and the LEGO Foundation‘s Heart of Learning Award. The City of Henderson, Nevada named November 20th as Motivating the Teen Spirit Day; and the City of Houston, Texas named May 9th as Lisa Nichols Day for her dedication to service, philanthropy and healing.</p>
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
			<h2 class="modal-title text-center">Opening To Abundance</h2>
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center subhead"><strong class="orange">MASTER YOUR MINDSET & AMPLIFY YOUR LIFE!</strong><br>
In this FREE Virtual Training, you’ll learn exactly how to realign, reset and reenergize your mindset to live the Abundant Life you deserve.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<form accept-charset="UTF-8" action="https://wqy87770.infusionsoft.com/app/form/process/0f85e4ed91bfc73c7d2524303e2ff30c" class="infusion-form" method="POST">
						<input name="inf_form_xid" type="hidden" value="0f85e4ed91bfc73c7d2524303e2ff30c" />
						<input name="inf_form_name" type="hidden" value="Abundant Life OnD -  Registration" />
						<input name="infusionsoft_version" type="hidden" value="1.68.0.179" />
						<input class="mergeDate" type="hidden" name="inf_custom_ALPMergeDate" value="<?=date('l, F jS \a\t g:ia', $availableDates[0])?>">
						<input class="selectedDate" type="hidden" name="inf_custom_ALPDateTime0" value="<?=date('m-d-Y', $availableDates[0])?>">
						<input class="selectedTime" type="hidden" name="inf_custom_ALPDateTime0" value="<?=date('H:i', $availableDates[0])?>">
						<input type="hidden" name="<?=$infTimezoneField?>" value="<?=$timezone?>">
						<h2>Sign Up Now</h2>
						<div class="form-group form-group-lg">
							<select name="inf_custom_ALPUnixDate" class="form-control time-select selectedDateTime" data-error="Date is required." required>
								<option value="">Select a time...</option>
								<?php
								foreach ( $availableDates as $unix ) {
									$text = date( 'l, F jS \a\t g:ia', $unix );
									$tzAbr = date('T', $unix);
									
									echo '<option data-date="'.date('m-d-Y', $unix).'" data-time="'.date('H:i', $unix).'" value="'.$unix.'">'.$text.' ('.$tzAbr.')</option>';
									
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
						<button class="btn btn-block btn-register">Yes! Reserve my spot in this free event!</button>
						<p class="text-center">We guarantee 100% privacy. Your Information will not be shared.
						</p>
					</form>
					<div class="spacer-40 visible-xs"></div>
					</div>
				<div class="col-md-6 col-md-pull-6">
					<h3>Accomplish Unfathomable Goals And Tap Into Your Limitless Potential</h3>
					<p>Tune in to discover:</p>
					<ul class="num-list">
						<li><strong>How to cultivate an abundant mindset</strong> by adopting the traits of abundant thinkers.</li>
						<li><strong>Your money blueprint</strong> and how it is influencing the way you make money, what you think about money, how you spend money</li>
						<li><strong>Abundance transforms relationships</strong> for the better and how to leverage your relationships to increase your abundance</li>
						<li><strong>How to open yourself up</strong> to experience greater abundance in all areas of your life</li>
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
			
			$('.btn-scroll').click(
				function(){
					scrollToSelector('#tune-in', 500, 60)
				}
			);
		} );
	</script>

	<!-- Form  -->
	<script src="../js/validator.js"></script>
	<script>
		$( document ).ready( function () {

			$( '.infusion-form' ).validator().on( 'submit', function ( e ) {

				if ( e.isDefaultPrevented() ) {
					// handle the invalid form...


				}
			} );
			
			// select date and time
			$('.selectedDateTime').change(
				function(){
					var sDate = $(this).find('option:selected').attr('data-date');
					var sTime = $(this).find('option:selected').attr('data-time');
					var merge = $(this).find('option:selected').html();
					
					$('.selectedDate').each(
						function(){
							$(this).val(sDate);
						}
					);
					
					$('.selectedTime').each(
						function(){
							$(this).val(sTime);
						}
					);
					
					$('.mergeDate').each(
						function(){
							$(this).val(merge);
						}
					);
					console.log(sDate + ' ' + sTime);
				}
			);

		} );
	</script>
	<!-- End Form -->
	
	<!-- Timezone Detect -->
	<script src="../js/timezone-detect-jstz.js"></script>
	<script>
		$( document ).ready( function () {
			var tzInfo = jstz.determine();
			var tz     = encodeURI(tzInfo.name());
			// update tz on form
			$('input[name=inf_custom_Timezone0]').val(tz);
    		
			$.get('./ajax/available-dates/?tz='+tz,
				 	function(options){
						$('.time-select').html(options);
					}
				 );
			
		} );
	</script>
	<!-- End Timezone Detect -->




	<script src="../js/viewportchecker.js"></script>
<script>

// Now to add the functions once viewport is active
$(document).ready(function() {
    $('.fade-on-scroll').addClass("pre-animate").viewportChecker({
        classToAdd: 'post-animate animated fadeIn',
        offset: 100
       });
    $('.slide-left-on-scroll').addClass("pre-animate").viewportChecker({
        classToAdd: 'post-animate animated slideInLeft',
        offset: 100
       });
    $('.slide-right-on-scroll').addClass("pre-animate").viewportChecker({
        classToAdd: 'post-animate animated slideInRight',
        offset: 100
       });
});
</script>

<?php
// include tracking code
//include($includePath.'share-plugin.php');
?>
</body>

</html>