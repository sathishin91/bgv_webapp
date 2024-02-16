<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Clients</h1>
	</div>
	<div class="ms-auto pageheader-btn">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item"><a href="javascript:void(0);">All Clients</a></li>
			<li class="breadcrumb-item active" aria-current="page">Clients</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->


<!-- TABS OPEN -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header border-bottom">
				<h3 class="card-title">Simple Tabs</h3>
			</div>
			<div class="card-body p-3">
				<div class="panel panel-primary">
					<div class="tab-menu-heading border-bottom-0">
						<div class="tabs-menu4 border-bottomo-sm">
							<!-- Tabs -->
							<nav class="nav d-sm-flex d-block">
								<a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
									Starred
								</a>
								<a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab26">
									All
								</a>
							</nav>
						</div>
					</div>
					<div class="panel-body tabs-menu-body">
						<div class="tab-content">
							<div class="tab-pane active " id="tab25">
								<div class="row row-deck">
									<!-- CARD 1 -->
									<div class="col-xl-3 col-md-12">
										<div class="card ">
											<div class="card-header border-bottom">
												<div class="card-title">Orders</div>
											</div>
											<div class="card-body">
												<p>With supporting text below as a natural lead-in to additional content.</p>
												<a href="#" class="btn btn-primary">Go somewhere</a>
											</div>
										</div>
									</div>
									<!-- CARD 2 -->
									<div class="col-xl-3 col-md-12">
										<div class="card ">
											<div class="card-header border-bottom">
												<div class="card-title">New booking</div>
											</div>
											<div class="card-body">
												<p>With supporting text below as a natural lead-in to additional content.</p>
												<a href="#" class="btn btn-primary">Go somewhere</a>
											</div>
										</div>
									</div>
									<!-- CARD 3 -->
									<div class="col-xl-3 col-md-12">
										<div class="card ">
											<div class="card-header border-bottom">
												<div class="card-title">Inquiry</div>
											</div>
											<div class="card-body">
												<p>With supporting text below as a natural lead-in to additional content.</p>
												<a href="#" class="btn btn-primary">Go somewhere</a>
											</div>
										</div>
									</div>
									<!-- CARD 4 -->
									<div class="col-xl-3 col-md-12">
										<div class="card ">
											<div class="card-header border-bottom">
												<div class="card-title">Earning</div>
											</div>
											<div class="card-body">
												<p>With supporting text below as a natural lead-in to additional content.</p>
												<a href="#" class="btn btn-primary">Go somewhere</a>
											</div>
										</div>
									</div>

								</div>

							</div>
							<div class="tab-pane" id="tab26">
								<div class="row ">
									<!-- CARD 1 -->
									<div class="col-md-12 col-xl-3">
										<div class="card text-white bg-primary">
											<div class="card-body">
												<h4 class="card-title">New booking</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											</div>
										</div>
									</div>
									<!-- CARD 2 -->
									<div class="col-md-12 col-xl-3">
										<div class="card text-white bg-primary">
											<div class="card-body">
												<h4 class="card-title">New booking</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											</div>
										</div>
									</div>
									<!-- CARD 3 -->
									<div class="col-md-12 col-xl-3">
										<div class="card text-white bg-primary">
											<div class="card-body">
												<h4 class="card-title">New booking</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											</div>
										</div>
									</div>
									<!-- CARD 4 -->
									<div class="col-md-12 col-xl-3">
										<div class="card text-white bg-primary">
											<div class="card-body">
												<h4 class="card-title">New booking</h4>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											</div>
										</div>
									</div>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- TABS CLOSED -->

</div>
</div>
</div>
<!-- END ROW -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>