<?php
include('../include/webinar-include.php');

$countDownSec = strtotime('12:00am tomorrow', $now) - $now;
$affPromo = strtotime('12:00am April 18 2018', $now);

if($now < $affPromo){
	$countDownSec = $affPromo - $now;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Speak for Ultimate Impact and Profit | Order</title>

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
					  <div class="timer-simple">
						  This Offer Expires In:<br><span class="hours"><span>0</span><span>0</span> </span> hours, <span class="min"><span>0</span><span>0</span>  </span> min, <span class="sec"><span>0</span><span>0</span>  </span> sec
					</div>
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
      			<span class="orange"><i style="font-size: 30px;" class="fa fa-check orange" aria-hidden="true"></i>
Yes, Lisa!</span> I’m ready to become an unforgettable speaker.</h1>
					
<h4><a href="#" class=" btn-scroll">Please give me instant access</a> to your <em><strong>Speak for Ultimate Impact and Profit.</strong></em></h4>

						<div class="white-text-box">
							Speak for Ultimate Impact and Profit is a step-by-step system for transforming yourself from a good speaker to an unforgettable speaker – and building the CEO muscle needed to create a thriving, growing, profitable speaking business.
						</div>
						<p class="orange"><strong>You’ll discover how to:</strong>
						</p>
						<ul class="num-list">
							<li>Easily find and get hired to speak by organizations whose missions can be furthered by your message.
							</li>
							<li>Make a much bigger impact with your message while you are traveling the country - or world - serving the people you meet in a much deeper way.
							</li>
							<li>Quickly phase out free speaking engagements that get you applause, but no clients.
							</li>
							<li>Feel comfortable and confident asking for your full fee – and referrals to other potential clients.
							</li>
							<li>Create a balanced, thriving business that supports the lifestyle you desire without having to “try harder” to do it.
							</li>
							<li>Teach you proven, in-depth techniques to up-level your speeches from good to unforgettable.
							</li>
							<li>Build a solid foundation for a sustainable speaking business, so you can deliver your message and still have a life.
							</li>
							<li>Massively increase the number of speaking engagements and referrals you receive.
							</li>
							<li>Expand your personal capacity by developing the mindset of a world-class speaker.
							</li>
							<li>And much more!
							</li>
						</ul>
						<button class="btn btn-orange btn-orange-lg btn-orange-lg-big-text btn-scroll btn-block">Enroll Now >></button>
					</div>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs">
					<img class="img-overlap" src="../images/registration/lisa-standing.png" alt="Lisa Nichols">
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
					<h2 class="text-center purple">Here's what's included in this 13-week program … so you can easily get started today:</h2>
					<div class="p-stack">
						<h3>A <span class="red">FREE General Admission Ticket</span> To My Speak &amp; Write Event!</h3>
						<h4>$997 Value</h4>
						<p>When you purchase Speak For Ultimate Impact & Profit you will get a FREE General Admission Ticket to THE Premier Conference for Speakers Authors & Coaches, Speak & Write. <em>*Valid one calendar year post purchase*</em></p>
					</div>
					<div class="p-stack">
						<h3>Immediate access to the “What You Need to Succeed” introductory video</h3>
						<h4>$297 Value</h4>
						<p>which sets up the course. Often called the “Wikipedia of Speak for Ultimate Impact and Profit,” this video gives you answers to those “What do I have to do to really make it as a speaker?” moments so you can build a solid foundation and winning platform as a speaker.</p>
					</div>
					<div class="p-stack">
						<h3>13 additional video training modules</h3>
						<h4>$2,700 Value</h4>
						<p>which walk you through the process for building your business foundation on cement, not sinking sand.</p>
						<div class="topics">
							<p class="text-center"><strong>Topics include:
						</strong>
							</p>
							<ul class="num-list2">
								<li>The 4 types of speakers – and which one you are </li>
								<li>The difference between “task” and “maintenance” … and how paying attention to both helps you double your impact in a room </li>
								<li>Developing the foundation for your core message </li>
								<li>5 steps to produce powerful messages </li>
								<li>How to elevate the impact of your message </li>
								<li>The Dip Theory … and how to use it to get your audience to stick to you like glue </li>
								<li>The “Me, We, You” Audience Connection formula – an invisible technique that makes your audience feel like part of your tribe </li>
								<li>Feeding your audience … so they want more of you – and more of your content </li>
								<li>How to use the SNAAP effect to make every networking experience 5 times more effective </li>
								<li>The secret to multiplying your speaking gigs x 3 by satisfying your current clients, while you're simultaneously engaging your next clients </li>
								<li>Proven strategies for growing your database organically – without relying on expensive, time-intensive tools like pay-per-click advertising </li>
								<li>Getting yourself booked and building a sustainable business model </li>
								<li>Developing the mindset of a world-class speaker and growing your business by expanding your mental and emotional capacity </li>
								<li>The distinct difference between telling a great story and showing a great story – and how you can easily master the art of story </li>
								<p>&nbsp;</p>
							</ul>
						</div>
					</div>
					<div class="p-stack">
						<h3>Downloadable worksheets for each module</h3>
						<h4>$1,000 Value</h4>
						<p>which will help you deepen your mastery of the content and begin to apply the lessons to your speeches and speaking business</p>
					</div>
					<div class="p-stack">
						<h3>Formula Frameworks...</h3>
						<h4>$500 Value</h4>
						<p>two resources to help speed and ease the process of creating your unforgettable message. You’ll get the Powerful Message Producer, which provides the framework for delivering a powerful message … and an outline for using the “Me-We-You” formula to connect with your audience.</p>
					</div>
					<div class="p-stack">
						<h3>Time-Proven, Fill-in-the-Blank Scripts …</h3>
						<h4>$2,000 Value</h4>
						<p>The Dip Theory Script … the “Book me now” Script to secure more speaking engagements … a script for creating a stronger SNAAP message to use when networking … and the “Are You My Student?” script to help find new clients in your audience.</p>
					</div>
					<div class="p-stack">
						<h3>“Do It Like a Pro” Checklists …</h3>
						<h4>$300 Value</h4>
						<p>my Platinum Video and Still Shot List to up-level your brand … and my checklist on how to set up and deliver a training.</p>
					</div>
					<div class="p-stack">
						<h3>“Here’s How I Did It” Sample Agreements …</h3>
						<h4>$2,000 Value</h4>
						<p>including a sample speaker agreement and a sample joint venture partner agreement.</p>
					</div>
					<div class="p-stack">
						<h3>“Birth Your Best-Selling Book” Resources …</h3>
						<h4>$1,000 Value</h4>
						<p>including a copy of the book proposal I used to get the Chicken Soup for the African American Soul contract … and my step-by-step guide to turning your books into best-sellers. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Start Section -->
	<div class="section" id="bonus">
		<div class="container">
			<div class="row">
				<div class="col-md-6">

				</div>
				<div class="col-md-6 slide-right-on-scroll">
					<h2 class="orange">Your Special Bonus Gift…
</h2>
					<img src="../images/order/banner.png" class="img-responsive">

					<p>A FREE ticket to <strong>Speak and Write to Make Millions <br>
				(A $997 value)</strong>
					</p>
					<p>During this 3-day live event, you’ll join hundreds of aspiring and seasoned entrepreneurs from all around the world for THE premier conference for speakers and authors.
					</p>

					<ul class="num-list">
						<li>Discover the exact, step-by-step system Lisa used to grow her speaking business into a multi-million-dollar brand.
						</li>
						<li>Receive the exact proposal that garnered Lisa the “Chicken Soup for the Soul” contract.
						</li>
						<li>Learn how Lisa leveraged joint venture partners to land a 7-figure book deal.
						</li>
						<li>Master the art of storytelling to reach and inspire thousands with your unique story and message.
						</li>
					</ul>
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
					<p>I wholeheartedly believe that <strong>Speak for Ultimate Impact and Profit</strong> will work for you. It’s the process that I used to transform myself from a good speaker to an unforgettable speaker … and to build a solid foundation on which I built a multi-million-dollar business as a speaker and author.
					</p>
					<p>After 30 full days of working with the material in <strong>Speak for Ultimate Impact and Profit:</strong>
					</p>
					<ul>
						<li>If you don’t discover how to create a more impactful message in these 30 short days
						</li>
						<li>If you don’t learn practical ways to grow your database, win more referrals and book more speaking gigs
						</li>
						<li>If you’re dissatisfied for any reason (even the way the course is designed)
						</li>
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
	<div id="total-value" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Total Value: $9,794
</h2>
					<h3><strong>Your Investment:
						</strong>
					</h3>
					<h3>Get started today for <span class="orange">3 easy payments of just $197</span>
					</h3>
					<h3>or <span class="orange">one quick payment of just $497</span>, saving you an additional $94</h3>
					<div class="paypalInfo hidden">
					<h3>or Pay ZERO today with a BILL-ME-LATER Option,<br>
						powered by PayPal Credit.</h3><br>
					<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-credit.gif" alt="PayPal Credit" class="img-responsive img-responsive-center"></a><br>
						<p><strong>NEW! 6 Months, No Payments, Zero Interest</strong>
</p>
				<p>With this $497 PayPal Credit option, you get complete and full access to Speak for Ultimate Impact and Profit plus the bonus ticket to Lisa’s Speak and Write to Make Millions live 3-day event. You pay nothing today. You have no payments and zero interest for 6 months. See terms at PayPal during checkout for complete details. Our 30-day money-back guarantee applies, as well. By choosing this option, PayPal will pay us today, and PayPal will give you 6 months to pay off your purchase, interest free.<br>
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
		<input id="infusion_xid" value="405e123e1b0dcac499aaa1602116e04c" name="infusion_xid" type="hidden" />
<input id="infusion_type" value="CustomFormSale" name="infusion_type" type="hidden" />
<input id="infusion_name" value="Speak for Ultimate Impact and Profit" name="infusion_name" type="hidden" />
<input id="CAttempt" name="CAttempt" type="hidden" />
	<input id="NotLegacy" value="true" name="NotLegacy" type="hidden" />
	<input id="ProductId" value="929" name="ProductId" type="hidden" />
	
		<!-- Start Section -->
		<div class="section padding-40-t">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-lg-8">
						<h2 class="purple">Check Out</h2>



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
							<h2 class="purple">You're Getting</h2>

							<ul class="num-list2">
								<li>A FREE General Admission Ticket To My Speak &amp; Write Event! <span class="val">$997 Value</span>
								</li>
								<li>Immediate access to the “What You Need to Succeed” introductory video <span class="val">$297 Value</span>
								</li>
								<li>13 video training modules <span class="val">$2,700 Value </span>
								</li>
								<li>Downloadable worksheets for each module <span class="val">$1,000 Value </span>
								</li>
								<li>Formula Frameworks... <span class="val">$500 Value </span>
								</li>
								<li>Time-Proven, Fill-in-the-Blank Scripts … <span class="val">$2,000 Value </span>
								</li>
								<li>“Do It Like a Pro” Checklists … <span class="val">$300 Value </span>
								</li>
								<li>“Here’s How I Did It” Sample Agreements … <span class="val">$2,000 Value </span>
								</li>
								<li>“Birth Your Best-Selling Book” Resources … <span class="val">$1,000 Value </span>
								</li>
								<li>A FREE ticket to Speak and Write to Make Millions <span class="val">$997 value</span>
								</li>
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
				

					<div class="social-holder"><a id="learn">
						</a>
					

						<a href="https://www.facebook.com/LisaNicholsFanPage"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://twitter.com/2motivate"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/company-beta/3675653/?pathWildcard=3675653"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<div class="copyright">
						Copyright © 2010-2017 Motivating The Masses. All Rights Reserved.
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
		<div class="col-md-10"><h3 class="red text-center">Get Speak for Ultimate Impact and Profit with <u>ZERO Money Out of Your Pocket</u>, <span class="word-wrap">Right Now!</span></h3><br>

</div>
	</div>
   
   <p>I’ve just partnered with PayPal to bring you a brand-new option to get access to my program today at no cost to you today.
</p>
   <p>Plus, with this option, you have <strong>no payments</strong> and 6 months to pay off your purchase, <strong>interest free.</strong>
</p>
   <p>When you invest in <em>Speak for Ultimate Impact and Profit</em> today, using PayPal Credit's bill-me-later option, you get complete and full access to the entire program, including all of the bonuses.
</p>
   
		  <p class="text-center"><a class="btn btn-orange btn-orange-lg" href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank">YES! I Want to Get Started With This Option</a></p><br>
		  <p><a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank">Click here to get started with Speak for Ultimate Impact and Profit today, with nothing out-of-pocket</a> 
by choosing PayPal’s Credit option.
</p><br>
					<a href="https://wqy87770.infusionsoft.com/app/manageCart/processBundle?checkoutMethod=singleStep&productId=929&productQuantity=1&styleThemeId=131" target="_blank"><img src="../images/order/paypal-credit.gif" alt="PayPal Credit" class="img-responsive img-responsive-center"></a><br>
						<p><strong>NEW! 6 Months, No Payments, Zero Interest</strong>
</p>
				<p>With this $497 PayPal Credit option, you get complete and full access to Speak for Ultimate Impact and Profit plus the bonus ticket to Lisa’s Speak and Write to Make Millions live 3-day event. You pay nothing today. You have no payments and zero interest for 6 months. See terms at PayPal during checkout for complete details. Our 30-day money-back guarantee applies, as well. By choosing this option, PayPal will pay us today, and PayPal will give you 6 months to pay off your purchase, interest free.<br>
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
		window.location = './expired/';
	 }
	});

   // show timer
   $('#timerContainer').removeClass('hidden');
	
});	
</script>
<!-- End Timer -->
<?php
// include tracking code
include($includePath.'share-plugin.php');
?>
</body>

</html>