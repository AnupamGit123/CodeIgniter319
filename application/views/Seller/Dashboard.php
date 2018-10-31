<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller Dashboard</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file include -->
	<style type="text/css">
		#show_user_profile{width: 15% !important;}
		#show_user_profile li a{color: orange;}
		#show_user_profile li a:hover{color: white;background: orange;}
		#left_menu li a,#right_menu li a{color: gray;}
		#left_menu li a:hover,#right_menu li a:hover{background: orange;color: white;}
		#show_order,#show_listings,#show_marketing{width: 15% !important;}
		#set_task li a,#seller_level li a,#set_feedback li a{color: silver;padding-left: 15px;line-height: 30px;display: block;padding: 3px;}
		#selling_tools li a,#set_recent_feedback li a{color: silver;line-height: 30px;padding-left: 15px;display: block;}
	</style>
</head>
<body>
	<!-- body section start -->
	<!-- top bar section start -->
	<nav style="height: 35px;line-height: 35px;" class="orange hide-on-med-and-down">
		<div class="nav-wrapper">
			<!-- left menu section start -->
			<ul class="left">
				<li><a href="#!" class="dropdown-trigger" data-target="show_user_profile"><span class="fa fa-user"></span>&nbsp;Hi User</a></li>
				<!-- dropdown menu section start -->
				<ul class="dropdown-content" id="show_user_profile">
					<li><a href=""><span class="fa fa-picture-o"></span>&nbsp;&nbsp;Company Profile</a></li>
					<li><a href=""><span class="fa fa-cogs"></span>&nbsp;&nbsp;Account Setting</a></li>
					<li><a href="<?= base_url('index.php/Seller/Logout'); ?>"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;Logout</a></li>
				</ul>
				<!-- dropdown menu section end -->
				<li><a href=""><span class="fa fa-phone"></span>&nbsp;Help & contact</a></li>
			</ul>
			<!-- left menu section end -->
			<!-- right menu section start -->
			<ul class="right">
				<li><a href=""><span class="fa fa-cubes"></span>&nbsp;Sell</a></li>
				<li><a href=""><span class="fa fa-bell"></span>&nbsp;Notification</a></li>
				<li><a href=""><span class="fa fa-shopping-cart"></span>&nbsp;Cart</a></li>
			</ul>
			<!-- right menu section end -->
		</div>
	</nav>
	<!-- top bar section end -->
	<!-- website name section start -->
	<h4 style="margin-left: 10px;">Online Shop</h4>
	<!-- website name section end -->
	<h5 style="margin-top: 30px;margin-left: 10px;">Seller Hub&nbsp;&nbsp;<span style="font-size: 18px;"><a href="">profile name</a></span></h5>
	<!-- menu bar section start -->
	<nav style="box-shadow: none;background: white;border-bottom: 2px solid silver;" class="hide-on-med-and-down"> 
		<div class="nav-wrapper">
			<!-- left side menu section start -->
			<ul class="left" id="left_menu">
				<li><a href="" style="background: orange;color: white;">Overview</a></li>
				<li><a href="#show_order" class="dropdown-trigger">Orders</a></li>
				<!-- order dropdown menu section start -->
					<ul class="dropdown-content" id="show_order">
						<li><a href="">All Orders</a></li>
						<li><a href="">Awaiting Payments</a></li>
						<li><a href="">Awaiting Shipments</a></li>
						<li><a href="">Paid & Shipped</a></li>
						<li><a href="">Cancellations</a></li>
						<li><a href="">Returns</a></li>
					</ul>
				<!-- order dropdown menu section end -->
				<li><a href="#show_listings" class="dropdown-trigger">Listings</a></li>
				<!-- listing dropdown menu section start -->
					<ul class="dropdown-content" id="show_listings">
						<li><a href="<?= base_url('index.php/Seller/CreateListing') ?>">Create Listing</a></li>
						<li><a href="">Active</a></li>
						<li><a href="">Unsold</a></li>
					</ul>
				<!-- listing dropdown menu section end -->
				<li><a href="#show_marketing" class="dropdown-trigger" >Marketing</a></li>
				<!-- marketing dropdown menu section start -->
				<ul class="dropdown-content" id="show_marketing">
						<li><a href="">Price Offers</a></li>
						<li><a href="">Quantity Offers</a></li>
						<li><a href="">Create Sale</a></li>
					</ul>
				<!-- marketing dropdown menu section end -->
				<li><a href="">Performance</a></li>
			</ul>
			<!-- left side menu section end -->
			<!-- right side menu section start -->
			<ul class="right" id="right_menu">
				<li><a href="">Messages(0)</a></li>
				<li><a href="">Comments</a></li>
			</ul>
			<!-- right side menu section end -->
		</div>
	</nav>
	<!-- menu bar section end -->
	<br><br>
	<!-- data section start -->
	<div class="row">
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Unread Messages</h6>
				<h5 style="color: silver;padding-left: 3px;">52</h5>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Awaiting Shipment</h6>
				<h5 style="color: silver;padding-left: 3px;">15</h5>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Sales (Last 31 Days)</h6>
				<h5 style="color: silver;padding-left: 3px;">55,000</h5>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Today's Sale</h6>
				<h5 style="color: silver;padding-left: 3px;">3,502</h5>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Today's Feedback</h6>
				<h5 style="color: silver;padding-left: 3px;">52</h5>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;margin-top: 0px;margin-bottom: 0px;font-size: 16px;padding: 5px;color: white;">Seller Level</h6>
				<h5 style="color: silver;padding-left: 3px;">Above Standard</h5>
			</div>
		</div>
	</div>
	<!-- data section end -->
	<!-- task & sales section start -->
	<div class="row">
		<div class="col l4 m4 s12" style="padding: 10px;">
			<div style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Tasks</h6>
				<ul id="set_task">
					<li><a href="">Messages<span class="badge orange white-text">5</span></a></li>
					<li><a href="">Shipments<span class="badge orange white-text">5</span></a></li>
					<li><a href="">Feedback<span class="badge orange white-text">5</span></a></li>
				</ul>
			</div>
			<!-- selling tools start -->
			<div style="border: 1px solid orange;margin-top: 25px;border-radius: 3px;">
				<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Selling Tools</h6>
				<ul id="selling_tools">
					<li><a href="">My Profile(profile name)</a></li>
					<li><a href="">View My Listings</a></li>
					<li><a href="">Manage Profiles(profile name)</a></li>
					<li><a href="">Create Sale</a></li>
					<li><a href="">My Performance</a></li>
				</ul>
			</div>
			<!-- selling tools end -->
			<!-- feedback section start -->
			<div style="border: 1px solid orange;margin-top: 25px;border-radius: 3px;">
				<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Feedbacks (Last 31 Days)</h6>
				<ul id="set_feedback">
					<li><a href="">Positive<span class="right badge orange white-text">65</span></a></li>
					<li><a href="">Negative<span class="right badge orange white-text">65</span></a></li>
				</ul>
				<hr>
				<ul id="set_recent_feedback">
					<li><a href="">one</a></li>
					<li><a href="">one</a></li>
					<li><a href="">one</a></li>
					<li><a href="">one</a></li>
					<li><a href="">one</a></li>
				</ul>
			</div>
			<!-- feedback section end -->
		</div>
		<div class="col l8 m8 s12" style="padding: 10px;">
			<div style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Sales</h6>
				<!-- sale section start -->
				<div class="row">
					<div class="col l3 m3 s6">
						<center>
							<h6 style="color: silver;">Today</h6>
							<h5 style="margin-top: -4px;color: gray"><span class="fa fa-inr"></span>25,000</h5>
						</center>
					</div>
					<div class="col l3 m3 s6">
						<center>
							<h6 style="color: silver;">Last 7 Days</h6>
							<h5 style="margin-top: -4px;color: gray"><span class="fa fa-inr"></span>25,000</h5>
						</center>
					</div>
					<div class="col l3 m3 s6">
						<center>
							<h6 style="color: silver;">Last 31 Days</h6>
							<h5  style="margin-top: -4px;color: gray"><span class="fa fa-inr"></span>25,000</h5>
						</center>
					</div>
					<div class="col l3 m3 s6">
						<center>
							<h6 style="color: silver;">Last 90 Days</h6>
							<h5 style="margin-top: -4px;color: gray"><span class="fa fa-inr"></span>25,000</h5>
						</center>
					</div>
				</div>
				<!-- sale section end -->
				<!-- sale progress bar section start -->
				<div class="row">
					<div class="col l3 m3 s6" style="padding: 10px;">
						<div class="progress" style="height: 10px;background: #ffce75;">  <!-- ffa5008a -->
							<div class="determinate orange" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6" style="padding: 10px;">
						<div class="progress" style="height: 10px;background: #ffce75;">  <!-- ffa5008a -->
							<div class="determinate orange" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6" style="padding: 10px;">
						<div class="progress" style="height: 10px;background: #ffce75;">  <!-- ffa5008a -->
							<div class="determinate orange" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6" style="padding: 10px;">
						<div class="progress" style="height: 10px;background: #ffce75;">  <!-- ffa5008a -->
							<div class="determinate orange" style="width: 50%;"></div>
						</div>
					</div>
				</div>
				<!-- sale progress bar section end -->
			</div>
			<div class="col l6 m6 s12" style="margin-top: 25px;">
				<div style="border: 1px solid orange;border-radius: 3px;">
				<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Seller Level</h6>
				<ul id="seller_level">
					<li><a href="">Current Seller Level<span class="right">Above Standard</span></a></li>
					<li><a href="">Transaction (Last 12 Months)<span class="right">250</span></a></li>
					<li><a href="">Sales (Last 12 Months)<span class="right"><span class="fa fa-inr"></span>25,000</span></a></li>
					<!-- <li><a href=""><span class="right"></span></a></li> -->
					
				</ul>
				</div>
				<div style="border: 1px solid orange; margin-top: 25px;border-radius: 3px;">
					<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Account Summary</h6>
					<h6 style="padding-left: 10px;color: gray;"><b>Invoice</b></h6>
					<p style="padding-left: 10px;color: silver">
						Last Invoice - <span class="fa fa-inr"></span>3,250<br>
						New Invoice - <span class="fa fa-inr"></span> 550
					</p>
					<hr>
					<h6 style="padding-left: 10px;color: gray"><b>Our Balance</b></h6>
					<p style="padding-left: 10px;color: silver;">
						Balance <span class="fa fa-inr"></span> 2,580
					</p>
				</div>
			</div>
			<div class="col l6 m6 s12" style="margin-top: 25px;">
				<div style="border: 1px solid orange;border-radius: 3px;">
					<h6 style="background: orange;padding: 5px;margin-top: 0px;margin-bottom: 0px;color: white;">Listings Offers</h6>
					<h6 style="padding-left: 10px;color: gray"><b>Fixed Price Listings</b></h6>
					<p style="padding-left: 10px;color: silver">
						Start Date - 20-5-2018<br>
						End Date - 25-6-2018
					</p>
					<h6 style="padding-left: 10px;">Used/Left : <a href="">250</a>/250</h6>
					<hr>
					<h6 style="padding-left: 10px;color: gray;"><b>Fixed Price Listings</b></h6>
					<p style="padding-left: 10px;color: silver;">
						Start Date - 20-5-2018<br>
						End Date - 25-6-2018
					</p>
					<h6 style="padding-left: 10px;">Used/Left : <a href="">250</a>/250</h6>
				</div>
			</div>

			<!-- account summary section start -->
			<div class="col l6 m6 s12" style="margin-top: 25px;">
				
			</div>
			<!-- account summary section start -->
		</div>
		<!-- selling tools section start -->
		<div class="col l4 m4 s12" style="padding: 10px;">
			
		</div>
		<!-- selling tools section end -->
	</div>
	<!-- task & sales section end -->
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
	<!-- custom js file include -->
	<script type="text/javascript">
		$(document).ready(function(){
			// dropdown show script start
			$('.dropdown-trigger').dropdown({
				hover:true,
				coverTrigger:false
			});
		});
	</script>
</body>
</html>