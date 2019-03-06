<?php

// INIT APP
include_once 'app/init.php';

?>

<!DOCTYPE html>
<html>
<head>
	<!-- TITLE -->
	<title><?php echo APP_TITLE; ?></title>

	<!-- META -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

	<!-- CSS : LIBS -->
	<link rel="stylesheet" href="<?php echo APP_FQDN; ?>/assets/libs/bts/css/bootstrap.min.css"/>

	<!-- CSS : LOCAL -->
	<link rel="stylesheet" href="<?php echo APP_FQDN; ?>/assets/css/core.css"/>

	<?php include_once ABS_PATH . '/tpl/header.parts.php'; ?>

</head>
<body>	
	<!-- INCLUDE HEADER -->
	<?php include_once ABS_PATH . '/tpl/header.tpl.php'; ?>

	<!-- INCLUDE NAV -->
	<?php include_once ABS_PATH . '/tpl/nav.tpl.php'; ?>

	<section class="container-fluid crgu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-bar" style="background-image: url('assets/img/banner-contact.jpg');">
					
					<div class="d-block text-center" style="height: 150px;">
						<h2></h2> 
					</div>
				</div>
				
						<div class="col-md-12 text-center mt-5">
							<div class="card card-contact border-primary">
								<div class="card-header">Voice</div>
								<div class="card-body text-primary text-center">
									<h5 class="card-title"><i class="fa fa-phone"></i></h5>
									<hr width="90%"/>

									<div class="col-md-12">
									<div class="row">

										<div class="col-md-3 card-call-ho">
											Head office<br/>Maradana<br/>+94 11 2 673 495
										</div>
										<div class="col-md-3">
											President<br/>W.N.J.Fernando<br/>+94 71 5 313 132
										</div>
										<div class="col-md-3">
											Secretary<br/>P.M.P. Peiris<br/>+94 70 2 103 306
										</div>
										<div class="col-md-3">
											Treasurer<br/>R.J.Weerasinghe<br/>+94 71 6 908 065
										</div>

									</div>
									</div>

								</div>
							</div>
						</div>	

				<div class="col-md-12 mt-5">
					<div class="row">
						
						<div class="col-md-6 text-center">
							<div class="card card-contact border-primary">
								<div class="card-header">Email</div>
								<div class="card-body text-primary">
								  	<h5 class="card-title"><i class="fa fa-envelope"></i></h5>
									<p class="card-text">info@crgu.lk</p>
								</div>
							</div>  
						</div>

						<div class="col-md-6 text-center">
							<div class="card card-contact border-primary mb-3">
								<div class="card-header">Social</div>
								<div class="card-body text-primary">
									<h5 class="card-title"><i class="fa fa-facebook"></i></h5>
									<p class="card-text"><a href="https://www.facebook.com/guardcgr" target="_blank">The Railway Guard</a></p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-12 mb-5 mt-4">
					<div class="row">

						<div class="col-md-4 text-center">
							<div class="card card-contact border-primary pb-3">
								<div class="card-header pt-4 pb-4">Address</div>
								<div class="card-body text-primary pt-5 pb-5">
									<h5 class="card-title"><i class="fa fa-building"></i></h5>
									<p class="card-text"> Railway Guards Union<br/>Head office,<br/>Railway Passage<br/>Maradana, Colombo 10 </p>
						    	</div>
							</div>
						</div>

						<div class="col-md-8">
							
							<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC6UmZ7jdbTehEzwOnDqidUq2WzKmu2gNs&callback=initMap'></script>


							<div class="col-md-12" id='gmap_canvas' style="height: 350px;"></div>
							<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>

							<script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(6.9270786,79.86124300000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.9270786,79.86124300000006)});infowindow = new google.maps.InfoWindow({content:'<strong>Ceylon Railway Guards Union</strong><br>Colombo, Sri Lanka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

						</div>
						
					</div>
				</div>

			</div>
		</div>
	</section>
	
	<!-- INCLUDE FOOTER -->
	<?php include_once ABS_PATH . '/tpl/footer.tpl.php'; ?>
	
</body>
</html>