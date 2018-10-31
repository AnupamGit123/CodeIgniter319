<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="UTF-8">
	<title>Online Shopping Website</title>
	<!-- shortcut icon sectin start -->
	<!-- <link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg') ?>"> -->
	<!-- <link href="http://localhost/CodeIgniter319/assets/image/logo/1.jpg" rel="shortcut icon" type="image/ico" /> -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	<!-- <link href="http://localhost/CodeIgniter319/assets/font/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> -->
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<?= link_tag('assets/materialize/css/materialize.min.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file section -->
	<style type="text/css">
		#top_bar{background: #ce8602}
		#electronic_menu,#men_fashion_menu, #women_fashion_menu, #home_furniture_menu, #sports_stationary_menu, #daily_needs_menu{width: 75% !important;}
		#men_fashion_menu, #women_fashion_menu, #home_furniture_menu, #sports_stationary_menu, #daily_needs_menu{left: 204px  !important;}
		#electronic_menu h6, #men_fashion_menu h6, #women_fashion_menu h6, #home_furniture_menu h6, #sports_stationary_menu h6, #daily_needs_menu h6{color: orange;}
		#set_ele_menu a{padding: 0px; color: silver; line-height: 20px; }
		#set_ele_menu a:hover{background: white; color: black;}
		#set_footer_link li a{color: white; line-height: 35px;}
		#set_footer_link li a:hover{color: black;text-decoration: underline;}

		#set_social_icon li{display: inline;}
		#set_social_icon li a{color: white; padding: 10px 15px; border: 1px solid white;}

		#set_search{width: 39%; border: 1px solid white; box-shadow: none; margin-left: 18%; height: 42px; padding-left: 2px; background: white; border-radius: 3px;}
		#set_search_button{height: 44px; line-height: 44%; margin-top: -5px; box-shadow: :none; width: 10%; margin-left: -4px; border-radius: 0px; background: #ce8602}

		#set_mobile_search{border:1px solid white; background: white; color: black; border-radius: 3px; box-shadow: none; padding-left: 3px; margin-left: -3px;}

		form{display: inline}
	</style>

</head>
<body>
	<!-- topbar section start -->
	<div id="top_bar" class="hide-on-med-and-down">
		<?= nbs(3); ?><span class="white-text"><span class="fa fa-phone"><?= nbs(3); ?>123456790<?= nbs(7); ?> | <?= nbs(7); ?><span class="fa fa-envelope"><?= nbs(3); ?>email@example.com</span></span></span><span class="right white-text"><span class="fa fa-gift"><?= nbs(3); ?>Gift Card</span><?= nbs(5); ?> | <?= nbs(5); ?>Sell On Shop<?= nbs(5); ?></span>
	</div>

	<!-- topbar section end -->
	<!-- navbar section start  -->
		<nav class="orange">
			<div class="nav-wraper">
				<a href="<?= base_url('index.php/Home/index') ?>" class="brand-logo left"><?= nbs(3); ?>Shop</a>
				<!-- search box section start -->
				<?= form_open(); ?>
				<input type="text" name="" class="hide-on-med-and-down" id="set_search" placeholder="Search Products &  Brands">
				<button type="submit" id="set_search_button" class="btn waves-effect waves-light hide-on-med-and-down">Search</button>
				<?= form_close(); ?>
				<!-- search box section end -->
				<!-- menu button section start -->
				<a href="#!" class="sidenav-trigger right" data-target="mobile_menu"><i class="material-icons">menu</i></a>
				<!-- menu button section end -->
				<!-- mobile menu section start -->
				<ul class="sidenav" id="mobile_menu">
					<li><a href="#!" class="orange white-text">Products Categories</a></li>
					<li><a href="<?= base_url('index.php/Home/mElectronicMenu') ?>">Electronics</a></li>
					<li><a href="<?= base_url('index.php/Home/mMenFashionMenu') ?>">Men Fashion</a></li>
					<li><a href="<?= base_url('index.php/Home/mWomenFashioncMenu') ?>">Women Fashion</a></li>
					<li><a href="<?= base_url('index.php/Home/mHomeFurnitureMenu') ?>">Home & Furniture</a></li>
					<li><a href="<?= base_url('index.php/Home/mSportsStationaryMenu') ?>">Sports & Stationary</a></li>
					<li><a href="<?= base_url('index.php/Home/mDailyNeedsMenu') ?>">Daily Needs</a></li>
				</ul>
				<!-- mobile menu section end -->
				<!-- right menu section start -->
				<ul class="right hide-on-med-and-down">
					<li><a href=""><span class="fa fa-shopping-cart"></span><?= nbs(3); ?>Cart</a></li>
					<li><a href=""><span class="fa fa-sign-in"></span><?= nbs(3); ?>Sign Up</a></li>
					<li><a href=""><span class="fa fa-sign-in"></span><?= nbs(3); ?>Login</a></li>
				</ul>
				<!-- right menu section end -->
			</div>
		</nav>
	<!-- navbar section end -->
	<!-- menu bar section start -->
		<nav class="orange hide-on-med-and-down" style="height: 35px; line-height: 35px; box-shadow: none; border-top: 1px solid white;">

			<div class="container">
				<div class="nav-wraper">
					<ul class="left">
						
						<li><a href="#!" class=" dropdown-trigger" data-target="electronic_menu">Electronics</a></li>
						<!--  Electronics dropdown mwnu section start -->
						<ul class="dropdown-content" id="electronic_menu">
							<div class="row">
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
										<a href="">Head Phone</a>
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
							</div>
						</ul>
						<!-- Electronics dropdown mwnu section end -->
						

						<li><a href="" class="dropdown-trigger" data-target="men_fashion_menu">Men Fashion</a></li>
						<!--  Men Fashion dropdown mwnu section start -->
						<ul class="dropdown-content" id="men_fashion_menu">
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Footwears</h6>
									<ul id="set_ele_menu">
										<a href="">Sports Shoes</a>
										<a href="">Formal Shoes</a>
										<a href="">Office Shoes</a>
										<a href="">Sandals</a>
										<a href="">Boots</a>
										<a href="">Running Shoes</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Top Wears</h6>
									<ul id="set_ele_menu">
										<a href="">T-Shirts</a>
										<a href="">Shirts</a>
										<a href="">Kurtas</a>
										<a href="">Suits</a>
										<a href="">Blazers</a>
										<a href="">Jackets</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m6 s12">
									<h6>Bottom Wears</h6>
									<ul id="set_ele_menu">
										<a href="">Jeans</a>
										<a href="">Trousers</a>
										<a href="">Shorts</a>
										<a href="">Pants</a>
										<a href="">Three Quarters</a>
										<a href="">Under Wears</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/3.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
								</div>
								<div class="col l3 m6 s12">
									<h6>Watches</h6>
									<ul id="set_ele_menu">
										<a href="">Fast Track</a>
										<a href="">Sonata</a>
										<a href="">Titan</a>
										<a href="">Puma</a>
										<a href="">Nike</a>
										<a href="">Smart Watches</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Belts</a>
										<a href="">Wallets</a>
										<a href="">Sun Glasses</a>
										<a href="">Traves</a>
										<a href="">Hats</a>
										<a href="">Caps</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/4.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
							</div>
						</ul>
						<!-- Men Fashion dropdown menu section end -->


						<li><a href="" class="dropdown-trigger" data-target="women_fashion_menu">Women Fashion</a></li>
						<!--  Women Fashion dropdown mwnu section start -->
						<ul class="dropdown-content" id="women_fashion_menu">
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Ethnic Wears</h6>
									<ul id="set_ele_menu">
										<a href="">Sarees</a>
										<a href="">Kurtis</a>
										<a href="">Lehega & Choli</a>
										<a href="">Blouse</a>
										<a href="">Suit & Salwars</a>
										<a href="">Anarkali Suits</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Foot Wears</h6>
									<ul id="set_ele_menu">
										<a href="">Sandals</a>
										<a href="">Heels</a>
										<a href="">Sports Shoes</a>
										<a href="">Slippers</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m6 s12">
									<h6>Beauty</h6>
									<ul id="set_ele_menu">
										<a href="">Make Up</a>
										<a href="">Skin Care</a>
										<a href="">Hair Care</a>
										<a href="">Baths</a>
										<a href="">Perfumes</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/5.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
								</div>
								<div class="col l3 m6 s12">
									<h6>Jewellery</h6>
									<ul id="set_ele_menu">
										<a href="">Artificial Jewellery</a>
										<a href="">Silver Jewellery</a>
										<a href="">Rings</a>
										<a href="">Earrings</a>
										<a href="">Pandent</a>
										<a href="">Necklace</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Hand Bags</a>
										<a href="">Shoulder Bags</a>
										<a href="">Belts</a>
										<a href="">Wallets</a>
										<a href="">Travel</a>
										<a href="">Sun Glasses</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/6.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
							</div>
						</ul>
						<!-- Women Fashion dropdown menu section end -->


						<li><a href="" class="dropdown-trigger" data-target="home_furniture_menu">Home & Furniture</a></li>
						<!--  Home & Furniture dropdown mwnu section start -->
						<ul class="dropdown-content" id="home_furniture_menu">
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Kitchen Storage</h6>
									<ul id="set_ele_menu">
										<a href="">Water Bottles</a>
										<a href="">Lunch Boxes</a>
										<a href="">Tiffen Boxes</a>
										<a href="">Cups</a>
										<a href="">Trays</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Furniture</h6>
									<ul id="set_ele_menu">
										<a href="">Beds</a>
										<a href="">Sofas</a>
										<a href="">Dining Tables</a>
										<a href="">Office Chairs</a>
										<a href="">Chairs</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m6 s12">
									<h6>Home Decor</h6>
									<ul id="set_ele_menu">
										<a href="">Painting</a>
										<a href="">Clock</a>
										<a href="">Posters</a>
										<a href="">Calenders</a>
										<a href="">Photos</a>
										<a href="">Frames</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/7.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
								</div>
								<div class="col l3 m6 s12">
									<h6>Lighting</h6>
									<ul id="set_ele_menu">
										<a href="">LED</a>
										<a href="">CFL</a>
										<a href="">Bulb</a>
										<a href="">Tube Light</a>
										<a href="">Lamp</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/8.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
							</div>
						</ul>
						<!-- Home & Furniture dropdown mwnu section end -->


						<li><a href="" class="dropdown-trigger" data-target="sports_stationary_menu">Sports & Stationary</a></li>
						<!--  Sports & Stationary dropdown mwnu section start -->
						<ul class="dropdown-content" id="sports_stationary_menu">
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Books</h6>
									<ul id="set_ele_menu">
										<a href="">Comics</a>
										<a href="">Business</a>
										<a href="">Children</a>
										<a href="">Lectures</a>
										<a href="">Biography</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Stationary</h6>
									<ul id="set_ele_menu">
										<a href="">Pen</a>
										<a href="">Pencil</a>
										<a href="">Notebooks</a>
										<a href="">Registers</a>
										<a href="">Colors</a>
										<a href="">Scales</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m6 s12">
									<h6>Gaming</h6>
									<ul id="set_ele_menu">
										<a href="">PS 3</a>
										<a href="">PS 4</a>
										<a href="">Xbox</a>
										<a href="">Gaming Console</a>
										<a href="">Controller</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/9.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
								</div>
								<div class="col l3 m6 s12">
									<h6>Sports</h6>
									<ul id="set_ele_menu">
										<a href="">Crickets</a>
										<a href="">Badminton</a>
										<a href="">Tennis</a>
										<a href="">Football</a>
										<a href="">Basketball</a>
										<a href="">Skating</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Fitness</h6>
									<ul id="set_ele_menu">
										<a href="">Dumbles</a>
										<a href="">Home Gym</a>
										<a href="">Cycle</a>
										<a href="">Running Track</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/10.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
							</div>
						</ul>
						<!-- Sports & Stationary dropdown mwnu section end -->


						<li><a href="" class="dropdown-trigger" data-target="daily_needs_menu">Daily Needs</a></li>
						<!--  Daily Needs dropdown mwnu section start -->
						<ul class="dropdown-content" id="daily_needs_menu">
							<div class="row">
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
										<a href="">Head Phone</a>
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
									<img src="<?= base_url('assets/image/menu-image/11.jpg'); ?>" class="responsive-img" alt=""  style="margin-top: 30px;  ">
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
								<div class="col l3 m6 s12"></div>
								<div class="col l3 m6 s12">
									<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" class="responsive-img" alt="" style="margin-top: 10px; height: 120px; ">
								</div>
							</div>
						</ul>
						<!-- Daily Needs dropdown mwnu section end -->
				


					</ul>
				</div>
			</div>
		</nav>
	<!-- menu bar section end -->

	<!-- mobile search box section start -->
	<div class="orange hide-on-med-and-up" style="padding: 10px;">
		<center>
			<?= form_open(); ?>
			<input type="text" name="" id="set_mobile_search" placeholder="Search Products & Brands">
			<?= form_close(); ?>
		</center>
	</div>
	<!-- mobile search box section end -->

	<!-- image slider section start -->
	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#one!"><img src="<?= base_url('assets/image/slider/1.jpg') ?>" class="responsive-img" ></a>
		<a class="carousel-item" href="#one!"><img src="<?= base_url('assets/image/slider/2.jpg') ?>" class="responsive-img" ></a>
	</div>
	<!-- image slider section end -->
	
	<!-- today deal offers section start  -->
	<div class="row">
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s12">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

	</div>
	<!-- today deal offers section end -->
	<!-- electronics banner image section start -->
	<div class="row">
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/3.jpg'); ?>" alt="" class="responsive-img">
		</div>
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/4.jpg'); ?>" alt="" class="responsive-img">
		</div>
	</div>
	<!-- electronics banner image section end -->
	<!-- electronics product section start -->
	<h6>Electronics Products</h6>
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>
	<!-- electronics product section end -->
	<!-- men fashion banner image section start -->
	<div class="row">
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/5.jpg'); ?>" alt="" class="responsive-img">
		</div>
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/6.jpg'); ?>" alt="" class="responsive-img">
		</div>
	</div>
	<!-- men fashion banner image section end -->
	<!-- Men Fashion product section start -->
	<h6>Men Fashion Products</h6>
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Men Fashion product section end -->
	<!-- women fashion banner image section start -->
	<div class="row">
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/7.jpg'); ?>" alt="" class="responsive-img">
		</div>
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/8.jpg'); ?>" alt="" class="responsive-img">
		</div>
	</div>
	<!-- women fashion banner image section end -->
	<!-- women fashion product section start -->
	<h6>Women Fashion Products</h6>
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>
	<!-- women fashion product section end -->
	<!-- home furniture banner image section start -->
	<div class="row">
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/9.jpg'); ?>" alt="" class="responsive-img">
		</div>
		<div class="col l6 m6 s12"><img src="<?= base_url('assets/image/slider/10.jpg'); ?>" alt="" class="responsive-img">
		</div>
	</div>
	<!-- home furniture banner image section end -->
	<!-- home & furniture product section start -->
	<h6>Home & Furniture Products</h6>
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>
	<!-- home & furniture product section end -->

	<!-- sports & stationary product section start -->
	<h6>Sports & Stationary Products</h6>
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/12.jpg'); ?>" alt="" class="responsive-img">
				</div>
				<div class="card-content">
					<p>product title </p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
						<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>
	<!-- sports & stationary product section end -->
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	
	<!-- footer section start -->
	<footer class="page-footer orange">
     	<!-- four col. sectrion start -->
		
			<div class="row">
				<div class="col l3 m6 s12">
					<h5>About Us</h5>
					<p style="text-align: justify;">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
					<p style="text-align: justify;">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
				</div>
				<div class="col l3 m6 s12">
					<h5>Categories</h5>
					<ul id="set_footer_link">
						<li><a href="">Electronics</a></li>
						<li><a href="">Men Fashion</a></li>
						<li><a href="">Women Fashion</a></li>
						<li><a href="">Home & Furniture</a></li>
						<li><a href="">Sports & Stationary</a></li>
						<li><a href="">Daily Needs</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h5>Important Links</h5>
					<ul id="set_footer_link">
						<li><a href="">Home</a></li>
						<li><a href="">Create Account</a></li>
						<li><a href="">Login Account</a></li>
						<li><a href="">Cart</a></li>
						<li><a href="">Offers</a></li>
						<li><a href="<?= base_url('index.php/Seller/index'); ?>">Seller Account</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h5>Developer Address</h5>
					<p><span class="fa fa-map-marker"></span>&nbsp;&nbsp;P-4, Panchayat Vihhar, Luniyawas, <br>&nbsp;&nbsp;&nbsp;&nbsp;Goner Road, Jaipur-302031</p>
					<p><span class="fa fa-phone"></span>&nbsp;&nbsp;+91 - 7742307462, +91 - 7665966526</p>
					<p><span class="fa fa-envelope"></span>&nbsp;&nbsp;deepaktailor2305@gmail.com</p>
					<p><span class="fa fa-globe"></span>&nbsp;&nbsp;www.deesoftservice.com</p>
					<br>
					<!-- social media icon section start -->
					<ul id="set_social_icon">
						<li><a href=""><span class="fa fa-facebook"></span></a></li>
						<li><a href=""><span class="fa fa-instagram"></span></a></li>
						<li><a href=""><span class="fa fa-twitter"></span></a></li>
						<li><a href=""><span class="fa fa-youtube"></span></a></li>
						<li><a href=""><span class="fa fa-google"></span></a></li>
					</ul>
					<!-- social media icon section end -->
				</div>
			</div>
		
     	<!-- four col. section end -->
      <div class="footer-copyright" style="background: #ce8602;">
        <div class="container">
        © 2018 to <?= date('Y') ?> Copyright All Reserved.
        <a class="grey-text text-lighten-4 right" href="#!">Designed By : Deepak Tailor </a>
        </div>
      </div>
    </footer>
	<!-- footer section end -->


	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
	
	
	


	<!-- custom js file include for dropdown menu -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dropdown-trigger').dropdown({
					coverTrigger:false,
					hover: true
				});

				// side nav menu script
				$('.sidenav').sidenav();

				//image slider script start
				$('.carousel.carousel-slider').carousel({
					fullWidth: true,
					indicators: true
				})
			});
		</script>
</body>


</html>