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

	<?= $this->include('layouts/components/custom-styles'); ?>

</head>
<?= $this->renderSection('body'); ?>

<!-- GLOBAL-LOADER -->
<div id="global-loader">
	<img src="<?php echo base_url('assets/images/loader.svg'); ?>" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
	<div>
		<!-- CONTENT -->
		<?= $this->renderSection('content'); ?>
		<!-- CONTENT CLOSED-->
	</div>
</div>

<!-- SCRIPTS -->
<?= $this->include('layouts/components/custom-scripts'); ?>
<!-- SCRIPTS CLOSED -->

</body>

</html>