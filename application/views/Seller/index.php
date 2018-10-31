<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Shop | Seller Account</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file include -->
	<style type="text/css">
		
		#seller_username{width: 15%;border: 1px solid white;height: 30px;margin-left: 58%;box-shadow: none; font-size: 13px; padding-left: 2px;color: white;}
		#seller_password{width: 15%;border: 1px solid white;height: 30px;margin-left: 1px;box-shadow: none;font-size: 13px;padding-left: 2px;color: white}
		button{height: 30px;line-height: 30px;}
		#company_name{border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 3px;height: 35px;margin-bottom: 25px;}
		#email{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		#password{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		#mobile_no{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		#pincode{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		#panno{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		#gstno{width: 48%;border: 1px solid silver;box-shadow: none;border-radius: 3px;padding-left: 2px;height: 35px;margin-bottom: 25px;}
		p{width: 50%;text-align: justify;}
		.box{width: 10%;height: 2px;background: orange;margin-top: 20px;margin-bottom: 20px;}

		#mobile_username,#mobile_password{box-shadow: none;border-bottom: 1px solid orange;}
		#mobile_username + label,#mobile_password + label{color: orange;}
		
		/*hide number input type arrow*/
		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0;
		}
		/* media query section start */
		@media only screen and (max-width: 800px){ 
			p{width: 100%;}
			#email{width: 100%;}
			#password{width: 100%;margin-left: -1px;}
			#mobile_no{width: 100%;}
			#pincode{width: 100%;margin-left: -1px;}
			#panno{width: 100%;}
			#gstno{width: 100%;margin-left: -1px;}
		}

	</style>
</head>
<body>
	<!-- body section start -->
	<!-- top bar section start -->
	<nav class="orange" style="box-shadow: none;">
	 	<div class="nav-wrapper">
	 		<a href="" class="brand-logo left">&nbsp;Seller Account</a>
	 		<?= form_open("Seller/Login"); ?>	
	 		<input type="text" name="seller_username" id="seller_username" class="hide-on-med-and-down" placeholder="Username" required>
	 		<input type="password" name="seller_password" id="seller_password" class="hide-on-med-and-down" placeholder="Password" required>
	 		<button type="submit" class="btn waves-effect waves-light hide-on-med-and-down" style="background: black; line-height: 32px;margin-top: -3px; height: 32px;">Login</button>
	 		<?= form_close(); ?>
	 	</div>
	 </nav>	 
	<!-- top bar section end -->
	<!-- mobile screen login form start -->
	<div class="hide-on-med-and-up" style="padding: 15px;">
		<div class="input-field">
		<input type="text" name="" id="mobile_username">
		<label for="mobile_username">Username</label>
		</div>
		<div class="input-field">
		<input type="password" name="" id="mobile_password">
		<label for="mobile_password">Password</label>
		</div>
		<button type="submit" class="btn waves-effect waves-light" style="background: orange;">Login</button>
	</div>
	<!-- mobile screen login form end -->
	<!-- register section form start -->
	<div class="row" style="background: rgba(0,0,0,0.05);">
		<div class="col l8 m8 s12" style="padding: 15px;">
			<h5 style="margin-top: 5%;color: silver"><b>Start <span class="orange-text">Selling</span> on My Online <span class="orange-text"> Shop</span>.</b></h5>
			<div class="box"></div>
			<p style="color: silver;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Phasellus arcu magna, feugiat vel ante quis, pellentesque vehicula nisl. Aenean ac mollis ante. Vestibulum ullamcorper aliquam nunc, vel tempor ligula finibus in. </p>
			<p style="color: silver;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Phasellus arcu magna, feugiat vel ante quis, pellentesque vehicula nisl. Aenean ac mollis ante. Vestibulum ullamcorper aliquam nunc, vel tempor ligula finibus in. </p>
			<br>
			<button type="button" class="btn-large waves-effect waves-light" style="background: orange">Sell on My Shop</button>
			<br><br><br><br>
		</div>
		<div class="col l4 m4 s12 white" style="padding: 15px;">
			<?= form_open("Seller/CreateAccount"); ?>
			<h6 class="center-align" style="margin-bottom: 20px;margin-top: 40px;">Register Now</h6>
			<input type="text" name="company_name" id="company_name" placeholder="Company Name" required>
			<input type="email" name="email" id="email" placeholder="Email-ID" required>
			<input type="password" name="password" id="password" placeholder="Password" required>
			<input type="number" name="mobile_no" id="mobile_no" placeholder="Mobile No." required>
			<input type="number" name="pincode" id="pincode" placeholder="Pin Code" required>
			<input type="text" name="panno" id="panno" placeholder="Pan No." required>
			<input type="text" name="gstno" id="gstno" placeholder="GST No." required>
			<button type="submit" class="btn waves-effect waves-light" id="btn_submit" style="background: black;margin-bottom: 30px;">Create Account</button>
			<?= form_close(); ?>
		</div>
	</div>
	<!-- register section form end -->
	<!-- users section start -->
	<div class="row">
		<h3 class="center-align" style="color: silver;">Buyer & Seller<span class="orange-text"> Accounts</span></h3>
		<div class="box" style="margin: 0 auto;"></div>
		<div class="col l6 m6 s12">
			<h1 class="center-align"><span class="fa fa-users" style="padding: 40px;border: 5px solid silver;border-radius: 100%;color: orange;"></span></h1>
			<h4 class="center-align orange-text">15,000 Buyers</h4>
			<h6 class="center-align" style="color: silver;">15,000 Buyer Account in My Online Shop.</h6>
			<br>
		</div>
		<div class="col l6 m6 s12">
			<h1 class="center-align"><span class="fa fa-users" style="padding: 40px;border: 5px solid silver;border-radius: 100%;color: orange;"></span></h1>
			<h4 class="center-align orange-text">15,000 Sellers</h4>
			<h6 class="center-align" style="color: silver;">15,000 Seller Account in My Online Shop.</h6>
			<br>
		</div>
	</div>
	<!-- users section end -->
	<!-- business section start -->
	

	<div class="col l6 m6 s12 orange">
		<h1 class="center-align" style="margin-top: 10%;"><span class="fa fa-handshake-o" style="padding: 40px;border: 5px solid white;border-radius: 100%;color: white;"></span></h1>
		<h5 class="center-align" style="margin-bottom: 10%;color: white">Get Payments</h5>
	</div>
	<!-- business section end -->
	<!-- recent seller section start -->
	<div class="container">
		<h4 class="center-align" style="margin-top: 5%;margin-bottom: 2%;color: silver;"><span class="orange-text">Recent</span> Seller Accounts</h4>
		<div class="box" style="margin: 0 auto;margin-bottom: 30px;"></div>
		<div class="carousel carousel-slider">
			<a href="#one" class="carousel-item">
				<div class="row">
					<div class="col l6 m6 s6">
						<div class="card">
							<div class="card-image">
								<img src="<?= base_url('assets/image/menu-image/12.jpg') ?>" class="responsive-img" alt="">
							</div>
							<div class="card-content">
								<span class="title">seller name</span>
								<p>seller address</p>
							</div>
						</div>
					</div>
					<div class="col l6 m6 s6">
						<div class="card">
							<div class="card-image">
								<img src="<?= base_url('assets/image/menu-image/12.jpg') ?>" class="responsive-img" alt="">
							</div>
							<div class="card-content">
								<span class="title">seller name</span>
								<p>seller address</p>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="#one" class="carousel-item">
				<div class="row">
					<div class="col l6 m6 s6">
						<div class="card">
							<div class="card-image">
								<img src="<?= base_url('assets/image/menu-image/12.jpg') ?>" class="responsive-img" alt="">
							</div>
							<div class="card-content">
								<span class="title">seller name</span>
								<p>seller address</p>
							</div>
						</div>
					</div>
					<div class="col l6 m6 s6">
						<div class="card">
							<div class="card-image">
								<img src="<?= base_url('assets/image/menu-image/12.jpg') ?>" class="responsive-img" alt="">
							</div>
							<div class="card-content">
								<span class="title">seller name</span>
								<p>seller address</p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		
	</div>
	<!-- recent seller section end -->

	<!-- start selling message section start -->
	<div class="orange">
		<h4 class="center-align" style="color: white;padding-top: 5%;padding-bottom: 2%;">Start Your Bussiness with My Online Shop</h4>
		<center><a href="<?= base_url('index.php/Seller/index'); ?>" class="btn-large waves-effect waves-dark" style="margin-bottom: 5%;color: orange;background: white;" >Start Selling&nbsp;&nbsp;<span class="fa fa-angle-right"></span><span class="fa fa-angle-right"></span></a></center>
	</div>
	<!-- start selling message section end -->

	<!-- body section end --> 

	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>

	<!-- custom js file include -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel-slider').carousel({
				indicators:true
			});

			// email validation script start
			function ValidateEmail(email) {
				var expr = 	/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\-)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
				return expr.test(email);
			}

			$("#email").keyup(function() {
				if (!ValidateEmail($("#email").val())) {
					$('#btn_submit').prop('disabled',true);
				}
				else {
					$('#btn_submit').prop('disabled',false);
				}
			});

			// mobile no validation script start
			$('#mobile_no').keyup(function(){
				var mobile_no = $('#mobile_no').val();
				var mobile_no_len = $('#mobile_no').val().length;
				if(mobile_no > 0){
					if (mobile_no_len == 10){
						$('#btn_submit').prop('disabled',false);
					}
					else{
						$('#btn_submit').prop('disabled',true);
					}
				}
				else{
					$('#btn_submit').prop('disabled',true);
				}
			});

			// pincode validation script start
			$('#pincode').keyup(function(){
				var pincode = $('#pincode').val();
				var pincode_len = $('#pincode').val().length;
				if(pincode > 0){
					if (pincode_len == 6){
						$('#btn_submit').prop('disabled',false);
					}
					else{
						$('#btn_submit').prop('disabled',true);
					}
				}
				else{
					$('#btn_submit').prop('disabled',true);
				}
			});

			// panno validation script start
			$('#panno').keyup(function(){
				var panno = $('#panno').val();
				var panno_len = $('#panno').val().length;
				
					if (panno_len == 10){
						$('#btn_submit').prop('disabled',false);
					}
					else{
						$('#btn_submit').prop('disabled',true);
					}
				
			});

			// gstno validation script start
			$('#gstno').keyup(function(){
				var gstno = $('#gstno').val();
				var gstno_len = $('#gstno').val().length;
				if(gstno > 0){
					if (gstno_len == 12){
						$('#btn_submit').prop('disabled',false);
					}
					else{
						$('#btn_submit').prop('disabled',true);
					}
				}
				else{
					$('#btn_submit').prop('disabled',true);
				}
			});

		});
		
	</script>
	
</body>
</html>