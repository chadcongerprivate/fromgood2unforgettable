<?php
include('../include/webinar-include.php');


if($secTilBonusExpire > 0){
	$bonuses = true;
	$countDownSec = $secTilBonusExpire;
}else{
	$bonuses = false;
	$countDownSec = 0;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>The Abundant Life Online Program | Order</title>

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
	<link href="style.css?v=4" rel="stylesheet">
	<link href="order-form.css?v=1" rel="stylesheet">

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
					<img src="../images/registration/logo.png">
				</div>
				<div class="col-md-4 col-sm-6 hidden-xs">
					<div id="timerContainer" class="row hidden">
						  <p class="text-center">This Offer Expires In:</p>
							<!-- Start Timer -->
							<div class="timer-black" id="timer">
							  <div class="time-box time-box-days hidden-sm hidden-xs">
								  <div class="time-no days"><span>0</span><span>0</span></div>
								<div class="time-desc"> days </div>
							  </div>
							  <div class="time-box time-box-hours">
								<div class="time-no hours"><span>0</span><span>0</span></div>
								<div class="time-desc"> hours </div>
							  </div>
							  <div class="time-box time-box-min">
								<div class="time-no min"><span>0</span><span>0</span></div>
								<div class="time-desc"> mins </div>
							  </div>
							  <div class="time-box time-box-sec">
								<div class="time-no sec"><span>0</span><span>0</span></div>
								<div class="time-desc"> sec </div>
							  </div>
							</div>
							<!-- End Timer -->
							</div>
				</div>
				<div class="col-md-4 col-xs-6 visible-xs">
				  <?php
					if($bonuses){
				?>
					  <div class="timer-simple">
						  This Offer Expires In:<br><span class="hours"><span>0</span><span>0</span> </span> hours, <span class="min"><span>0</span><span>0</span>  </span> min, <span class="sec"><span>0</span><span>0</span>  </span> sec
					</div>
				<?php
					}
				?>
				</div>
				<div class="col-md-4 text-right hidden-sm hidden-xs">
					<button class="btn btn-orange margin-15-tb btn-scroll">Enroll Now >></button>
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
					<div id="infoBox" class="white-trans-bg">
						<h1>
      			<i style="font-size: 30px;" class="fa fa-check darkgreen" aria-hidden="true"></i><span class="black">
Yes, Lisa! I’m ready to begin living my abundant life right now – without waiting to first create substantial financial wealth.</span></h1>
					
<h4><a href="#" class=" btn-scroll">Please enroll me in</a> <em>The Abundant Life Online Program.</em></h4>

						<div class="white-text-box" style="font-weight: 400;	">
							<strong><em>The Abundant Life Online Program</em></strong> is a step-by-step personal empowerment training program that allows you to live life on your own terms … and experience abundance in your self-development, spirituality, relationships, and finances.
						</div>
						<p class="blue"><strong>You’ll discover how to:</strong>
						</p>
						<ul class="num-list">
							<li>Realize your greatest potential and play full out while encountering more opportunities for advancement </li>
							<li>Harmoniously grow your health, wealth, relationships and spirit so you can transform each area of your life (without sacrificing the others) </li>
							<li>Trade an “either, or” approach to life for a “yes, and also” outlook </li>
							<li>Adopt an abundant mindset and say goodbye to your limiting beliefs around scarcity, jealousy, and lack that have been holding you back from fulfilling your true purpose </li>
							<li>Dramatically increase your financial wealth so that you can pay for the nicer things in life … from a beautiful home, luxury car, fun vacation and college for your kids </li>
							<li>Live your purpose and calling … while you’re also earning a great living </li>
							<li>Put an end to anxiety, frustration, and fear... </li>
							<li>Stop hiding your light because it makes other people uncomfortable …  </li>
							<li>Stop settling for less than what you want because you’ve never experienced anything else… </li>
							<li>And much more!</li>
						</ul>
						<button class="btn btn-orange btn-orange-lg btn-orange-lg-big-text btn-scroll btn-block">Enroll Now >></button>
					</div>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs">
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div id="included" class="section fade-on-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2 class="text-center blue">Here's what's included in this 12-week program … so you can easily get started today:</h2>
					<div class="p-stack">
						<h3>Immediate access to the “Definition of Abundance” introductory video</h3>
						
						<p>Often called the “Wikipedia of <em>The Abundant Life Online Program,”</em> this video gives you answers to “How do I overcome my past to create my abundant future?” moments so you can unlock greater abundance in all areas of your life.</p>
					</div>
					<div class="p-stack">
						<h3>11 additional video training modules</h3>
						
						<div class="topics">
							<p class="text-center"><strong>Topics include:
						</strong>
							</p>
							<ul class="num-list2">
									<li>The difference between scarcity and abundance</li>
									<li>The 4 key areas of life where abundance will appear – if you let it</li>
									<li>How to rid your mind of limiting beliefs</li>
									<li>Learning to trust your judgment and intuition again</li>
									<li>Loving yourself … and figuring out what you really want</li>
									<li>Coming to peace with any unresolved feelings about religion</li>
									<li>Cultivating a deeper connection with yourself – and your spiritual Source</li>
									<li>Questions to ask about your relationships</li>
									<li>How rich people think differently about money</li>
									<li>Deliberately creating a new relationship with money</li>
									<li>Exploring the contrast between scarcity and abundance</li>
									<li>Activating your new definition of abundance</li>
									<li>And much more</li>
							</ul>
						</div>
					</div>
					<div class="p-stack">
						<h3>Downloadable worksheets for each module – more than 100 pages of action-based learning</h3>
						
						<p>These workbooks will help turn your new knowledge into measurable results.</p>
					</div>
					<?php
					if($bonuses){
					?>
					<h2 class="text-center blue">Plus 3 Special Bonus Gifts…</h2>
					
					<div class="p-stack">
						<h3><span class="blue">BONUS #1 -</span> Six Monthly Coaching Calls with Lisa</h3>
						<h4>$2,200 Value</h4>
						<p dir="ltr">Yes that’s right I said 6, hour long monthly coaching calls on ZOOM with yours truly.</p>
						<p dir="ltr">Each month you&rsquo;ll have the opportunity to join me LIVE via ZOOM for an exclusive group coaching call to ask my team and I any questions you may have about your transformational journey.</p>
						<p dir="ltr">When I say I believe in you and I love you, it&rsquo;s because I do… &nbsp;and that&rsquo;s exactly why in this personal development program I wanted to make sure that you get the personal touch that is needed for you to achieve 360 degree abundance and become the best version of yourself.					</p>
					</div>
					<div class="p-stack">
						<h3><span class="blue">BONUS #2 -</span> A private FB group</h3>
						<h4>$597 Value</h4>
						<p>Get crystal clear on what success and prosperity look like for you. Too often, we adopt other people’s visions of success for ourselves. But to experience true wealth, you have to know what matters to you.</p>
					</div>
					<div class="p-stack">
						<h3><span class="blue">BONUS #3 -</span> A FREE ABUNDANT LIFE PROGRAM FOR A FRIEND OR FAMILY MEMBER</h3>
						<h4>$1,997 Value</h4>
						<p dir="ltr">I truly believe that <strong>nobody should grow alone</strong>, so if you are willing to be radical, take action and join my digital campus within <strong>the next 7 days</strong> you will be able to gift a friend or family member the program for FREE! </p>
						<p dir="ltr">All of the bonuses have a total value of over $7,294. And they&rsquo;re all yours today for FREE just for taking <strong class="blue">immediate action right now.</strong></p>
					</div>
					<?php
					}
					?>
					
					
					<div style="margin-top: 60px; color: #222; line-height: 1.8;">
						<p><em>&ldquo;The Abundant Life program for me was a game changer! I was able to release my negative thought patterns and limiting beliefs and regain my self-esteem by assessing my life and following the road map that the Abundant Life Program laid out for me. My life has changed in every way imaginable. My relationships are better, finances, spirituality and self-empowerment.<br>
						<br>
	&ldquo;The biggest change, however, is that I was able to finally release the shackles of shame regarding my herpes status. I was able to tell my mother after 13 years of keeping it a secret! I have now formed the African American Herpes Alliance to help others bound by shame, anger, fear and resentment to step out of the shadows and reclaim their power. This program showed me that I was OK. Flaws and all.<br>
	<br>
	&ldquo;If you are ready for fundamental breakthroughs in EVERY area of your life, this is the program that will get you there. If you are tired of playing small and dimming your light, this is the program that teaches you how to shine bright like the diamond you are! We all know that we could be better, bigger and bolder. Abundant Life is the personal trainer for your mind, spirit and body.&rdquo;</em></p>
						<p class="text-right"><em> ~ Linda Husser
						</em></p></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section" id="bonus">
		<div class="container">
			<div class="row">
				<div class="col-md-6 slide-right-on-scroll text-center">
					<h1 class="orange">REGISTER TODAY AND SAVE!</h1>
					<h2>Your Investment: <span style="opacity: .7; text-decoration: line-through">$997</span> $497</h2>
					<h1 class="orange">Want To Pay As You Go?<br>
					No Problem!</h1>
					<h2>3 payments of $197</h2>
					
						<button class="btn btn-orange btn-orange-lg btn-orange-lg-big-text btn-scroll btn-block">Enroll Now >></button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section guar">
		<div class="container">
			<div class="row">
				<div class="col-md-3 slide-left-on-scroll">
					<img src="../images/order/guarantee.png" class="img-responsive">
				</div>
				<div class="col-md-9 slide-right-on-scroll">
					<h2>My Unconditional Satisfaction Guarantee
</h2>
					<p>I wholeheartedly believe that <em><strong>The Abundant Life Online Program</strong></em> will work for you. It’s the process that I used to shift my mindset from scarcity and fear … to abundance and gratitude … and to make the climb from welfare to Wall Street. </p>
					<p>If, after <span style="text-decoration: underline">30 full days of working with the material</span> in <em><strong>The Abundant Life Online Program:</strong></em></p>
					<ul>
						<li>If you don’t discover how to enjoy life TODAY instead of constantly delaying your happiness and enjoyment … OR:</li>
						<li>If you don’t develop a systemized approach to reaching your financial goals in your personal life and business … OR:</li>
						<li> If you’re dissatisfied for any reason (even the way the course is designed) ... let me know, and I'll happily refund 100% of your financial investment into the program – no questions asked.</li>
					</ul>
					<p>... let me know, and I'll happily refund 100% of your financial investment into the program – no questions asked.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<img src="../images/order/guarantee2.png" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div id="included" class="section fade-on-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2 class="text-center blue">Here’s What Students Are Saying…</h2>
					
					
					<div style="margin-top: 40px; color: #222; line-height: 1.8;">
						<p><em>&ldquo;My life belongs to me now. &nbsp;I've always felt responsible for the world; as though everyone else mattered most. Since I've joined the program, I find abundance in everything I am and do in everything I do. Being last in my life's story is no longer an option.&rdquo;</em></p>
						<p class="text-right" style="margin-bottom: 60px;"><em>~ Kinsha Em</em></p>
						<p><em>&ldquo;What I learned today was that in order for my life to begin to look and feel like I want it to, it all starts with my mindset. I must shift my thinking and mindset in order to achieve greatness and all the things I desire to have. In order to play big and go for what it is my soul is here to do, I must master the ability to shift from negative self-talk to powerful self-talk. I must release my old hurts and anger with forgiveness. Forgiveness is what will free up my heart, mind and soul and I must be committed to being non-negotiable in my life. I must be willing to be inconvenienced now to have the breathtaking future I so long for!&rdquo;</em></p>
						<p class="text-right" style="margin-bottom: 60px;"><em>~ Cielo Diaz</em></p>
						<p><em>&ldquo;Stepping out of your comfort zone pays off even when you are so worried you may upset the apple cart with your actions and spoil a relationship. I feel empowered to keep trusting my instincts and being honest in my feedback. I feel really happy and positive - abundant actually!&rdquo;</em></p>
						<p class="text-right" style="margin-bottom: 60px;"><em>~ Lesley Darling</em></p>
						<p><em>&ldquo;This will be a program I go back thru regularly this year to immerse myself in a new way of thinking... to get it in my DNA. On one level I know this, but it's time for me to live it at a greater level. No one holds me back but myself.&rdquo;</em></p>
						<p class="text-right" style="margin-bottom: 60px;"><em>~ Dailah Richardson</em></p>
						<p><em>&ldquo;I learned that I must be my own leader. I must take responsibility over my words, my choices, my feelings, my imperfection and use it all to stand in my power.&rdquo;</em></p>
						<p class="text-right"><em>~ Hila Marcus</em></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div id="total-value" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php
					if($bonuses){
						$value = '$6,791';
					}else{
						$value = '$1,997';
					}
					?>
					<h2>Total Value: <?=$value?></h2>
					<h3><strong>Your Investment:
						</strong>
					</h3>
					<h3><span class="orange">Get started today for 3 easy payments of just $197</span>
					</h3>
					<h3>or one quick payment of just $497, saving you an additional $94</h3>
					<div class="paypalInfo hidden">
					<h3>or Pay ZERO today with a BILL-ME-LATER Option,<br>
						powered by PayPal Credit.</h3><br>
					<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-credit.gif" alt="PayPal Credit" class="img-responsive img-responsive-center"></a><br>
						<p><strong>NEW! 6 Months, No Payments, Zero Interest</strong>
</p>
				<p>With this $497 PayPal Credit option, you get complete and full access to <strong>The Abundant Life Online Program</strong>. You pay nothing today. You have no payments and zero interest for 6 months. See terms at PayPal during checkout for complete details. Our 30-day money-back guarantee applies, as well. By choosing this option, PayPal will pay us today, and PayPal will give you 6 months to pay off your purchase, interest free.<br>
					<br>
				</p>
				<p><strong>IMPORTANT NOTE:</strong></p>
				<p>To access the PayPal Option during check out, you may need to log into PayPal first, or create a PayPal Account - that occurs on the next page. <a href="javascript:void()" class="show-video">See Help Demo Video Here</a> or</p>
				<p>Need Assistance? Call us at (760) 931-9400</p>
				<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-checkout.png" alt="PayPal Checkout" class="img-responsive img-responsive-center btn-paypal" border="0"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->
<form id="orderForm" action="https://wqy87770.infusionsoft.com/AddForms/processFormSecure.jsp" method='Post'>
	<input name="infusion_xid" value="50da801e1fd751a8de20bed93cd1ee31" type="hidden" id="infusion_xid" />
<input name="infusion_type" value="CustomFormSale" type="hidden" id="infusion_type" />
<input name="infusion_name" value="Abundant Life Course" type="hidden" id="infusion_name" />
<input name="CAttempt" type="hidden" id="CAttempt" />
	<input id="NotLegacy" value="true" name="NotLegacy" type="hidden" />
<input name="ProductId" value="783" type="hidden" id="ProductId" />
	
	<?php
	if($bonuses){
	?>
		<input class="hidden" type="checkbox" name="Checkbox0" value="8601" checked>
	<?php
	}
	?>
		<!-- Start Section -->
		<div class="section padding-40-t">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-lg-8">
						<h2 class="blue">Check Out</h2>



						<div class="form-section">
							<div class="form-header">STEP 1: product purchase plan</div>
							<div class="form-body">
								<div class="form-group">
									<div class="radio">
										<label>
                    <input type="radio" name="PurchaseType" value="A" checked>
                   <input id="PayTotal_A" value="497.0" name="PayTotal_A" type="hidden" />
                   <input value="1" name="PlanCount_A" id="PlanCount_A" type="hidden" />
                    <strong>One Single payment of $497</strong></label></div>
								</div>
								<div class="form-group">
									<div class="radio">
										<label>
                    <input type="radio" name="PurchaseType" value="B">
                    <input id="PayTotal_B" value="591.0" name="PayTotal_B" type="hidden" />
<input id="PlanCount_B" value="3" name="PlanCount_B" type="hidden" />
                    <strong>Three Monthly Payments of $197</strong></label></div>
								</div>
					<!--		
				If you would like to use PayPal or PayPal Credit, click the button below:<br>
<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-checkout.png" alt="PayPal Checkout" class="img-responsive btn-paypal-form" border="0"></a>
								-->
								<div class="row">
									<div class="col-md-12 padding-10-t"><img class="lock" src="../images/order/lock.svg"><em>Secure Checkout System</em>
									</div>
								</div>
							</div>
						</div>
						<div class="form-section noPayPal">
							<div class="form-header">STEP 2: billing info</div>
							<div class="form-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0FirstName">First Name</label>
											<input name="Contact0FirstName" type="text" class="form-control" id="Contact0FirstName" placeholder="First Name..." data-error="First Name is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0LastName">Last Name</label>
											<input name="Contact0LastName" type="text" class="form-control" id="Contact0LastName" placeholder="Last Name..." data-error="Last Name is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="Contact0Email">Email</label>
											<input name="Contact0Email" type="text" class="form-control" id="Contact0Email" placeholder="Email..." data-error="Email is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0Phone1">Phone Number</label>
											<input name="Contact0Phone1" type="text" class="form-control" id="Contact0Phone1" placeholder="Phone..." data-error="Phone Number is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0Phone1Type">Phone Type</label>
											<select class="form-control" id="Contact0Phone1Type" name="Contact0Phone1Type">
												<option value="" selected="selected">Select Type...</option>
												<option value="Work">Work</option>
												<option value="Direct Work">Direct Work</option>
												<option value="Home">Home</option>
												<option value="Mobile">Mobile</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0StreetAddress1">Street Address 1</label>
											<input name="Contact0StreetAddress1" type="text" class="form-control" id="Contact0StreetAddress1" placeholder="Billing Address..." data-error="Billing Address is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0StreetAddress2">Street Address 2</label>
											<input name="Contact0StreetAddress2" type="text" class="form-control" id="Contact0StreetAddress2" placeholder="Apt/Suite..."/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0City">City</label>
											<input name="Contact0City" type="text" class="form-control" id="Contact0City" placeholder="City" data-error="City is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0State">State</label><input name="Contact0State" type="text" class="form-control" id="Contact0State" placeholder="State/Province" data-error="State/Province is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0PostalCode">Postal Code</label>
											<input name="Contact0PostalCode" type="text" class="form-control" id="Contact0PostalCode" placeholder="Zip/Postal Code" data-error="Zip/Postal Code is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="Contact0Country">Country</label>
											<select class="form-control" id="Contact0Country" name="Contact0Country" data-error="Country is required." required>
												<option value="">Please select a country</option>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="American Samoa">American Samoa</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antarctica">Antarctica</option>
												<option value="Antigua and Barbuda">Antigua and Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Åand Islands">Åand Islands</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Bouvet Island">Bouvet Island</option>
												<option value="Brazil">Brazil</option>
												<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
												<option value="Brunei Darussalam">Brunei Darussalam</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Canada">Canada</option>
												<option value="Cape Verde">Cape Verde</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Central African Republic">Central African Republic</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Christmas Island">Christmas Island</option>
												<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Congo">Congo</option>
												<option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option>
												<option value="Cook Islands">Cook Islands</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech Republic">Czech Republic</option>
												<option value="CôD'Ivoire">CôD'Ivoire</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican Republic">Dominican Republic</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El Salvador">El Salvador</option>
												<option value="Equatorial Guinea">Equatorial Guinea</option>
												<option value="Eritrea">Eritrea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Falkland Islands">Falkland Islands</option>
												<option value="Faroe Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="French Guiana">French Guiana</option>
												<option value="French Polynesia">French Polynesia</option>
												<option value="French Southern Territories">French Southern Territories</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Georgia">Georgia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guadeloupe">Guadeloupe</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea-Bissau">Guinea-Bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
												<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Isle of Man">Isle of Man</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey">Jersey</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kiribati">Kiribati</option>
												<option value="North Korea">North Korea</option>
												<option value="South Korea">South Korea</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyzstan">Kyrgyzstan</option>
												<option value="Laos">Laos</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libya">Libya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macao">Macao</option>
												<option value="Republic of Macedonia">Republic of Macedonia</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Marshall Islands">Marshall Islands</option>
												<option value="Martinique">Martinique</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mayotte">Mayotte</option>
												<option value="Mexico">Mexico</option>
												<option value="Federated States of Micronesia">Federated States of Micronesia</option>
												<option value="Moldova">Moldova</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Myanmar">Myanmar</option>
												<option value="Namibia">Namibia</option>
												<option value="Nauru">Nauru</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands Antilles">Netherlands Antilles</option>
												<option value="New Caledonia">New Caledonia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Niue">Niue</option>
												<option value="Norfolk Island">Norfolk Island</option>
												<option value="Northern Mariana Islands">Northern Mariana Islands</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palau">Palau</option>
												<option value="Palestine">Palestine</option>
												<option value="Panama">Panama</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines (the)">Philippines (the)</option>
												<option value="Pitcairn">Pitcairn</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Romania">Romania</option>
												<option value="Russian Federation">Russian Federation</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Réion">Réion</option>
												<option value="St. Barthémy">St. Barthémy</option>
												<option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option>
												<option value="St. Kitts And Nevis">St. Kitts And Nevis</option>
												<option value="St. Lucia">St. Lucia</option>
												<option value="St. Martin">St. Martin</option>
												<option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option>
												<option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option>
												<option value="Samoa">Samoa</option>
												<option value="San Marino">San Marino</option>
												<option value="Sao Tome and Principe">Sao Tome and Principe</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="Solomon Islands">Solomon Islands</option>
												<option value="Somalia">Somalia</option>
												<option value="South Africa">South Africa</option>
												<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syrian Arab Republic">Syrian Arab Republic</option>
												<option value="Taiwan">Taiwan</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania">Tanzania</option>
												<option value="Thailand">Thailand</option>
												<option value="Timor-Leste">Timor-Leste</option>
												<option value="Togo">Togo</option>
												<option value="Tokelau">Tokelau</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
												<option value="Tuvalu">Tuvalu</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United Arab Emirates">United Arab Emirates</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="United States" selected>United States</option>
												<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
												<option value="Uruguay">Uruguay</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Vanuatu">Vanuatu</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Viet Nam">Viet Nam</option>
												<option value="Virgin Islands, British">Virgin Islands, British</option>
												<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
												<option value="Wallis and Futuna">Wallis and Futuna</option>
												<option value="Western Sahara">Western Sahara</option>
												<option value="Yemen">Yemen</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-section">
							<div class="form-header noPayPal">STEP 3: Purchase</div>
							<div class="form-header payPalOnly hidden">STEP 3: Purchase</div>
							<div class="form-body">
								<div class="row noPayPal">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="CreditCard0CardNumber">Credit Card Number</label>
											<input name="CreditCard0CardNumber" type="text" class="form-control" id="CreditCard0CardNumber" placeholder="Credit Card Number" data-error="Credit Card is required." required/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="CreditCard0CardType">Card Type</label>
											<select class="form-control" id="CreditCard0CardType" name="CreditCard0CardType" data-error="Credit Card Type is required." required>
												<option value="">Card Type:</option>
												<option value="American Express">American Express</option>
												<option value="Discover">Discover</option>
												<option value="MasterCard">MasterCard</option>
												<option value="Visa">Visa</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>

								<div class="row noPayPal">

									<div class="col-sm-6">
										<div class="form-group">
											<label for="CreditCard0ExpirationMonth">Expiration Month</label>
											<select class="form-control" id="CreditCard0ExpirationMonth" name="CreditCard0ExpirationMonth" data-error="Expiration Month is required." required>
												<option value="" selected>Expiration Month:</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="CreditCard0ExpirationMonth">Expiration Year</label>
											<select class="form-control" id="CreditCard0ExpirationYear" name="CreditCard0ExpirationYear" data-error="Expiration Year is required." required>
												<option value="" selected>Expiration Year:</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												<option value="2027">2027</option>
												<option value="2028">2028</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label for="CreditCard0VerificationCode">Credit Card CVC</label>
                          <input name="CreditCard0VerificationCode" type="text" class="form-control" id="CreditCard0VerificationCode" placeholder="Credit Card CVC" data-error="CVC is required." required/>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
								</div>
								<div class="row">
									<div class="col-md-12 padding-10-t"><img class="lock" src="../images/order/lock.svg"><em>Secure Checkout System</em>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<button class="btn btn-block btn-order">Enroll Now >></button>
									</div>
								</div>
								<div class="row row-no-gutters">
									<div class="col-xs-4 col-sm-3 col-md-2">
										<div class="padding-10-r"><img src="../images/order/guarantee.png" class="img-responsive">
										</div>
									</div>
									<div class="col-xs-8 col-sm-9 col-md-10">
										<strong>30 Days – 100% Money Back Guarantee</strong><br>
										<em>Complete your order today. If, for any reason, you don't absolutely love this program within the next 30 days, we'll give you a full refund.</em>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<h1>&nbsp;</h1>
						<div class="order-summary">
							<h2 class="blue">You're Getting</h2>

							<ul class="num-list2">
								<li>Immediate access to the “Definition of Abundance” introductory video 
								</li>
								<li>11 additional video training modules 
								</li>
								<li>Downloadable worksheets for each module – more than 100 pages of action-based learning 
								</li>
								<?php
								if($bonuses){
								?>
								<li>BONUS #1 - Six Monthly Coaching Calls with Lisa <span class="val">$2,200 Value </span>
								</li>
								<li>BONUS #2 - A private FB group <span class="val">$597 Value </span>
								</li>
								<li>BONUS #3 - A free abundant life program for a friend or family member <span class="val">$1,997 Value </span></li>
								<?php
								}
								?>
							</ul>
						</div>


					</div>
				</div>
			</div>
		</div>
		<!-- End Section -->

	</form>
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


<!-- Exit Modal -->
<div id="modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <div class="paypalInfo">
	<div class="row">
		<div class="col-md-2"><img src="../images/order/WAIT.jpg" alt="Wait" class="img-responsive"></div>
		<div class="col-md-10"><h3 class="red text-center">Get The Abundant Life Online Program with <u>ZERO Money Out of Your Pocket</u>, <span class="word-wrap">Right Now!</span></h3><br>

</div>
	</div>
   
   <p>I’ve just partnered with PayPal to bring you a brand-new option to get access to my program today at no cost to you today.
</p>
   <p>Plus, with this option, you have <strong>no payments</strong> and 6 months to pay off your purchase, <strong>interest free.</strong>
</p>
   <p>When you invest in <em>The Abundant Life Online Program</em> today, using PayPal Credit's bill-me-later option, you get complete and full access to the entire program, including all of the bonuses.
</p>
   
		  <p class="text-center"><a class="btn btn-orange btn-orange-lg" href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank">YES! I Want to Get Started With This Option</a></p><br>
		  <p><a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank">Click here to get started with The Abundant Life Online Program today, with nothing out-of-pocket</a> 
by choosing PayPal’s Credit option.
</p><br>
					<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-credit.gif" alt="PayPal Credit" class="img-responsive img-responsive-center"></a><br>
						<p><strong>NEW! 6 Months, No Payments, Zero Interest</strong>
</p>
				<p>With this $497 PayPal Credit option, you get complete and full access to The Abundant Life Online Program. You pay nothing today. You have no payments and zero interest for 6 months. See terms at PayPal during checkout for complete details. Our 30-day money-back guarantee applies, as well. By choosing this option, PayPal will pay us today, and PayPal will give you 6 months to pay off your purchase, interest free.<br>
					<br>
				</p>
				<p><strong>IMPORTANT NOTE:</strong></p>
				<p>To access the PayPal Option during check out, you may need to log into PayPal first, or create a PayPal Account - that occurs on the next page. <a href="javascript:void()" class="show-video">See Help Demo Video Here</a> or</p>
				<p>Need Assistance? Call us at (760) 931-9400</p>
				<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-checkout.png" alt="PayPal Checkout" class="img-responsive img-responsive-center btn-paypal" border="0"></a>
					</div>
    </div>
  </div>
</div>
</div>
<!-- End Exit Modal -->

<!-- Video Modal -->
<div id="paypalVid" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">How to apply for and use PayPal Credit</h4>
      </div>
      <div class="modal-body">
        <div id="paypalVideo" class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/wX_juZhwQqw?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      	</div>
    </div>
  </div>
</div>
<!-- End Video Modal -->
	




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

	<!-- Form Validation -->
	<script src="../js/validator.js"></script>
	<script>
		$( document ).ready( function () {

			$( '#orderForm' ).validator().on( 'submit', function ( e ) {

				if ( e.isDefaultPrevented() ) {
					// handle the invalid form...


				}
			} );

		} );
	</script>
	<!-- End Form Validation -->




	<script src="../js/viewportchecker.js"></script>
	<script>
		// Now to add the functions once viewport is active
		$( document ).ready( function () {
			$( '.p-stack' ).addClass( "pre-animate" ).viewportChecker( {
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


<!-- Exit Modal -->
<script>
var firstExit = true;
$(function() {
	$('.exit-trigger').mouseleave(
		function(){
			if(firstExit){
				firstExit = false;
				$('#modal').modal({show:true});
			}
		}
	);
	
});	
</script>
<!-- End Exit Modal -->

<!-- Video Modal -->
<script>
$(function() {
	$('.show-video').click(
		function(){
			$('#paypalVid').modal({show:true});
			// auto play
			$('#paypalVideo').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/wX_juZhwQqw?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>');
		}
	);
	
	// reset video on close
	$('#paypalVid').on('hidden.bs.modal', function (e) {
  		$('#paypalVideo').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/wX_juZhwQqw?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>');
	});
	
});	
</script>
<!-- End Vidio Modal -->

<?php
if($bonuses){
?>
<!-- Timer -->
<script src="../js/jquery.countdown.min.js"></script>
<script>
$(function() {
	var seconds = <?=$countDownSec?>
	// start timer
   $('#timer').countdown({
	 date: +(new Date) + seconds * 1000, // convert seconds to miliseconds seconds
	 render: function(data) {
		 var days = this.leadingZeros(data.days, 2);
		 var hours = this.leadingZeros(data.hours, 2);
		 var minutes = this.leadingZeros(data.min, 2);
		 var seconds = this.leadingZeros(data.sec, 2);
		 $('.days').html('<span>'+days.substring(0,1)+'</span>'+'<span>'+days.substring(1)+'</span>');
		 $('.hours').html('<span>'+hours.substring(0,1)+'</span>'+'<span>'+hours.substring(1)+'</span>');
		 $('.min').html('<span>'+minutes.substring(0,1)+'</span>'+'<span>'+minutes.substring(1)+'</span>');
		 $('.sec').html('<span>'+seconds.substring(0,1)+'</span>'+'<span>'+seconds.substring(1)+'</span>');
	 },
	 onEnd: function(data) {
		window.location.reload();
	 }
	});

   // show timer
   $('#timerContainer').removeClass('hidden');
	
});	
</script>
<!-- End Timer -->
<?php
}
?>


<?php
// include tracking code
//include($includePath.'share-plugin.php');
?>
</body>

</html>