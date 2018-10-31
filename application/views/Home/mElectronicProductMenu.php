<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="UTF-8">
	<title>Product Menus | Electronics | Men Fashion | Women Fashion | Home & Furniture | Sports & Stationary | Daily Needs</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- custom css file include -->
	<style type="text/css">
		.collapsible{box-shadow: none;}
		.collapsible-body{padding: 0px;}
		.collapsible-header{outline: none; color: silver;}
		#set_links{border-left: 3px solid orange;}
		#set_links li a{color: silver; padding-left: 18px; font-size: 16px; line-height: 35px;}
	</style>
</head>
<body>
	<!-- body section start -->
	<!-- big screen message section start -->
	<div class="hide-on-med-and-down">
	<br><br>
	<h1 class="center-align" style="font-size: 8em; color: silver">
		<span class="fa fa-android"></span>
	</h1>
	<h4 class="center-align red-text">This Page is visible only on Mobile screen.</h4>
	</div>
	<!-- big screen message section end -->
	<!-- electronics title section start -->
	<h5 class="orange white-text section center-align hide-on-med-and-up">Electronics Category</h5>
	<!-- electronics title section end -->
	<ul class="collapsible hide-on-med-and-up">
		<li>
			<div class="collapsible-header">Mobile&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Samsung</a></li>
					<li><a href="">Sony</a></li>
					<li><a href="">Oppo</a></li>
					<li><a href="">Vivo</a></li>
					<li><a href="">MI</a></li>
					<li><a href="">LG</a></li>
					<li><a href="">Micromax</a></li>
					<li><a href="">LAVA</a></li>
					<li><a href="">Microsoft</a></li>
					<li><a href="">Lenevo</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Mobile Accessories&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Head Phone</a></li>
					<li><a href="">Power Bank</a></li>
					<li><a href="">Screen Guard</a></li>
					<li><a href="">Memory Card</a></li>
					<li><a href="">Chargers</a></li>
					<li><a href="">Gorilla Glass</a></li>
					
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Laptops&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Samsung</a></li>
					<li><a href="">Sony</a></li>
					<li><a href="">Acer</a></li>
					<li><a href="">Dell</a></li>
					<li><a href="">HP</a></li>
					<li><a href="">Apple</a></li>
					<li><a href="">IBall</a></li>
					<li><a href="">Toshiba</a></li>
					<li><a href="">Microsoft</a></li>
					<li><a href="">Lenevo</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Tablets&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Samsung</a></li>
					<li><a href="">Sony</a></li>
					<li><a href="">Apple</a></li>
					<li><a href="">Asus</a></li>
					<li><a href="">IBall</a></li>
					<li><a href="">Micromax</a></li>
					<li><a href="">LAVA</a></li>
					<li><a href="">Lenevo</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Computers&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Samsung</a></li>
					<li><a href="">Sony</a></li>
					<li><a href="">Acer</a></li>
					<li><a href="">Dell</a></li>
					<li><a href="">HP</a></li>
					<li><a href="">Apple</a></li>
					<li><a href="">IBall</a></li>
					<li><a href="">Toshiba</a></li>
					<li><a href="">Microsoft</a></li>
					<li><a href="">Lenevo</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Computer Accessories&nbsp;&nbsp; <span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Hard Disk</a></li>
					<li><a href="">Monitor</a></li>
					<li><a href="">Pendrive</a></li>
					<li><a href="">Key Board</a></li>
					<li><a href="">Mouse</a></li>
					<li><a href="">CPU</a></li>
					<li><a href="">Speakers</a></li>
					<li><a href="">USB Cable</a></li>
					<li><a href="">Graphic Card</a></li>
					<li><a href="">Anti Virus</a></li>
				</ul>
			</div>
		</li>
	</ul>
	<!-- body section end -->  

	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

	<!-- custom js file include -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.collapsible').collapsible();
		})
	</script>
</body>
</html>