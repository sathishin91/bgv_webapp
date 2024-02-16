<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<style>
    .text-size {
        font-size: 25px;
    }
</style>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">To do's</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Todo</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Clients</li> -->
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<?php
// print_r(round($licensePer));
// die();
?>


<div class="row">
    <!-- CARD 1 -->
    <div class="col-md-12 col-xl-3">
        <a href="<?php echo base_url('EmployeeController/panView') ?>" class="button">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h4 class="card-title">Pan Card</h4>
                    <h4 class="card-text">task to do: <span class="text-size"><?= $panData ?></span></h4>
                    <div class="progress progress-md mb-0">
                        <div class="progress-bar bg-success wp-<?= round($panPer) ?>"></div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <!-- CARD 2 -->
    <div class="col-md-12 col-xl-3">
        <a href="<?php echo base_url('EmployeeController/aadharView') ?>" class="button">
            <div class="card text-white bg-danger">

                <div class="card-body">
                    <h4 class="card-title">Aadhaar</h4>
                    <h4 class="card-text">task to do: <span class="text-size"><?= $aadharData ?></span></h4>
                    <div class="progress progress-md mb-0">
                        <div class="progress-bar bg-warning wp-<?= round($aadharPer) ?>"></div>
                    </div>
                </div>


            </div>
        </a>
    </div>
    <!-- CARD 3 -->
    <div class="col-md-12 col-xl-3">
        <a href="<?php echo base_url('EmployeeController/voterIdView') ?>" class="button">

            <div class="card text-white bg-success">
                <div class="card-body">
                    <h4 class="card-title">Voter ID</h4>
                    <h4 class="card-text">task to do: <span class="text-size"><?= $voterIdData ?></span></h4>
                    <div class="progress progress-md mb-0">
                        <div class="progress-bar bg-info wp-<?= round($voterIdPer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- CARD 4 -->
    <div class="col-md-12 col-xl-3">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h4 class="card-title">Driving License</h4>
                    <h4 class="card-text">task to do: <span class="text-size"><?= $licenseData ?></span></h4>
                    <div class="progress progress-md mb-0">
                        <div class="progress-bar bg-secondary wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>


</div>
</div>
</div>
</div>
<!-- END ROW -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>