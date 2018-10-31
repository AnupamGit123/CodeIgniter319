<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller Contact Details</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file include -->
	<style type="text/css">
		body{background: rgba(0,0,0,0.09);}
		#set_contact{background: silver;padding: 10px;}
		select{display: block;border: 1px solid gray;}
		#seller_fname,#seller_lname{border: 1px solid gray;box-shadow: none;padding-left: 3px;width: 99%;background: white;color: gray;}
		#seller_address{border: 1px solid gray;box-shadow: none;padding-left: 3px;width: 100%;height: 150px;background: white;color: gray;}
	</style>
</head>
<body>
	<!-- body section start -->
	<!-- contact form section start -->
	<div class="row" style="margin-top: 6%;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12" style="padding: 10px;">
			<div id="set_contact">
				<br>
				<?= form_open('Seller/InsertSellerContact');  ?>
				<h6 class="orange-text" style="font-size: 20px;">Seller Contact Information</h6>
				<p class="orange-text" style="font-size: 14px;margin-top: 0px;">Fill this form & complete our Profile Information.</p>
				<input type="text" name="seller_fname" id="seller_fname" placeholder="First Name" required>
				<input type="text" name="seller_lname" id="seller_lname" placeholder="Last Name" required>
				<textarea class="materialize-textarea" id="seller_address" name="seller_address" placeholder="Address...." required></textarea>
				<select name="seller_city" required>
					<option disabled selected>Select Your City</option>
					<option>Ajmer</option>
					<option>Ajwar</option>
					<option>Banswara</option>
					<option>Baran</option>
					<option>Barmer</option>
					<option>Bharatpur</option>
					<option>Bhilwara</option>
					<option>Bikaner</option>
					<option>Bundi</option>
					<option>Chittorgarh</option>
					<option>Churu</option>
					<option>Dausa</option>
					<option>Dholpur</option>
					<option>Dungarpur</option>
					<option>Hanumangarh</option>
					<option>Jaipur</option>
					<option>Jaisalmer</option>
					<option>Jalor</option>
					<option>Jhalawar</option>
					<option>Jodhpur</option>
					<option>Karauli</option>
					<option>Kota</option>
					<option>Nagaur</option>
					<option>Pali</option>
					<option>Pratapgarh</option>
					<option>Rajsamand</option>
					<option>Sawai Madhopr</option>
					<option>Sikar</option>
					<option>Sirohi</option>
					<option>Sri Ganganagar</option>
					<option>Tonk</option>
					<option>Udaipur</option>
				</select>
				<br>
				<button type="submit" class="btn waves-effect waves-light orange">Submit</button>
				<?= form_close(); ?>
				<br><br>
			</div>
		</div>
		<div class="col l4 m4 s12"></div>
	</div>
	<!-- contact form section end -->
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
</body>
</html>