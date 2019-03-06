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
				<div class="col-md-12 title-bar" style="background-image: url('assets/img/banner-role-of-honour.jpg');">
					<div class="d-block text-center">
						<h2>Role of Honour</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PROJECT CARDS -->
	<section class="container-fluid crgu">
		<div class="container">
			<div class="row">

				<div class="col-md-12 pt-5 text-center">
					<div class="row">	
						
						<!-- 1st row -->
						<div class="col-md-4">
							<div class="card card-roh text-center">
								<div class="card-header">S. Selvadurai</div>
								<div class="card-body">
									<div class="card-title">Head Guard C.G.R</div>
									<div class="card-text">Murdered in the Brake Van up Talaimannar Night Mail<br>&nbsp;</div>
								</div>
								<div class="card-footer text-muted">28<sup>th</sup> of July, 1945</div>
							</div>
						</div>

						<div class="col-md-4 mt-4 mt-md-0">
							<div class="card card-roh text-center">
								<div class="card-header">T. De Lanerolle</div>
								<div class="card-body">
									<div class="card-title">Head Guard C.G.R</div>
									<div class="card-text">Who died under tragic circumstances in the Brake Van of train no:225<br>&nbsp;</div>
								</div>
								<div class="card-footer text-muted">28<sup>th</sup> of September, 1966</div>
							</div>
						</div>

						<div class="col-md-4 mt-4 mt-md-0">
							<div class="card card-roh text-center">
								<div class="card-header">H.L.M. Kalideen</div>
								<div class="card-body">
									<div class="card-title">Head Guard C.G.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working pilgrim special between Ulapane and Navalapitiya</div>
								</div>
								<div class="card-footer text-muted">05<sup>th</sup> of July, 1971</div>
							</div>
						</div>

						<!-- 2nd row -->
						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">U.B.Manapaya</div>
								<div class="card-body">
									<div class="card-title">Under Guard C.G.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working ballast special at Maho</div>
								</div>
								<div class="card-footer text-muted">22<sup>th</sup> of May, 1975</div>
							</div>
						</div>

						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">A.D.Bopage</div>
								<div class="card-body">
									<div class="card-title">D.T.I. (ANP) S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst on duty</div>
								</div>
								<div class="card-footer text-muted">08<sup>th</sup> of November, 1988</div>
							</div>
						</div>

						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">A.A.B.Pushpa Kumara</div>
								<div class="card-body">
									<div class="card-title">Guard III S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working on Train No: 504</div>
								</div>
								<div class="card-footer text-muted">28<sup>th</sup> of August, 1989</div>
							</div>
						</div>

						<!-- 3rd row -->
						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">I.A.D.N.Sarath</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working on Train No: 109 between Mirigama and Ambepussa</div>
								</div>
								<div class="card-footer text-muted">30<sup>th</sup> of August, 1998</div>
							</div>
						</div>

						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">H.D.N.Perera</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working Train No: 579 between Kadigamuwa and Rambukkana</div>
								</div>
								<div class="card-footer text-muted">05<sup>th</sup> of December, 1999</div>
							</div>
						</div>

						<div class="col-md-4 mt-4">
							<div class="card card-roh text-center">
								<div class="card-header">S.A.D.P.C.Constantine</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances due to an accident at Kolonnawa whilst working Train No: 198</div>
								</div>
								<div class="card-footer text-muted">27<sup>th</sup> of July, 2000</div>
							</div>
						</div>

						<!-- 4th row -->
						<div class="col-md-4 mt-4 mb-md-4">
							<div class="card card-roh text-center">
								<div class="card-header">M.A.D.Chandrasiri</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working ballast train at Induruwa</div>
								</div>
								<div class="card-footer text-muted">23<sup>th</sup> of March, 2001</div>
							</div>
						</div>

						<div class="col-md-4 mt-4 mb-md-4">
							<div class="card card-roh text-center">
								<div class="card-header">M.G.Gnanasena</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working Train No:194 at Alawwa</div>
								</div>
								<div class="card-footer text-muted">13<sup>th</sup> of June, 2002</div>
							</div>
						</div>

						<div class="col-md-4 mt-4 mb-4">
							<div class="card card-roh text-center">
								<div class="card-header">D.L.Balasooriya</div>
								<div class="card-body">
									<div class="card-title">Head Guard S.L.R</div>
									<div class="card-text">Who died under tragic circumstances whilst working Train No: 10 at Maradana</div>
								</div>
								<div class="card-footer text-muted">21<sup>th</sup> of October, 2008</div>
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