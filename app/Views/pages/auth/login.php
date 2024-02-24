<?= $this->extend('layouts/custom-main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('body'); ?>

<body class="ltr login-img">

	<?= $this->endSection('body'); ?>

	<?= $this->section('content'); ?>

	<!-- CONTAINER OPEN -->
	<div class="col col-login mx-auto text-center">
		<a href="<?php echo base_url('Login'); ?>" class="text-center">
			<!-- <img src="<?php echo base_url('assets/images/brand/logo.png'); ?>" class="header-brand-img" alt=""> -->
		</a>
	</div>
	<div class="container-login100">
		<div class="wrap-login100 p-0">
			<div class="card-body">
				<div class="text-center login-header">
					<!-- <p class="text-muted mb-4 ">Enter your mobile number and OTP to access admin panel.</p> -->
					<div class=" mb-2 mt-1 login_error_message <?= (session()->getFlashdata('success_msg')) ? "text-sucess" : "text-danger"; ?>">
						<?= (session()->getFlashdata('error')) ? session()->getFlashdata('error') : ""; ?>
						<?= (session()->getFlashdata('success_msg')) ? session()->getFlashdata('success_msg') : ""; ?>
					</div>
				</div>
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('login') ?>">
					<span class="login100-form-title">
						<img src="<?php echo base_url('assets/images/brand/logo-4.png'); ?>" class="header-brand-img" alt="" style="height: 50px;">
					</span>
					<div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="zmdi zmdi-email" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-bs-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="zmdi zmdi-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="text-end pt-1">
						<!-- <p class="mb-0"><a href="<?php echo base_url('forgot-password'); ?>" class="text-primary ms-1">Forgot Password?</a></p> -->
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn btn-primary" type="submit" value="Login">
					</div>
					<div class="text-center pt-3">
						<!-- <p class="text-dark mb-0">Not a member?<a href="<?php echo base_url('register'); ?>" class="text-primary ms-1">Create an Account</a></p> -->
					</div>
				</form>
			</div>
			<!-- <div class="card-footer">
						<div class="d-flex justify-content-center my-3">
							<a href="javascript:void(0)" class="social-login  text-center me-4">
								<i class="fa fa-google"></i>
							</a>
							<a href="javascript:void(0)" class="social-login  text-center me-4">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="javascript:void(0)" class="social-login  text-center">
								<i class="fa fa-twitter"></i>
							</a>
						</div>
					</div> -->
		</div>
	</div>
	<!-- CONTAINER CLOSED -->

	<?= $this->endSection('content'); ?>

	<?= $this->section('scripts'); ?>

	<?= $this->endSection('scripts'); ?>