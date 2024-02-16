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
    <!-- pan -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/panView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <img src="<?php echo base_url('assets/images/doc-images/pancard.png'); ?>" class="" alt="logo" style="height: 75px; width:full;">
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $panData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($panPer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- aadhar -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/aadharView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <img src="<?php echo base_url('assets/images/doc-images/aadhar.png'); ?>" class="" alt="logo" style="height: 75px; width:full;">
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $aadharData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($aadharPer) ?>"></div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <!-- voterid -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/voterIdView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;">
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $voterIdData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($voterIdPer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- driving license -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <img src="<?php echo base_url('assets/images/doc-images/license.png'); ?>" class="" alt="logo" style="height: 75px; width:full;">
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- physical address -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2>PHYSICAL ADDRESS</h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Police Check -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2>Police Check</h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <!-- Education Check -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2> Education Check</h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Employment Check -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2> Employment Check </h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Credit Check -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2> Credit Check </h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Reference Check -->
    <div class="col-md-12 col-xl-4">
        <a href="<?php echo base_url('EmployeeController/licenseView') ?>" class="button">
            <div class="card text-white bg-info-transparent">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <!-- <img src="<?php echo base_url('assets/images/doc-images/voterid.png'); ?>" class="" alt="logo" style="height: 75px; width:full;"> -->
                            <h2> Reference Check </h2>
                        </div>
                        <div class="col-4">
                            <h6 class="card-text text-info-gradient">task to do: </h6>
                            <span class="text-size text-info-gradient"><?= $licenseData ?></span>
                        </div>
                    </div>
                    <div class="progress progress-sm border border-info-gradient">
                        <div class="progress-bar bg-info-gradient wp-<?= round($licensePer) ?>"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
<!-- END ROW -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>