<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login | Online Shopping Website</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		body{background: orange;}
		#admin_username,#admin_password{border-bottom: 1px solid orange;box-shadow: none;}
		#admin_username:focus + label,#admin_password:focus + label{color: orange;}
	</style>
</head>
<body>
	<!-- body section start -->
	<h4 class="center-align" style="margin-top: 5%;margin-bottom: 2%;color: white;">Admin Login</h4>
	<!-- login form section start -->
	<div class="row white" style="padding: 10px; padding-bottom: 50px;">
		<br><br>
		<div class="col l1 m1 s12"></div>
		<div class="col l3 m3 s12" style="border: 1px solid orange;">
			<br><br>
			<?= form_open('Admin/Login'); ?>
			<!-- login fail message section start -->
			<?php if ($msg = $this->session->flashdata('msg')): ?>
			<p class="red-text" style="font-size: 14px;"><?= $msg; ?></p>
		<?php endif; ?>
			<!-- login fail message section end -->
			<div class="input-field">
				<input type="text" name="admin_username" id="admin_username" required>
				<label for="admin_username">Username</label>
			</div>
			<div class="input-field">
				<input type="password" name="admin_password" id="admin_password" required>
				<label for="admin_password">Password</label>
			</div>
			<button type="submit" class="btn waves-effect waves-light orange">Login</button>
			<?= form_close(); ?>
			<br><br>
			<center><a href="#!">Forgot Password</a></center>
			<br><br>
		</div>
		<div class="col l7 m7 s12">
			<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum numquam nesciunt placeat enim possimus. Eos magnam delectus ab quibusdam reprehenderit rerum aperiam eaque consequatur porro. Dolores deleniti, earum at nulla! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis maiores fugiat fuga tempore at repellat dicta quod obcaecati in autem voluptate quaerat, officia deleniti id dolores ea provident, facilis nemo.</p>
			<div class="row">
				<center>
				<div class="col l3 m3 s12">
					<h1><span class="fa fa-users orange-text"></span></h1>
					<h6 class="orange-text">Manage Users</h6>
				</div>
				</center>
				<center>
				<div class="col l3 m3 s12">
					<h1><span class="fa fa-users orange-text"></span></h1>
					<h6 class="orange-text">Manage Sellers</h6>
				</div>
				</center>
				<center>
				<div class="col l3 m3 s12">
					<h1><span class="fa fa-gift orange-text"></span></h1>
					<h6 class="orange-text">Manage Sales</h6>
				</div>
				</center>
				<center>
				<div class="col l3 m3 s12">
					<h1><span class="fa fa-cubes orange-text"></span></h1>
					<h6 class="orange-text">Manage Items</h6>
				</div>
				</center>
			</div>
		</div>
		<div class="col l1 m1 s12"></div>
	</div>
	<!-- login form section end -->
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
</body>
</html>