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
		<nav class="orange" style="height: 35px; line-height: 35px; box-shadow: none;">

			<div class="container">
				<div class="nav-wraper">
					<ul class="left">
						<li><a href="#!" class=" dropdown-trigger" data-target="electronics-menu">Electronics</a></li>
						<!--  Electronics dropdown mwnu section start -->
						<ul class="dropdown-content" id="electronics-menu">
							<li><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
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


	<!-- custom js file include  -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dropdown-trigger').dropdown();
			});
		</script>
</body>


</html>