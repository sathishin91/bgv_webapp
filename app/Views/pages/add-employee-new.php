<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Add Employee</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">All Clients</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add Employee</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<div class="card">
    <!-- <div class="card-header border-bottom">
        <h3 class="card-title">Input Groups</h3>
    </div> -->
    <div class="card-body">
        <form class="validate-form" method="post" action="<?php echo base_url('ClientController/addEmployee') ?>">

            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="search-box">First Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name" required>
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Last Name</label>
                        <div class="input-group">

                            <div class="input-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name" required>
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="separated-input">Mobile</label>
                        <div class="row ">

                            <div class="input-group">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile no." required>
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon4">Email</label>
                        <div class="input-group">

                            <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon5">DOB</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon">Joining Date</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="join_date" name="join_date" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon2">PAN</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="pan" name="pan" placeholder="pan card details">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon3">Aadhar</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="aadhar card details">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon3">Voter ID</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="voter_id" name="voter_id" placeholder="voter id details">


                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon3">Driving License</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="driving_lic" name="driving_lic" placeholder="driving license">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input class="btn btn-primary" type="submit" value="Add">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>

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