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
	<link rel="stylesheet" href="<?php echo APP_FQDN; ?>/assets/css/landing.css"/>

	<?php include_once ABS_PATH . '/tpl/header.parts.php'; ?>

</head>
<body>
	<!-- INCLUDE HEADER -->
	<?php include_once ABS_PATH . '/tpl/header.tpl.php'; ?>

	<!-- INCLUDE NAV -->
	<?php include_once ABS_PATH . '/tpl/nav.tpl.php'; ?>

	<section class="container-fluid">
		<div class="container" style="background-color: white;">
			<div class="row">

				<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-indicators" data-slide-to="1"></li>
						<li data-target="#carousel-indicators" data-slide-to="2"></li>
						<li data-target="#carousel-indicators" data-slide-to="3"></li>
						<li data-target="#carousel-indicators" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="<?php echo APP_FQDN; ?>/assets/img/slideshow/slideshow-1.jpg" />
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="<?php echo APP_FQDN; ?>/assets/img/slideshow/slideshow-2.jpg" />
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="<?php echo APP_FQDN; ?>/assets/img/slideshow/slideshow-3.jpg" />
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="<?php echo APP_FQDN; ?>/assets/img/slideshow/slideshow-4.jpg" />
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="<?php echo APP_FQDN; ?>/assets/img/slideshow/slideshow-5.jpg" />
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container">
			<div class="row">
				
				<section class="col-md-12 text-center pt-5 pb-5 crgu-overview" style="background-color: #F5F5F5;">
					<h5>Who is Guard</h5>
					<hr class="w-25 mb-4">
					<p class="mb-0">Guard is the officer incharge of a train. And he has the full responsibility of a running train. He should fulfill lots of duties during the working time in his train.</p>
				</section>

				<section class="col-md-12 text-center crgu-overview pt-5 pb-5">
					<h5>Overview of Ceylon Railway Guards’ Union</h5>
					<hr class="w-25 mb-4">
					<p class="mb-0">Ceylon Railway Guards’ Union (CRGU) is an independent trade union which is functioning under the Department of Railways, Sri Lanka. And also CRGU is holding a major role in Railway Department which can make huge impact to the rail transportation.</p>
				</section>

				<section class="col-md-12 ov-msg">
					<div class="row">

						<div class="col-md-6">
							<div class="card card-quote w-100">
								<div class="card-body">
									<p class="quotation-mark">“</p>
									<p class="card-text mb-4">I am extremely happy for the very special privilege to open a website to the Ceylon Railway Guards’ Union making my dream come true. I am confident that this would make our future endeavors more successful.<br/><br/>I would like to convey my sincere thanks to all those who contributed in making our effort of new website launch a success. Special thanks go to all who worked extremely hard to make sure that the site is truly a significant reflection of the Guards’ Union.</p>
									<div class="blockquote-footer text-right pr-4">K. Hashan Sagara <br/> PRESIDENT </div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-quote w-100">
								<div class="card-body">
									<p class="quotation-mark">“</p>
									<p class="card-text mb-4">I am very pleased to write this message on the Ceylon Railway Guards’ Union new website launch.<br/><br/>Our hope is that we will have a clear road map to navigate the challengers ahead for our Union.<br/><br/>We hope the inauguration of the website will help to align the stability and growth of the Guards’ Union with the needs of its members  our desire is to offer you the latest updates of the Railway Guards’ union of Sri Lanka. </p>
									<div class="blockquote-footer text-right pr-4">P.M.P. Pieris <br/> SECRETARY </div>
								</div>
							</div>
						</div>

					</div>
				</section>

			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container pt-4 pb-4" style="background-color: white;">
			<div class="card-deck">

				<div class="card card-event">
					<img src="<?php echo APP_FQDN; ?>/assets/img/event_agm.jpg" alt="Annual General Meeting - CRGU" class="card-img-top" />
					<div class="card-body">
						<div class="card-title text-center">Annual General Meeting 2018</div>
						<hr class="w-25">
						<p class="card-text text-center">59th Annual General Meeting 2018 will be held on 20th July 2018 at Mount Mary Railway Sports Club Institute at Dematagoda with the chiefinship of Hon. Nimal Siripala De Silva &amp; The Minister of Transportation and Civil Aviation.</p>
					</div>
					<div class="card-footer text-center">20<sup>th</sup> of July, 2018</div>
				</div>

				<div class="card card-event">
					<img src="<?php echo APP_FQDN; ?>/assets/img/event_blood_donation.jpg" alt="Annual General Meeting - CRGU" class="card-img-top" />
					<div class="card-body">
						<div class="card-title text-center">Blood Donation - 2018</div>
						<hr class="w-25">
						<p class="card-text text-center">Blood Donation Campaign was held at Railway Operation and Transportation Management Institute. It was planned and organized by Guards’ batch 2017 collaboration with Ceylon Guards’ Union.</p>
					</div>
					<div class="card-footer text-center"><span class="badge badge-success">COMPLETED</span></div>
				</div>

				<div class="card card-event">
					<img src="<?php echo APP_FQDN; ?>/assets/img/event_poson_dansala.jpg" alt="Annual General Meeting - CRGU" class="card-img-top" />
					<div class="card-body">
						<div class="card-title text-center">Poson Dansala - 2018</div>
						<hr class="w-25">
						<p class="card-text text-center">Annual poson dansala was held on Anuradhapura Railway Station at poson poya day. It was organized by Ceylon Railway Guards’ Union.</p>
					</div>
					<div class="card-footer text-center"><span class="badge badge-success">COMPLETED</span></div>
				</div>

			</div>
		</div>
	</section>

	
	<!-- INCLUDE FOOTER -->
	<?php include_once ABS_PATH . '/tpl/footer.tpl.php'; ?>

</body>
</html>