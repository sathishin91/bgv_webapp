<?= $this->extend('layouts/main'); ?>


    <?= $this->section('styles'); ?>

    <?= $this->endSection('styles'); ?>

    <?= $this->section('content'); ?>

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Range slider</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Range Slider</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->
							
							<!--DIV-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" name="example_name" type="text" value="">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" name="example_name" type="text" value="">
										</div>
									</div>
								</div>
							</div>
							<!--/DIV-->

							<!--DIV-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider (Modern Skin)
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/DIV-->

							<!--DIV-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider (Outline Skin)
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!-- /DIV -->
																																																																																	   																								                        								
	<?= $this->endSection('content'); ?>
	
	<?= $this->section('scripts'); ?>

		<!-- INTERNAL ION.RANGESLIDER.MIN.JS -->
		<script src="<?php echo base_url('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/rangeslider.js'); ?>"></script>														

		<!-- COLOR THEME JS -->
		<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>
		
	<?= $this->endSection('scripts'); ?>

