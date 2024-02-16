<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">All Clients</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Dashboard</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Line chart</h3>
            </div>
            <div class="card-body">
                <div id="echart1" class="chartsh"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <!-- <div class="card-header border-bottom">
                <h3 class="card-title">Combination of Line & Bar Chart</h3>
            </div> -->
            <div class="card-body">
                <p>Filter by -</p>
                <form action="">
                    <div class="form-group">
                        <label for="" class="d-block"><b>Gender:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="male" class="form-check-input">
                            <label for="inlineCheckbox1" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="female" class="form-check-input">
                            <label for="inlineCheckbox2" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="other" class="form-check-input">
                            <label for="inlineCheckbox3" class="form-check-label">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Entity type:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox1" value="employee" class="form-check-input">
                            <label for="employeeCheckbox1" class="form-check-label">Employee</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox2" value="tenant" class="form-check-input">
                            <label for="employeeCheckbox2" class="form-check-label">Tenant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox3" value="business" class="form-check-input">
                            <label for="employeeCheckbox3" class="form-check-label">Business Associate</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Current profile status:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="draftCheckbox" value="draft" class="form-check-input">
                            <label for="draftCheckbox" class="form-check-label">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="activeCheckbox" value="active" class="form-check-input">
                            <label for="activeCheckbox" class="form-check-label">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inactiveCheckbox" value="inactive" class="form-check-input">
                            <label for="inactiveCheckbox" class="form-check-label">Inactive(Terminated)</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Current profile status:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="fulltimeCheckbox" value="fulltime" class="form-check-input">
                            <label for="fulltimeCheckbox" class="form-check-label">Full time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="parttimeCheckbox" value="parttime" class="form-check-input">
                            <label for="parttimeCheckbox" class="form-check-label">Part time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="contractorCheckbox" value="contractor" class="form-check-input">
                            <label for="contractorCheckbox" class="form-check-label">Contractor</label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 CLOSED -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<!-- ECHART JS -->
<script src="<?php echo base_url('assets/plugins/echarts/echarts.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/echarts.js'); ?>"></script>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>