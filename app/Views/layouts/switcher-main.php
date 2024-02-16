<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa – CodeIgniter Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

		<!-- TITLE -->
		<title>Noa – CodeIgniter Bootstrap5 Admin & Dashboard Template</title>

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/favicon.ico'); ?>" />

        <?= $this->include('layouts/components/switcher-styles'); ?>

	</head>

	<body class="ltr app sidebar-mini light-mode">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="<?php echo base_url('assets/images/loader.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

                <!-- APP-HEADER -->
                <?= $this->include('layouts/components/app-header'); ?>
                <!-- /APP-HEADER -->

                <!-- APP-SIDEBAR -->
                <?= $this->include('layouts/components/app-sidebar'); ?>
                <!-- /APP-SIDEBAR -->

				<!-- APP CONTENT -->
				<div class="app-content main-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- CONTENT -->
							<?= $this->renderSection('content'); ?>
							<!-- CONTENT CLOSED-->
					
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
				<!-- APP CONTENT CLOSED-->
			</div>

			<!-- COUNTRY-SELECTOR MODAL-->
			<?= $this->include('layouts/components/modal'); ?>
			<!-- /COUNTRY-SELECTOR MODAL-->

			<!-- FOOTER -->
			<?= $this->include('layouts/components/footer'); ?>	
			<!-- FOOTER CLOSED -->
		</div>

		<!-- SCRIPTS -->
		<?= $this->include('layouts/components/switcher-scripts'); ?>
		<!-- SCRIPTS CLOSED -->

	</body>
</html>
