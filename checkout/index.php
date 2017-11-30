<?php
/*
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit();
}
*/
// get contactId
if(!empty($_COOKIE['contactId'])){
	$contactId = intval($_COOKIE['contactId']);
}
if(!empty($_GET['contactId'])){
	$contactId = intval($_GET['contactId']);
}
if(isset($contactId)){
	// set cookie for contactId
	$expire =  time()+60*60*24*90; // 90 days
	setcookie("contactId", $contactId, $expire, '/', '.danbradbury.co.uk');
}else{
	$contactId = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>The Systemise and Scale Workshop</title>

<link rel="shortcut icon" href="https://www.danbradbury.co.uk/favicon.ico">

<!-- Start Page Description Meta Tags -->
<meta name="description" content="<?=$shareDescription?>">
<meta property="og:title" content="<?=$shareTitle?>">
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=$shareLink?>">
<meta property="og:image" content="<?=$shareImage?>">
<meta property="og:description" content="<?=$shareDescription?>">
<meta property="og:site_name" content="Dan Bradbury">
<!-- End Page Description Meta Tags -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="../style.css?v=4" rel="stylesheet">
<link href="order-form.css?v=4" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
/* Include Google Tag Manager Code */
$gtm = $_SERVER['DOCUMENT_ROOT'].'/assets/include/code-snippets/google-tag-manager.php'; 
if(file_exists($gtm)){
    include_once($gtm);
}
/* End Include Google Tag Manager Code */
?>
<!-- Start Header -->
<header class="header-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="logo"><img src="../../assets/images/logos/logo.png"></div>
      </div>
    </div>
  </div>
</header>

<!-- End Header -->

<form id="orderForm" action="https://johnassaraf.infusionsoft.com/AddForms/processFormSecure.jsp" method='Post'>
<input id="infusion_xid" value="7de8def53da7ee67013198add940595e" name="infusion_xid" type="hidden" />
<input id="infusion_type" value="CustomFormSale" name="infusion_type" type="hidden" />
<input id="infusion_name" value="$1 - Winning The Game Of Weight Loss Subscription" name="infusion_name" type="hidden" />
<input id="CAttempt" name="CAttempt" type="hidden" />
  <input value="true" name="NotLegacy" id="NotLegacy" type="hidden" />
<input id="ProductId" value="610" name="ProductId" type="hidden" />
<input id="SubscriptionPlanId" value="98" name="SubscriptionPlanId" type="hidden" />
<input id="SubscriptionPlanWait" value="30" name="SubscriptionPlanWait" type="hidden" />
<input id="SubscriptionPlanProductId" value="610" name="SubscriptionPlanProductId" type="hidden" />

  <input type="hidden" id="Contact0_WTGMOriginalContactId" name="Contact0_WTGMOriginalContactId" value="<?=$contactId?>">
  <input type="hidden" id="Contact0_OneTimePassword" name="Contact0_OneTimePassword" value="<?=$oneTimePassword?>">
  <input type="hidden" id="Contact0_WTGMOriginalContactId" name="Contact0_WTGMOriginalContactId" value="<?=$contactId?>">
  <!-- Start Section -->
  <div class="section padding-40-t">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-8">
        <h1>Check Out</h1>
        
          
          
          <div class="form-section">
            <div class="form-header">STEP 1: product purchase plan</div>
            <div class="form-body">
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input id="payFull" type="radio" name="PurchaseType" value="A" checked>
                    <input value="1.0" name="PayTotal_A" id="PayTotal_A" type="hidden" />
                    <input value="1" name="PlanCount_A" id="PlanCount_A" type="hidden" />
                    <strong>One Single payment of &pound;497.00 +VAT</strong></label></div>
                </div>
              <div class="row">
            <div class="col-md-12 padding-10-t"><img class="lock" src="images/lock.svg"><em>Secure Checkout System</em></div>
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
                    <label for="Contact0LastName">Surname</label>
                    <input name="Contact0LastName" type="text" class="form-control" id="Contact0LastName" placeholder="Last Name..."  data-error="Last Name is required." required/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="Contact0Email">Email</label>
                    <input name="Contact0Email" type="text" class="form-control" id="Contact0Email" placeholder="Email..."  data-error="Email is required." required/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Contact0Phone1">Phone Number</label>
                    <input name="Contact0Phone1" type="text" class="form-control" id="Contact0Phone1" placeholder="Phone..."  data-error="Phone Number is required." required/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Contact0Phone1Type">Phone Type</label>
                    <select class="form-control"   id="Contact0Phone1Type" name="Contact0Phone1Type" >
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
                    <input name="Contact0StreetAddress1" type="text" class="form-control" id="Contact0StreetAddress1" placeholder="Billing Address..."  data-error="Billing Address is required." required/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  	<label for="Contact0StreetAddress2">Street Address 2</label>
                  	<input name="Contact0StreetAddress2" type="text" class="form-control" id="Contact0StreetAddress2" placeholder="Apt/Suite..." />
                  </div>
                </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label for="Contact0City">City</label>
                          <input name="Contact0City" type="text" class="form-control" id="Contact0City" placeholder="City"  data-error="City is required." required/>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label for="Contact0State">County</label><input name="Contact0State" type="text" class="form-control" id="Contact0State" placeholder="State/Province"  data-error="State/Province is required." required/>
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
                          <select class="form-control"   id="Contact0Country" name="Contact0Country" data-error="Country is required." required>
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
                            <option value="Philippines">Philippines</option>
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
                            <option value="United Kingdom" selected>United Kingdom</option>
                            <option value="United States">United States</option>
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
                          <select class="form-control"   id="CreditCard0CardType" name="CreditCard0CardType"  data-error="Credit Card Type is required." required>
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
                          <select class="form-control"  id="CreditCard0ExpirationMonth" name="CreditCard0ExpirationMonth"  data-error="Expiration Month is required." required>
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
                          <select class="form-control"   id="CreditCard0ExpirationYear" name="CreditCard0ExpirationYear"  data-error="Expiration Year is required." required>
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
                    </div> <div class="row">
            <div class="col-md-12 padding-10-t"><img class="lock" src="images/lock.svg"><em>Secure Checkout System</em></div>
            </div>
                    <div class="row">
                    <div class="col-sm-12">
                    <button class="btn btn-block btn-order">ORDER NOW!</button>
                    </div>
                    </div>
                    <div class="row row-no-gutters">
                    <div class="col-xs-4 col-sm-3 col-md-2">
                    <div class="padding-10-r"><img class="img-responsive img-responsive-center" src="images/money-back.png" width="500" height="500" alt=""/></div>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10">
                    <strong>30 Days – 100% Money Back Guarantee</strong><br>
<em>We also want to eliminate any stress or hesitation you may feel by taking all the risk for you. Your risk is ZERO. You will get an entire 30 days to experience this life-altering system. If for any reason you’re not satisfied, just let us know. We’ll give you all your money back, no hassle.</em>
                    </div>
                    </div>
            
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
        <h1>&nbsp;</h1>
        <div class="order-summary">
        <h2>Your Order</h2>
        <h3>The Systemise and Scale Workshop
        	</h3>
        <table width="100%">
  <tbody>
    <tr>
      <td>Regular price
</td>
      <td class="text-right"><span class="text-strik-out retail-price">&pound;1,997.00</span></td>
    </tr>
    <tr class="border-bottom">
      <td><strong>Today
      </strong></td>
      <td class="text-right"><strong class="total-today">&pound;497.00</strong></td>
    </tr>
  </tbody>
</table>
        </div>
        
        <div class="order-summary">
        <h2>Your Total</h2>
        <table width="100%">
  <tbody>
    <tr class="border-bottom">
      <td><strong>Subtotal:</strong></td>
      <td class="text-right"><strong class="total-today">&pound;497.00</strong></td>
    </tr>
    <tr class="border-bottom">
    	<td>VAT:</td>
    	<td class="text-right">&pound;99.40</td>
    	</tr>
    <tr>
      <td class="padding-10-t"><span class="text-md"><strong>Total</strong></span></td>
      <td class="text-right padding-10-t"><span class="orange text-md total-today"><strong>&pound;596.40</strong></span></td>
    </tr>
  </tbody>
</table>

    
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
      <div class="col-lg-10 col-lg-offset-1">
      	
      	© Copyright <?=date('Y')?>
      	 Dan Bradbury Ltd | <a href="http://danbradbury.com/privacy-policy-3/" target="_blank">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>
<!-- End Section --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<!-- Include NeuroGym Page Actions --> 
<script src="https://www.danbradbury.co.uk/assets/js/page-actions.js"></script>

<!-- Form Validation --> 
<script src="https://www.danbradbury.co.uk/assets/js/validator.js"></script> 
<script>
$(document).ready(function() {
    $('#orderForm').validator();
	
		$('#orderForm').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
		// handle the invalid form...
		
		// scroll to error
		scrollToSelector('.has-error', 500, 0);
		
		var errors = 0;
		// count errors
		$('.has-error').each(function(index, element) {
            errors++;
        });
		
	  }
	})
});

</script> 
<!-- End Form Validation -->

<?php if(isset($contactId) AND !empty($_GET['tag'])){ ?>
<!-- Start Tag Contact -->
<script type="text/javascript">
 $(function() {
	 // parameters tagId, contactId
	 infTag(<?=intval($_GET['tag'])?>, <?=$contactId?>);
 });
 </script>
 <!-- End Tag Contact -->
 <?php } ?>
</body>
</html>