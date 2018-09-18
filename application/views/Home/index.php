<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- shortcut icon sectin start -->
	<!-- <link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg') ?>"> -->
	<!-- <link href="http://localhost/CodeIgniter319/assets/image/logo/1.jpg" rel="shortcut icon" type="image/ico" /> -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	<!-- <link href="http://localhost/CodeIgniter319/assets/font/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> -->
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<?= link_tag('assets/materialize/css/materialize.min.css'); ?>
	<!-- custom css file section -->
	<style type="text/css">
		#top_bar{background: #ce8602}
		#electronic_menu{width: 75% !important;}
		#electronic_menu h6{color: orange;}
		#set_ele_menu a{padding: 0px; color: silver; line-height: 20px; }
		#set_ele_menu a:hover{background: white; color: black;}
	</style>

</head>
<body>
	<!-- topbar section start -->
	<div id="top_bar">
		<?= nbs(3); ?><span class="white-text"><span class="fa fa-phone"><?= nbs(3); ?>123456790<?= nbs(7); ?> | <?= nbs(7); ?><span class="fa fa-envelope"><?= nbs(3); ?>email@example.com</span></span></span><span class="right white-text"><span class="fa fa-gift"><?= nbs(3); ?>Gift Card</span><?= nbs(5); ?> | <?= nbs(5); ?>Sell On Shop<?= nbs(5); ?></span>
	</div>

	<!-- topbar section end -->
	<!-- navbar section start  -->
		<nav class="orange">
			<div class="nav-wraper">
				<a href="#!" class="brand-logo left"><?= nbs(3); ?>Shop</a>
				<!-- right menu section start -->
				<ul class="right">
					<li><a href=""><span class="fa fa-shopping-cart"></span><?= nbs(3); ?>Cart</a></li>
					<li><a href=""><span class="fa fa-sign-in"></span><?= nbs(3); ?>Sign Up</a></li>
					<li><a href=""><span class="fa fa-sign-in"></span><?= nbs(3); ?>Login</a></li>
				</ul>
				<!-- right menu section end -->
			</div>
		</nav>
	<!-- navbar section end -->
	<!-- menu bar section start -->
		<nav class="orange" style="height: 35px; line-height: 35px; box-shadow: none; border-top: 1px solid white;">

			<div class="container">
				<div class="nav-wraper">
					<ul class="left">
						<li><a href="#!" class=" dropdown-trigger" data-target="electronic_menu">Electronics</a></li>
						<!--  Electronics dropdown mwnu section start -->
						<ul class="dropdown-content" id="electronic_menu">
							<div class="row"><!-- menu section start -->
								<div class="col l3 m6 s12">
									<h6>Mobiles</h6>
									<ul id="set_ele_menu">
										<a href="">Samsung</a>
										<a href="">Sony</a>
										<a href="">Oppo</a>
										<a href="">Vivo</a>
										<a href="">MI</a>
										<a href="">Apple</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Head Phonw</a>
										<a href="">Power Bank</a>
										<a href="">Screen Guard</a>
										<a href="">Memory Card</a>
										<a href="">Chargers</a>
										<a href="">Gorilla Glass</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m6 s12">
									<h6>Laptops</h6>
									<ul id="set_ele_menu">
										<a href="">Acer</a>
										<a href="">Dell</a>
										<a href="">HP</a>
										<a href="">Lenevo</a>
										<a href="">Sony</a>
										<a href="">Samsung</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/1.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
								</div>
								<div class="col l3 m6 s12">
									<h6>Tablets</h6>
									<ul id="set_ele_menu">
										<a href="">Samsung</a>
										<a href="">Apple</a>
										<a href="">Micromax</a>
										<a href="">Lenevo</a>
										<a href="">Asus</a>
										<a href="">Iball</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computers</h6>
									<ul id="set_ele_menu">
										<a href="">HP</a>
										<a href="">Dell</a>
										<a href="">Asus</a>
										<a href="">Apple</a>
										<a href="">Lenevo</a>
										<a href="">Iball</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Hard Disk</a>
										<a href="">Monitor</a>
										<a href="">Pendrive</a>
										<a href="">Mouse</a>
										<a href="">Keyboard</a>
										<a href="">RAM</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/2.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
								<!-- Electronics menu section end -->
							</div>
						</ul>
						<!-- Electronics dropdown mwnu section end -->
						<li><a href="">Men Fashion</a></li>
						<li><a href="">Women Fashion</a></li>
						<li><a href="">Home & Furniture</a></li>
						<li><a href="">Sports & Stationary</a></li>
						<li><a href="">Daily Needs</a></li>
				
					</ul>
				</div>
			</div>
		</nav>
	<!-- menu bar section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
	
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


	<!-- custom js file include for dropdown menu -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dropdown-trigger').dropdown({
					coverTrigger:false
				});
			});
		</script>
</body>


</html>