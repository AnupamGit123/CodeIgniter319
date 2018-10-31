<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create New Listing</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file include -->
	<style type="text/css">
		body{background: rgba(0,0,0,0.05);}
		img{width: 80px;height: 80px !important;border-radius: 100%;border: 2px solid orange;}
	</style>
</head>
<body>
	<!-- body section start -->
	<br>
	<div class="container">
		<!-- electronics category heading section start -->
		<div class="row" style="background: white;border: 1px solid silver;margin-bottom: 4px;">
			<div class="col l4 m6 s12">
				<h5 style="margin-top: 0px;margin-bottom: 0px;padding: 10px;color: orange;">Electronics Category</h5>
			</div>
			<div class="col l8 m6 s12"></div>
		</div>
		<!-- electronics category heading section end -->
		<!-- electronics categories section start -->
		<div class="row" style="border: 1px solid silver;margin-bottom: 0px;padding: 10px;background: white;">
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/1.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="<?= base_url('index.php/Seller/MobileUpload');  ?>" style="color: silver;">Mobiles</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/e2.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Mobile Accessories</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/e3.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Laptops</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/e4.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Tablets</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/e5.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Computers</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/e6.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Computer Accessories</a></h6>
				</center>
			</div>
		</div>
		<!-- electronics categories section end -->
		<br><br>
		<!-- men fashion category heading section start -->
		<div class="row" style="background: white;border: 1px solid silver;margin-bottom: 4px;">
			<div class="col l4 m6 s12">
				<h5 style="margin-top: 0px;margin-bottom: 0px;padding: 10px;color: orange;">Men Fashion Category</h5>
			</div>
			<div class="col l8 m6 s12"></div>
		</div>
		<!-- men fashion category heading section end -->
		<!-- men fashion categories section start -->
		<div class="row" style="border: 1px solid silver;margin-bottom: 0px;padding: 10px;background: white;">
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/mf1.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Footwears</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/mf2.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Topwears</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/mf3.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Bottom Wears</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/mf4.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Watches</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/mf5.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Men Accessories</a></h6>
				</center>
			</div>
		</div>
		<!-- men fashion categories section end -->
		<br><br>
		<!-- women fashion category heading section start -->
		<div class="row" style="background: white;border: 1px solid silver;margin-bottom: 4px;">
			<div class="col l5 m6 s12">
				<h5 style="margin-top: 0px;margin-bottom: 0px;padding: 10px;color: orange;">Women Fashion Category</h5>
			</div>
			<div class="col l7 m6 s12"></div>
		</div>
		<!-- women fashion category heading section end -->
		<!-- women fashion categories section start -->
		<div class="row" style="border: 1px solid silver;margin-bottom: 0px;padding: 10px;background: white;">
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/wf1.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Ethnic Wears</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/wf2.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Footwears</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/wf3.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Beauty Accessories</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/wf4.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Jewellery</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/wf5.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Women Accessories</a></h6>
				</center>
			</div>
		</div>
		<!-- women fashion categories section end -->
		<br><br>
		<!-- home & furnitures category heading section start -->
		<div class="row" style="background: white;border: 1px solid silver;margin-bottom: 4px;">
			<div class="col l5 m6 s12">
				<h5 style="margin-top: 0px;margin-bottom: 0px;padding: 10px;color: orange;">Home & Furnitures Category</h5>
			</div>
			<div class="col l7 m6 s12"></div>
		</div>
		<!-- home & furnitures category heading section end -->
		<!-- home & furnitures categories section start -->
		<div class="row" style="border: 1px solid silver;margin-bottom: 0px;padding: 10px;background: white;">
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/hf1.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Kitchen Storage</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/hf2.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Furniture</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/hf3.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Home Decor</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/hf4.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Lighting</a></h6>
				</center>
			</div>
		</div>
		<!-- home & furnitures categories section end -->
		<br><br>
		<!-- sports & stationary category heading section start -->
		<div class="row" style="background: white;border: 1px solid silver;margin-bottom: 4px;">
			<div class="col l5 m6 s12">
				<h5 style="margin-top: 0px;margin-bottom: 0px;padding: 10px;color: orange;">Sports & Stationary Category</h5>
			</div>
			<div class="col l7 m6 s12"></div>
		</div>
		<!-- sports & stationary category heading section end -->
		<!-- sports & stationary categories section start -->
		<div class="row" style="border: 1px solid silver;margin-bottom: 0px;padding: 10px;background: white;">
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/ss1.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Books</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/ss2.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Stationary</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/ss3.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Gaming</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/ss4.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Sports</a></h6>
				</center>
			</div>
			<div class="col l2 m4 s12">
				<center>
					<img src="<?= base_url('assets/image/menu-image/ss5.jpg') ?>" class="responsive-img">
					<h6 style="margin-top: -2px;"><a href="" style="color: silver;">Fitness</a></h6>
				</center>
			</div>
		</div>
		<!-- sports & stationary categories section end -->
		<br><br>
	</div>
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
</body>
</html>