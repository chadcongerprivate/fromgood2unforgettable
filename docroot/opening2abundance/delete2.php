<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Test
	</title>
	<link rel="shortcut icon" href="https://webinars.motivatingthemasses.com/favicon.png">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

<!-- Start Exit Pop -->
<style>
.cc-exit-pop-cover {
	position: fixed;
	z-index: 99;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	background-color: #000;
	opacity: 0;
	-webkit-transition: opacity .5s;
	/* Safari */
	transition: opacity .5s;
	display: none;
}
.cc-exit-pop-wrap{
	position: fixed;
	text-align: center;
	z-index: 100;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	display: none;
}
.cc-exit-pop {
	overflow: visible;
	font-size: 17px;
	font-family: 'Roboto', sans-serif;
	z-index: 100;
	background: #FFF;
	position: relative;
	padding: 20px;
	width: 500px;
	max-width: 100%;
	margin: 30px auto;
	opacity: 0;
	-webkit-transition: opacity .5s;
	/* Safari */
	transition: opacity .5s;
	display: none;
	box-sizing: border-box;
}

.opacity1 {
	opacity: 1;
}

.opacity8 {
	opacity: .8;
}

#intent {
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	left: 0px;
	height: 40px;
	z-index: 10;
}

.cc-exit-pop h2 {
	text-align: center;
	color: rgb(233, 29, 44);
	font-size: 38px;
	font-family: 'Roboto', sans-serif;
	margin: 15px 0px;
}

.cc-exit-pop a.btn-ep,
.cc-exit-pop a.btn-ep:visited,
.cc-exit-pop a.btn-ep:hover {
	display: inline-block;
	background-color: #1ea835;
	padding: 15px 30px;
	color: #FFF;
	text-align: center;
	text-decoration: none;
	font-size: 22px;
	text-transform: uppercase;
	margin-bottom: 20px;
	line-height: 1.3;
}

a.btn-ep:hover {
	background-color: rgb(233, 29, 44) !important;
}

.text-center {
	text-align: center;
}

.cc-close {
	cursor: pointer;
	float: right;
	font-size: 25px;
	margin-top: -10px;
}
</style>
<!-- End Exit Pop -->

</head>

<body>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>




<!-- Start Exit Pop -->
<div class="cc-exit-pop-wrap">
<div id="exit" class="cc-exit-pop" style="text-center">
	<span class="cc-close">&times;</span>
	<h2>Before You Go</h2>

	<p>Did you see we have a complimentary ticket for you worth $1,997 to our upcoming online "Enroll More Clients Bootcamp" event?</p>

	<p>We are only offering complimentary tickets for a limited time so go grab it now.</p>

	<p>Click the button below to learn more about the event and claim your seat. </p>

	<div class="text-center">
		<a class="btn-ep" href="http://enrollmoreclientsbootcamp.com/" target="_blank">Yes, I would like to claim my ticket worth $1,997</a>
	</div>
</div>
</div>
<div class="cc-exit-pop-cover">
</div>
<div id="intent"></div>

<script>
var popped = false;

function fireExitPop() {
	$( '.cc-exit-pop-cover' ).css( 'display', 'block' );
	$( '.cc-exit-pop' ).css( 'display', 'inline-block' );
	$( '.cc-exit-pop-wrap' ).css( 'display', 'block' );
	setTimeout(
		function () {
			$( '.cc-exit-pop-cover' ).addClass( 'opacity8' );
			$( '.cc-exit-pop' ).addClass( 'opacity1' );
			popped = true;

		}, 100
	);
}

function closeExitPop() {
	$( '.cc-exit-pop-cover' ).removeClass( 'opacity8' );
	$( '.cc-exit-pop' ).removeClass( 'opacity1' );
	setTimeout(
		function () {
			$( '.cc-exit-pop-cover' ).css( 'display', 'none' );
			$( '.cc-exit-pop' ).css( 'display', 'none' );
			$( '.cc-exit-pop-wrap' ).css( 'display', 'none' );
		}, 1500
	);
}
	
$( function () {
	$( '#intent' ).mouseenter(
		function () {
			if ( !popped ) {
				fireExitPop();
			}
		}
	);
	$( '.cc-close, .cc-exit-pop-cover' ).click(
		function () {
			closeExitPop();
		}
	);
} );
</script>
<!-- End Exit Pop -->

</body>

</html>