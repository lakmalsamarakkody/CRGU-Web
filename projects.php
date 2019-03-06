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

	<!-- BANNER -->
	<section class="container-fluid crgu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-bar" style="background-image: url('assets/img/banner-projects.jpg');">
					<div class="d-block text-center">
						<h2>Our Projects</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PROJECT CARDS -->
	<section class="container-fluid crgu">
		<div class="container">
			<div class="row">

				<div class="col-md-12 mt-4 mb-4">
					<div class="row">
						
						<div class="col-md-4 mb-4">
							<div class="card card-projects">
								<img src="<?php echo APP_FQDN; ?>/assets/img/projects/poson-dansala-2018/thumbnail.jpg" alt="" class="card-img-top" />
								<div class="card-body">
									<div class="card-title text-center">Poson Dansala - 2018</div>
									<p class="card-text text-center">Annual poson dansala was held on Anuradhapura Railway Station at poson poya day. It was organized by Ceylon Railway Guards’ Union. <br><br></p>
									<div class="text-center"><a href="<?php echo APP_FQDN; ?>/project/poson-dansala-2018" class="btn btn-primary">More Details</a></div>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card card-projects">
								<img src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2018/thumbnail.jpg" alt="" class="card-img-top" />
								<div class="card-body">
									<div class="card-title text-center">Blood Donation - 2018</div>
									<p class="card-text text-center">Blood Donation Campaign was held at Railway Operation and Transportation Management Institute. It was planned and organized by Guards’ batch 2017 collaboration with Ceylon Guards’ Union.</p>
									<div class="text-center"><a href="<?php echo APP_FQDN; ?>/project/blood-donation-2018" class="btn btn-primary">More Details</a></div>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card card-projects">
								<img src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/thumbnail.jpg" alt="" class="card-img-top" />
								<div class="card-body">
									<div class="card-title text-center">Blood Donation - 2017</div>
									<p class="card-text text-center">Blood Donation Campaign was held at Railway Operation and Transportation Management Institute. It was planned and organized by Guards’ batch 2017 collaboration with Ceylon Guards’ Union.</p>
									<div class="text-center"><a href="<?php echo APP_FQDN; ?>/project/blood-donation-2017" class="btn btn-primary">More Details</a></div>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card card-projects">
								<img src="<?php echo APP_FQDN; ?>/assets/img/projects/pirith-2017/thumbnail.jpg" alt="" class="card-img-top" />
								<div class="card-body">
									<div class="card-title text-center">Pirith Chanting - 2017</div>
									<p class="card-text text-center">Pirith chanting program and Alms Giving was held on 06.05.2017 at Maradana Railway Station. It was planned and organized by Guards’ batch 2016 collaboration with Ceylon Guards’ Union.</p>
									<div class="text-center"><a href="<?php echo APP_FQDN; ?>/project/pirith-chanting-2017" class="btn btn-primary">More Details</a></div>
								</div>
							</div>
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