<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel | Online Shopping Website</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- custom css file include -->
	<style type="text/css">
		#Show_Product_Modal,#Show_Brand_Modal{outline: none;width: 30%;}
		#product_name,#brand_name{border-bottom: 1px solid #453a50;box-shadow: none;}
		#product_name:focus + label,#brand_name:focus + label{color: #453a50;}
		select{display: block;border: 1px solid silver;outline: none;}
	</style>
</head>
<body>
	<!-- body section start -->
	<!-- topbar section start -->
	<nav style="background: #453a50;height: 35px;line-height: 35px;">
		<div class="nav-wrapper">
			<!-- right side menu section start -->
			<ul class="right">
				<li><a href=""><span class="fa fa-envelope"></span>&nbsp;&nbsp;Message</a></li>
				<li><a href=""><span class="fa fa-cogs"></span>&nbsp;&nbsp;Settings</a></li>
				<li><a href=""><span class="fa fa-user"></span>&nbsp;&nbsp;Profile</a></li>
			</ul>
			<!-- right side menu section end -->
		</div>
	</nav>
	<!-- topbar section end -->
	<!-- title section start -->
	<h5 style="margin-left: 15px;color: #453a50;margin-top: 20px;">Admin Control</h5>
	<p style="margin-left: 15px;margin-top: -8px;color: silver;margin-bottom: 20px;">Welcome to Online Shopping Dashboard.</p>
	<!-- title section end -->
	<!-- menu bar section start -->
	<nav>
		<div class="nav-wrapper">
			<!-- left side menu section start -->
			<ul class="left">
				<li><a href="">Overview</a></li>
				<li><a href="#!" class="modal-trigger" data-target="Show_Product_Modal">Products</a></li>
				<li><a href="#!" class="modal-trigger" data-target="Show_Brand_Modal">Brand</a></li>
				<li><a href="">one</a></li>
				<li><a href="">one</a></li>
				<li><a href="">one</a></li>
				<li><a href="">one</a></li>
			</ul>
			<!-- left side menu section end -->
		</div>
	</nav>
	<!-- item modal section start -->
	<div class="modal" id="Show_Product_Modal">
		<div class="modal-content" style="border-top: 3px solid #453a50;">
			<h6 style="color: silver;"><span class="fa fa-cubes" style="color: #453a50;"></span>&nbsp;Add Item<span class="right modal-close" style="font-size: 20px;color: #453a50;"><b>X</b></span></h6>
			<br>
			<div class="input-field">
				<input type="text" name="product_name" id="product_name">
				<label for="product_name">Item Name</label>
			</div>
			<button type="button" id="btn_save_item" class="btn waves-effect waves-light" style="background: #453a50;">Save</button>
		</div>
	</div>
	<!-- item modal section end -->

	<!-- brand modal section start -->
	<div class="modal" id="Show_Brand_Modal">
		<div class="modal-content" style="border-top: 3px solid #453a50;">
			<h6 style="color: silver;"><span class="fa fa-cubes" style="color: #453a50;"></span>&nbsp;Add Brand<span class="right modal-close" style="font-size: 20px;color: #453a50;"><b>X</b></span></h6>
			<br>
			<div id="show_select_item_data"></div>
			<div class="input-field">
				<input type="text" name="brand_name" id="brand_name">
				<label for="brand_name">Brand Name</label>
			</div>
			<button type="button" id="btn_save_brand" class="btn waves-effect waves-light" style="background: #453a50;">Save</button>
		</div>
	</div>
	<!-- brand modal section end -->
	<!-- menu bar section end -->
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
	<!-- custom js file include -->
	<script type="text/javascript">
		$(document).ready(function(){
			//show modal script start
			$('.modal').modal({
				dismissible:false
			});
		});
	</script>
	<!-- ajax script section -->
	<script type="text/javascript">
		$(function(){
			// add item script start
			$('#btn_save_item').click(function(){
				var product_name = $('#product_name').val();
				if(product_name == ""){
					M.toast({html:'Please Enter Product Name.'});
				} 
				else{
					$.ajax({
						type:'ajax',
						method:'POST',
						url:'InsertProductName',
						dataType:'json', 
						data:{product_name:product_name},
						success:function(data){
							alert('Item Inserted Successfully');
							$('#product_name').val("");
						},
						error:function(){
							// alert('Your Item Already Insert.');
							alert('Item is Already present.');
						}
					});
				}
			});
			// add item script end

			// add brand scxript start
			GetItems()
			function GetItems()
			{
				$.ajax({
					type:'ajax',
					url:'GetAllItems',
					success:function(data){
						$('#show_select_item_data').html(data);
					},
					error:function(){
						alert('No Data Found.');
					}
				});
			}
			// add brand script end 

			// insert brand script strat
			$('#btn_save_brand').click(function(){
				var items = $('#items').val();
				var brand_name = $('#brand_name').val();
				// alert(item_select+" = "+brand_name);
				if (items == ""){
					M.toast({html:'Please Enter Item Name.'});	
				}
				else if (brand_name == "") {
					M.toast({html:'Please Enter Brand Name.'});	
				}
				else{
					$.ajax({
						type:'ajax',
						method:'POST',
						url:'InsertBrand',
						dataType:'json',
						data:{items:items,brand_name:brand_name},
						success:function(data){
							alert('Your Brand Name has Successfully been inserted');
							$('brand_name').val("");
						},
						error:function(){
							// alert('Brand Insert Already.Enter Different Brand Name');
							alert('Brand is Already Present.');
						}
					});
				}
			});
			// insert brand script end
		});
	</script>
</body>
</html>