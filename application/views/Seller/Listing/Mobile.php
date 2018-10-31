<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobile Upload ! Online Shopping</title>
	<!-- shortcut icon sectin start -->
	<?= link_tag('assets/image/logo/1.jpg', 'shortcut icon', 'image/ico'); ?>
	<?= link_tag('assets/font/font-awesome-4.7.0/css/font-awesome.css'); ?>
	<!-- materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- custom css file include -->
	<style type="text/css">
		body{padding: 10px;background: rgba(0,0,0,0.05);}
		select{display: block;}
		#display_size{width: 30%;}
		#mobile_title{border: 1px solid silver;box-shadow: none;padding-left: 5px;width: 99%;border-radius: 3px;}
		#mobile_title:focus{border: 1px solid orange;}
		#mobile_brand{border: 1px solid silver;outline: none;height: 47px;}
		#model_no,#model_name{border: 1px solid silver;box-shadow: none;padding-left: 5px;width: 97%;border-radius: 3px;}
		#model_no:focus,#model_name:focus{border: 1px solid orange;}
		[type="radio"]:checked + span:after, [type="radio"].with-gap:checked + span:after{background: orange;border: 2px solid orange;}
		#display_size{border: 1px solid silver;outline: none;}
		#internal_storage,#ram{border: 1px solid silver;outline: none;width: 30%}

		#operating_system,#duration_format,#offer,#return_policy{width: 30%;border: 1px solid silver;outline: none;}
		#version,#processor_size,#primary_camera_size,#secondary_camera_size,#network_type,#battery,#shipping_charge,#price{border: 1px solid silver;box-shadow: none;width: 50%;padding-left: 5px;border-radius: 3px;}
		#memory_card_type{border: 1px solid silver;width: 44%;outline: none;}
		#version:focus,#processor_size:focus,#primary_camera_size:focus,#secondary_camera_size:focus,#network_type:focus,#battery:focus;#shipping_charge:focus,#price:focus{border: 1px solid orange;}
		#show_img{height: 100px;width: 100px;border: 1px solid silver;}
	</style>
<body>
	<!-- body section start -->
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>General Details</h6>
				<br>
				<div id="first_section">
					<h6 style="font-size: 14px;color: silver;">Mobile Title</h6>
					<input type="text" name="mobile_title" id="mobile_title" maxlength="80" minlength="40">
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Mobile Brand</h6>
								<!-- show brand name section start -->
								<div id="show_mobile_brand">
									<!-- <select name="mobile_brand" id="mobile_brand" onclick="GetMobileBrandName()">
										<option>Select Mobile Brand</option>
										<option>o</option>
										<option>o</option>
										<option>o</option>
										<option>o</option>
										<option>o</option>
									</select> -->
								</div>

								<!-- show brand name section end -->
							</td>
							<td>
								<h6 style="font-size: 14px;color: silver;margin-top: 17px;">Model No.</h6>
								<input type="text" name="model_no" id="model_no">
							</td>
							<td>
								<h6 style="font-size: 14px;color: silver;margin-top: 17px;">Model Name</h6>
								<input type="text" name="model_name" id="model_name">
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Mobile Color</h6>
								<p>
									<label>
										<input type="radio" name="color" value="White">
										<span>White</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label> 
										<input type="radio" name="color" value="Black">
										<span>Black</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="color" value="Blue">
										<span>Blue</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="color" value="Gray">
										<span>Gray</span>
									</label>
								</p>
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Sim</h6>
								<p>
									<label>
										<input type="radio" name="sim" value="Single Sim">
										<span>Single Sim</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="sim" value="Double Sim">
										<span>Double Sim</span>
									</label>
								</p>
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Sim Type</h6>
								<p>
									<label>
										<input type="radio" name="sim_type" value="Micro">
										<span>Micro</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="sim_type" value="Neno">
										<span>Neno</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="sim_type" value="Pico">
										<span>Pico</span>
									</label>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<h6 style="font-size: 14px;color: silver;">OTG Support</h6>
								<p>
									<label>
										<input type="radio" name="otg" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="otg" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Display Details</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;color: silver;">Display Size</h6>
					<select id="display_size" name="display_size">
						<option>4.00 In</option>
						<option>4.50 In</option>
						<option>5.00 In</option>
						<option>5.50 In</option>
						<option>6.00 In</option>
						<option>6.50 In</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">Display Resolution</h6>
					<select id="display_reso" name="display_reso">
						<option>720 px</option>
						<option>1080 px</option>
						<option>1440 px</option>
						<option>4K</option>
						<option>8K</option>
					</select>
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Resolution Type</h6>
								<p>
									<label>
										<input type="radio" name="resolution_type" value="HD">
										<span>HD</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="resolution_type" value="Full HD">
										<span>Full HD</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="resolution_type" value="2K">
										<span>2K</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="resolution_type" value="4K">
										<span>4K</span>
									</label>
								</p>
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Display Type</h6>
								<p>
									<label>
										<input type="radio" name="display_type" value="TFT">
										<span>TFT</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label> 
										<input type="radio" name="display_type" value="OLED">
										<span>OLED</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="display_type" value="TFD">
										<span>TFD</span>
									</label>
								</p>
							</td>
							
						</tr>
						
					</table>
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Processor Details</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;color: silver;">Operating System</h6>
					<select name="display_size" id="operating_sysyem">
						<option>Andriod</option>
						<option>Blackberry</option>
						<option>Iphone</option>
						<option>Windows</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">Version</h6>
					<input type="text" name="version" id="version">
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Processor Type</h6>
								<p>
									<label>
										<input type="radio" name="processor_type" value="Octa Core">
										<span>Octa Core</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="processor_type" value="Hexa Core">
										<span>Hexa Core</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="processor_type" value="Snapdragon">
										<span>Snapdragon</span>
									</label>
								</p>
							</td>
						</tr>
					</table>
					<h6 style="font-size: 14px;color: silver;">Processor Size</h6>
					<input type="text" name="processor_size" id="processor_size">
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Storage Details</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;color: silver;">Internal Storage</h6>
					<select name="internal_storage" id="internal_storage">
						<option>4 GB</option>
						<option>8 GB</option>
						<option>16 GB</option>
						<option>32 GB</option>
						<option>64 GB</option>
						<option>128 GB</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">RAM</h6>
					<select name="ram" id="ram">
						<option>1 GB</option>
						<option>2 GB</option>
						<option>3 GB</option>
						<option>4 GB</option>
					</select>
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver ">Expandable Storage</h6>
								<p>
									<label>
										<input type="radio" name="expandable_storage" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="expandable_storage" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Memory Card Slot</h6>
								<p>
									<label>
										<input type="radio" name="memory_slot" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="memory_slot" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Memory Card Type</h6>
								<select name="memory_card_type" id="memory_card_type">
									<option>Mini SD Card</option>
									<option>Micro SD Card</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Camera Details</h6>
				<br>
				<div id="second_section">
					<table>
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver">Primary Camera</h6>
								<p>
									<label>
										<input type="radio" name="primary_camera" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="primary_camera" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>
					</table>
					<h6 style="font-size: 14px;color: silver;">Primary Camera</h6>
					<input type="text" name="primary_camera_size" id="primary_camera_size">
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Secondary Camera</h6>
								<p>
									<label>
										<input type="radio" name="secondary_camera" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="secondary_camera" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>                    
					</table>
					<h6 style="font-size: 14px;color: silver;">Secondary Camera</h6>
					<input type="text" name="secondary_camera_size" id="secondary_camera_size">				
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Flash</h6>
								<p>
									<label>
										<input type="radio" name="flash" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="flash" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>                    
					</table>
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Connectivity Details</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;color: silver;">Network Type</h6>
					<input type="text" name="network_type" id="network_type">
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Micro USB Slot</h6>
								<p>
									<label>
										<input type="radio" name="usb_slot" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="usb_slot" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>                    
					</table>
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
								<h6 style="font-size: 14px;color: silver;">Bluetooth</h6>
								<p>
									<label>
										<input type="radio" name="bluetooth" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="bluetooth" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>                    
					</table>
					<table class="table">
						<tr style="border-bottom: none;">
							<td>
							<h6 style="font-size: 14px;color: silver;">Wifi</h6>
								<p>
									<label>
										<input type="radio" name="wifi" value="Yes">
										<span>Yes</span>
									</label>
								</p>
							</td>
							<td>
								<p style="margin-top: 41px;">
									<label>
										<input type="radio" name="wifi" value="No">
										<span>No</span>
									</label>
								</p>
							</td>
						</tr>                    
					</table>
					<h6 style="font-size: 14px;color: silver;">Battery</h6>
					<input type="text" name="battery" id="battery">
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Listing Details</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;color: silver;">Duration Format</h6>
					<select name="duration_format" id="duration_format">
						<option>7 days</option>
						<option>10 days</option>
						<option>30 days</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">Offer</h6>
					<select name="offer" id="offer">
						<option>5% Off</option>
						<option>10% Off</option>
						<option>50% Off</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">Return Policy</h6>
					<select name="return_policy" id="return_policy">
						<option>7 days</option>
						<option>10 days</option>
					</select>
					<h6 style="font-size: 14px;color: silver;">Shipping Charge</h6>
					<input type="number" name="shipping_charge" id="shipping_charge">
					<h6 style="font-size: 14px;color: silver;">Price</h6>
					<input type="number" name="price" id="price">
					
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Image Upload</h6>
				<br>
				<div id="second_section">
					<div class="row">
						<div class="col l3 m3 s12";">
							<center>
								<div id="show_img"></div>
								<br>
								<input type="file" name="img_one" id="img_one">
							</center>
						</div>
						<div class="col l3 m3 s12";">
							<center>
								<div id="show_img"></div>
								<br>
								<input type="file" name="img_two" id="img_two">
							</center>
						</div>
						<div class="col l3 m3 s12";">
							<center>
								<div id="show_img"></div>
								<br>
								<input type="file" name="img_three" id="img_three">
							</center>
						</div>
						<div class="col l3 m3 s12";">
							<center>
								<div id="show_img"></div>
								<br>
								<input type="file" name="img_four" id="img_four">
							</center>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div style="border: 1px solid rgba(0,0,0,0.2);padding: 10px;background: white;border-radius: 3px;">
				<h6>Listing Fee</h6>
				<br>
				<div id="second_section">
					<h6 style="font-size: 14px;">Fee <span class="fa fa-inr"></span> 250</h6>
				</div>
			</div>
			<br>
			<button type="button" id="btn_submit" class="btn waves-effect waves-light" style="background: orange;">Submit Listing</button>
		</div>
		<div class="col l4 m4 s12">
			<div style="border: 1px solid silver;"><br></div>
		</div>
	</div>
	<!-- body section end -->
	<!-- jquery js file inclide -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!-- materialize js file include -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>

	<!-- ajax js file include (already included jquery file so no need for include again as ajax file) -->

	<!-- custom ajax script include -->
	<script type="text/javascript">
		$(function(){
			// Get mobile brand name script start
			GetMobileBrandName()
			function GetMobileBrandName(){
				$.ajax({
					type:'ajax',
					url:'../Admin/GetMobileBrandName',
					success:function(data){
						$('#show_mobile_brand').html(data);
					},
					error:function(){
						alert('Error ! Get Mobile Brand');
					}
				});
			}

		});
	</script>
</body>
</html>