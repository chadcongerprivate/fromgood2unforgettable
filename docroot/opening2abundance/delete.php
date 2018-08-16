
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
<style>
	.modal{
		overflow: visible;
		font-size:17px;
		font-family: 'Roboto', sans-serif;
	}
	#intent{
		position:absolute; 
		top:0px;
		left:0px;
		right:0px;
		left:0px;
		height:40px;
		z-index:10;
	}
	
	.modal h2{
		text-align: center;
		color: rgb(233, 29, 44);
		font-size:38px;
		font-family: 'Roboto', sans-serif;
		margin: 15px 0px;
	}
	.modal a.btn-ep,.modal a.btn-ep:visited,.modal a.btn-ep:hover{
		display: inline-block;
		background-color: #1ea835;
		padding: 15px 30px;
		color: #FFF;
		text-align: center;
		text-decoration: none;
		font-size: 22px;
		text-transform: uppercase;
		margin-bottom: 20px;
	}
	a.btn-ep:hover{
		background-color: rgb(233, 29, 44) !important;
	}
	.text-center{
		text-align: center;
	}
	
	</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>






<div id="exit" class="modal" style="text-center">
  <h2>Before You Go</h2>

<p>Did you see we have a complimentary ticket for you
worth $1,997 to our upcoming online "Enroll More Clients Bootcamp" event?</p>

<p>We are only offering complimentary tickets for a limited time so go grab it now.</p>

<p>Click the button below to learn more about the event and claim your seat. </p>

<div class="text-center">
  <a class="btn-ep" href="http://enrollmoreclientsbootcamp.com/">Yes, I would like to claim my ticket worth $1,997</a>
  </div>
</div>
<div id="intent"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

<script>
$(function() {
	var popped = false;
	
	 $('#intent').mouseenter(
	 	function(){
			if(!popped){
				popped = true;
				 $("#exit").modal({
				  fadeDuration: 500,
				  fadeDelay: 0 // Will fade in 750ms after the overlay finishes.
				});
			}
		}
	 );
});
</script>


</body>

</html>