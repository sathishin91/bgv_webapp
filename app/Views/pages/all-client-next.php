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
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>" type="button">All Clients</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>

        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-deck">
    <!-- CARD 1 -->
    <div class="col-xl-9 col-md-12">
        <div class="card ">
            <div class="card-header border-bottom">
                <div class="card-title"><?= $clientRecord[0]['name']; ?></div>
            </div>
            <div class="card-body">
                <p><?= $clientRecord[0]['description']; ?></p>
                <a href="#" class="btn btn-primary">Subscribe</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card" style="background:transparent;">
            <div class="btn-group mt-2 mb-2 dropright">
                <a type=" button" class="btn btn-primary dropdown-toggle p-2 w-100" href="<?php echo base_url('ClientController/addEmployeeId') . '/' . $clientRecord[0]['id']; ?>">
                    Add Employee <span class="caret"></span>
                </a>
            </div>


            <div class="btn-group mt-2 mb-2 dropright">
                <a type="button" class="btn btn-primary dropdown-toggle p-2 w-100" href="<?php echo base_url('EmployeeController/index') . '/' . $clientRecord[0]['id']; ?>">
                    All Employee <span class="caret"></span>
                </a>
            </div>
            <div class="btn-group mt-2 mb-2 dropright">
                <a type="button" class="btn btn-primary dropdown-toggle p-2 w-100" href="<?php echo base_url('ClientController/index3') . '/' . $clientRecord[0]['id']; ?>">
                    Configure <span class="caret"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row row-deck">
    <!-- CARD 1 -->
    <div class="col-xl-3 col-md-12">
        <div class="card ">
            <div class="card-header border-bottom">
                <div class="card-title">My apps</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="text-success fs-3"> <i class="fa fa-thumbs-up" style="color:yellow;"></i></span>
                        <span class="fs-4">
                            Verify
                        </span>
                    </div>
                    <div class="col-auto fs-3">
                        <!-- <a href="<?php echo base_url('verify') ?>"><i class="fa fa-gear"></i></a> -->
                        <a href="<?php echo base_url('ClientController/verify') . '/' . $clientRecord[0]['id']; ?>"><i class="fa fa-gear"></i></a>
                    </div>
                </div>
                <p></p>
                <div class="btn-group mt-2 mb-2 dropright ">
                    <a type="button" class="btn btn-secondary dropdown-toggle p-1 px-2 mx-3" href="<?php echo base_url('dashboard'); ?>">
                        View Dashboard <span class="caret"></span>
                    </a>
                </div>
            </div>

        </div>
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