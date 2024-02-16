<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa – CodeIgniter Bootstrap5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

		<!-- TITLE -->
		<title>Noa – CodeIgniter Bootstrap5 Admin & Dashboard Template</title>

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/favicon.ico'); ?>" />

        <?= $this->include('layouts/landing/styles'); ?>

	</head>

	<body class="ltr app horizontal landing-page">
	
		<a href="javascript:void(0);" class="buy-now">Buy Now</a>

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="<?php echo base_url('assets/images/loader.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

                <!-- LANDING-HEADER -->
				<?= $this->include('layouts/landing/header'); ?>
				<!-- /LANDING-HEADER -->

				<!-- LANDING-SIDEBAR -->
				<?= $this->include('layouts/landing/sidebar'); ?>
				<!-- /LANDING-SIDEBAR -->

				<!-- APP CONTENT -->
				<div class="hor-content main-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container">

							<!-- CONTENT -->
							<?= $this->renderSection('content'); ?>
							<!-- CONTENT CLOSED-->
					
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
				<!-- APP CONTENT CLOSED-->
			</div>

			<!-- LANDING-FOOTER -->
			<?= $this->include('layouts/landing/footer'); ?>	
			<!-- LANDING-FOOTER CLOSED -->
		</div>

		<!-- SCRIPTS -->
		<?= $this->include('layouts/landing/scripts'); ?>
		<!-- SCRIPTS CLOSED -->

	</body>
</html>
