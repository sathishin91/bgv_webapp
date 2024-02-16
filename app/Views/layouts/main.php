<?php
$tempdata = session();
?>
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
	<title>BGV</title>

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/logo-4.png'); ?>" />

	<?= $this->include('layouts/components/styles'); ?>

	<link rel="stylesheet" href="<?php echo base_url('assets/jquery-toast/jquery.toast.min.css'); ?>">

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
		<?php
		/*
		 $this->include('layouts/components/footer'); 
		 */
		?>
		<!-- FOOTER CLOSED -->

		<!-- common model start -->
		<div id="commonModal" class="modal fade">
			<div class="modal-dialog " role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<!-- <h4 class="modal-title">Modal Header</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					</div>

					<div class="modal-body common_modal_content">

					</div>
				</div>
			</div>
		</div>

		<!-- common model end -->
	</div>

	<!-- SCRIPTS -->
	<?= $this->include('layouts/components/scripts'); ?>
	<!-- SCRIPTS CLOSED -->
	<script src="<?php echo base_url('assets/jquery-toast/jquery.toast.min.js') ?>"></script>
	<script>
		$(document).ready(function() {
			<?php if ($message = session()->getFlashdata('success_msg')) : ?>
				$.toast({
					heading: "Success",
					text: '<?= $message ?>',
					position: "top-right",
					loaderBg: "#fff",
					icon: "success"
				});
			<?php endif; ?>
			<?php if ($message = session()->getFlashdata('error_msg')) : ?>
				$.toast({
					heading: "Error",
					text: '<?= $message ?>',
					position: "top-right",
					loaderBg: "#fff",
					icon: "error"
				});
			<?php endif; ?>
			<?php if ($message = session()->getFlashdata('warning_msg')) : ?>
				$.toast({
					heading: "warning",
					text: '<?= $message ?>',
					position: "top-right",
					loaderBg: "#fff",
					icon: "warning"
				});
			<?php endif; ?>
		});
	</script>

</body>

</html>