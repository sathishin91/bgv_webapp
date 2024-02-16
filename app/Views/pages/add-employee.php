<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>
<style>
    .staar {
        color: red;
    }
</style>

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
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <!-- <form class="validate-form" method="post" action="<?php echo base_url('ClientController/addEmployee') ?>"> -->
        <form class="validate-form" method="post">
            <input type="hidden" id="user_id" name="user_id" class="user_id" value="<?= $clientRecord[0]['id'] ?>">
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="search-box">First Name<span class="text-danger"> *</span><span id="error_fn" class="text-danger"></span></label>
                        <div class="input-group">
                            <input type="text" class="form-control text-capitalize first_name" id="first_name" name="first_name" placeholder="first name" maxlength="50">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Last Name<span class="text-danger"> *</span><span id="error_ln" class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize last_name" id="last_name" name="last_name" placeholder="last name" maxlength="50">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Father's Name<span class="text-danger"> *</span><span id="error_ftn" class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize father_name" id="father_name" name="father_name" placeholder="Father's name" maxlength="50">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="separated-input">Mobile<span class="text-danger"> *</span><span id="error_mob" class="text-danger "></span></label>
                        <div class="row">
                            <div class="input-group">
                                <input type="number" maxlength="10" class="form-control mobile" id="mobile" name="mobile" placeholder="Mobile no." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="separated-input">Alternate Mobile<span id="error_mob" class="text-danger "></span></label>
                        <div class="row">
                            <div class="input-group">
                                <input type="number" maxlength="10" class="form-control mobile" id="mobile" name="mobile" placeholder="Alternate Mobile no." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon4">Email<span class="text-danger"> *</span><span id="error_email" class="text-danger "></span></label>
                        <div class="input-group">
                            <input type="text" class="form-control email" id="email" name="email" placeholder="Email">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon4">Location<span class="text-danger"> *</span><span id="error_location" class="text-danger "></span></label>
                        <div class="input-group">
                            <input type="text" class="form-control location" id="location" name="location" placeholder="Location">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon5">DOB<span class="text-danger"> *</span><span id="error_dob" class="text-danger "></span></label>
                        <div class="input-group">
                            <input type="date" class="form-control dob" id="dob" name="dob">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon">Joining Date<span class="text-danger"> *</span><span id="error_jd" class="text-danger "></span></label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control join_date" id="join_date" name="join_date">
                        </div>
                    </div>
                </div>
                <!-- pan details -->
                <label class="form-label" for="basic-addon2">PAN Details<span class="text-danger"> *</span><span id="error_pan" class="text-danger "></span></label>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control pan" id="pan" name="pan" placeholder="PAN CARD" value="" maxlength="10" style="text-transform: uppercase">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control pan_ftn text-capitalize " id="pan_ftn" name="pan_ftn" placeholder="Father's Name (on Pan Card)" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control pan_dob" id="pan_dob" name="pan_dob">
                        </div>
                    </div>
                </div>
            </div>

            <!-- aadhar details -->
            <div class="row">
                <label class="form-label" for="basic-addon3">Aadhar Details<span class="text-danger"> *</span><span id="error_aadhar" class="text-danger "></span></label>

                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control aadhar" id="aadhar" name="aadhar" placeholder="AADHAR CARD" maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control aadhar_ftn text-capitalize" id="aadhar_ftn" name="aadhar_ftn" placeholder="Father's Name (on Aadhar Card)">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control aadhar_dob" id="aadhar_dob" name="aadhar_dob">
                        </div>
                    </div>

                </div>

            </div>

            <!-- voter id details -->
            <div class="row">
                <label class="form-label" for="basic-addon3">Voter Id Details<span class="text-danger"> *</span><span id="error_aadhar" class="text-danger "></span></label>

                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control voter_id" id="voter_id" name="voter_id" placeholder="VOTER ID" maxlength="20" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control voter_ftn text-capitalize" id="voter_ftn" name="voter_ftn" placeholder="Father's Name (on VoterID Card)">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control voter_dob" id="voter_dob" name="voter_dob">
                        </div>
                    </div>

                </div>

            </div>

            <!-- driving license details -->
            <div class="row">
                <label class="form-label" for="basic-addon3">Driving license Details<span class="text-danger"> *</span><span id="error_aadhar" class="text-danger "></span></label>

                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control driving_lic" id="driving_lic" name="driving_lic" placeholder="DRIVING LICENSE" maxlength="20" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control dl_ftn text-capitalize" id="dl_ftn" name="dl_ftn" placeholder="Father's Name (on Driving License)">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control dl_dob" id="dl_dob" name="dl_dob">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-10">
                </div>
                <div class="col-md-12 col-lg-2">
                    <div class="form-group">
                        <div class="input-group ">
                            <input class="btn btn-primary ajaxAdd p-1" type="submit" value="Add" style="width: 75px;">
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

<script>
    $(document).ready(function() {
        $(document).on('click', '.ajaxAdd', function() {
            var panRegex = /^([a-zA-Z]{5})([0-9]{4})([a-zA-Z]{1})$/;
            var pan = $('.pan').val();
            var aadharRegex = /^\d{12}$/;
            var aadhar = $('.aadhar').val();

            if ($.trim($('.first_name').val()).length == 0) {
                error_fn = "Please enter first name";
                $('#error_fn').text(error_fn);

            } else {
                error_fn = "";
                $('#error_fn').text(error_fn);

            }

            if ($.trim($('.last_name').val()).length == 0) {
                error_ln = "Please enter last name";
                $('#error_ln').text(error_ln);

            } else {
                error_ln = "";
                $('#error_ln').text(error_ln);

            }

            if ($.trim($('.mobile').val()).length == 0) {
                error_mob = "Please enter mobile number";
                $('#error_mob').text(error_mob);

            } else {
                error_mob = "";
                $('#error_mob').text(error_mob);

            }

            if ($.trim($('.email').val()).length == 0) {
                error_email = "Please enter valid email";
                $('#error_email').text(error_email);

            } else {
                error_email = "";
                $('#error_email').text(error_email);

            }

            if ($.trim($('.dob').val()).length == 0) {
                error_dob = "Please enter date of birth";
                $('#error_dob').text(error_dob);

            } else {
                error_dob = "";
                $('#error_dob').text(error_dob);

            }

            if ($.trim($('.join_date').val()).length == 0) {
                error_jd = "Please enter joining date";
                $('#error_jd').text(error_jd);

            } else {
                error_jd = "";
                $('#error_jd').text(error_jd);

            }

            if ($.trim($('.pan').val()).length == 0) {
                error_pan = "Please enter pan number";
                $('#error_pan').text(error_pan);

            } else {
                error_pan = "";
                $('#error_pan').text(error_pan);

            }

            if ($.trim($('.aadhar').val()).length == 0) {
                error_aadhar = "Please enter aadhar number";
                $('#error_aadhar').text(error_aadhar);

            } else {
                error_aadhar = "";
                $('#error_aadhar').text(error_aadhar);

            }

            if (pan.search(panRegex) == -1) {
                error_pan = "Please enter valid pan number";
                $('#error_pan').text(error_pan);

            } else {
                error_pan = "";
                $('#error_pan').text(error_pan);
            }


            if (aadhar.search(aadharRegex) == -1) {
                error_aadhar = "Please enter valid aadhar number";
                $('#error_aadhar').text(error_aadhar);

            } else {
                error_aadhar = "";
                $('#error_aadhar').text(error_aadhar);
            }



            if (error_fn != '' || error_ln != '' || error_mob != '' || error_email != '' || error_dob != '' || error_jd != '' || error_pan != '' || error_aadhar != '') {
                return false;

            } else {

                var data = {
                    'user_id': $('.user_id').val(),
                    'first_name': $('.first_name').val(),
                    'last_name': $('.last_name').val(),
                    'mobile': $('.mobile').val(),
                    'email': $('.email').val(),
                    'dob': $('.dob').val(),
                    'join_date': $('.join_date').val(),
                    'pan': $('.pan').val(),
                    'aadhar': $('.aadhar').val(),
                    'voter_id': $('.voter_id').val(),
                    'driving_lic': $('.driving_lic').val(),
                }
                // alert('hello')

                $.ajax({
                    method: 'post',
                    url: '<?php echo base_url('ClientController/addEmployee') ?>',
                    data: data,
                    success: function(response) {
                        if (response.status == "1000" && response.status != '') {
                            $.toast({
                                heading: "Success",
                                text: result.message,
                                position: "top-right",
                                loaderBg: "#5ba035",
                                icon: "success"
                            });
                            // setTimeout(function() {
                            //     location.reload();
                            // }, 3000);

                        } else {
                            $.toast({
                                heading: "Error",
                                text: 'not added',
                                position: "top-right",
                                loaderBg: "#5ba035",
                                icon: "error"
                            });
                        }
                    }

                });

            }


        })

    });
</script>

<?= $this->endSection('scripts'); ?>