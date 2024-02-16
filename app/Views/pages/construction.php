<?= $this->extend('layouts/custom-main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('body'); ?>

	<body class="ltr login-img">

<?= $this->endSection('body'); ?>

<?= $this->section('content'); ?>

				<div class="col col-login mx-auto text-center">
					<a href="<?php echo base_url('index'); ?>">
						<img src="<?php echo base_url('assets/images/brand/logo.png'); ?>" class="header-brand-img" alt="">
					</a>
				</div>
				<!-- CONTAINER OPEN -->
				<div class="container">
					<div class="row text-center mx-auto">
						<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
							<div class="text-white">
								<div class="card-body">
									<h1 class="display-2 mb-0 fw-semibold">Coming Soon</h1>
									<div id="launch_date"></div>
									<p>we apologize for your in-convenience....any quaries contact me </p>
									<h4><strong>Contact:</strong> noa@demo.com</h4>
									<div class="mt-5">
										<button class="btn btn-icon bg-secondary" type="button">
											<span class="btn-inner--icon"><i class="fa fa-facebook-f"></i></span>
										</button>
										<button class="btn btn-icon bg-secondary" type="button">
											<span class="btn-inner--icon"><i class="fa fa-google"></i></span>
										</button>
										<button class="btn btn-icon bg-secondary" type="button">
											<span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
										</button>
										<button class="btn btn-icon bg-secondary" type="button">
											<span class="btn-inner--icon"><i class="fa fa-pinterest-p"></i></span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
																																																																																																																															
	<?= $this->endSection('content'); ?>
	
	<?= $this->section('scripts'); ?>
		<!-- JQUERY-COUNTDOWN JS-->
		<script src="<?php echo base_url('assets/plugins/jquery-countdown/jquery.plugin.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-countdown/jquery.countdown.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-countdown/countdown.js'); ?>"></script>

	<?= $this->endSection('scripts'); ?>
