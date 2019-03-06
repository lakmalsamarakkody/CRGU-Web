<?php

// INIT APP
include_once '../app/init.php';

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
	<link rel="stylesheet" href="<?php echo APP_FQDN; ?>/assets/css/landing.css"/>
	<link rel="stylesheet" href="<?php echo APP_FQDN; ?>/assets/css/lightbox.min.css"/>

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

				<section class="col-md-12 text-center pt-5 pb-5 crgu-overview" style="background-color: #F5F5F5;">
					<h5>Blood Donation - 2017</h5>
					<hr class="w-25 mb-4">
					<p class="mb-0">Blood Donation Campaign was held at Railway Operation and Transportation Management Institute. It was planned and organized by Guards’ batch 2017 collaboration with Ceylon Guards’ Union.</p>
				</section>

				<div class="col-md-12 mt-5 mb-5">
					<div class="row">
						
						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-1.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-1.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-2.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-2.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-3.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-3.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-4.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-4.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-5.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-5.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-6.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-6.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-7.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-7.jpg" />
								</a>
							</div>
						</div>

						<div class="col-md-3 gallery-item">
							<div class="row">
								<a class="example-image-link" href="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-8.jpg" data-lightbox="img-set">
									<img class="example-image img-fluid" src="<?php echo APP_FQDN; ?>/assets/img/projects/blood-donation-2017/bd-8.jpg" />
								</a>
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