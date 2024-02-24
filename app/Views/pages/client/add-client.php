<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Add Client</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Add Client</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <!-- <div class="card-header border-bottom">
        <h3 class="card-title">Input Groups</h3>
    </div> -->
    <div class="card-body">
        <form class="validate-form" id="validate-form" method="post" action="#">
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="search-box">Organisation Name<span class="text-danger"> *</span><span id="error_name" class="text-danger"></span></label>
                        <div class="input-group">
                            <input type="text" class="form-control text-capitalize name" id="name" name="name" placeholder="organisation name" maxlength="50">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Contact Person<span class="text-danger"> *</span><span id="error_cp" class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize contact_person " id="contact_person" name="contact_person" maxlength="100" placeholder="contact person name or number">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="separated-input">Additional Address<span class="text-danger"> *</span><span id="error_aa" class="text-danger"></span></label>
                        <div class="row ">
                            <div class="input-group">
                                <input type="text" class="form-control text-capitalize add_address" id="add_address" name="add_address" placeholder="address">
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon4">Documents</label>
                        <div class="input-group">
                            <input type="file" class="form-control document" id="documents" name="documents" accept=".pdf, .docx">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon5">Location and sites<span class="text-danger"> *</span><span id="error_location" class="text-danger"></span></label>
                        <input type="text" class="form-control location text-capitalize" name="location" id="location" placeholder="location">
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon">Functions and roles<span class="text-danger"> *</span><span id="error_role" class="text-danger"></span></label>
                        <input type="text" class="form-control role text-capitalize" name="role" id="role" placeholder="roles">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Description</label>
                        <div class="input-group">
                            <div class="input-group">
                                <textarea cols="30" rows="5" class="form-control description" id="description" name="description" placeholder="description">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input class="btn btn-primary ajaxAdd px-3" type="submit" value="Add">
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
            $('#validate-form').submit(function(event) {
                event.preventDefault();

                if ($.trim($('.name').val()).length == 0) {
                    error_name = "Please enter organisation name";
                    $('#error_name').text(error_name);

                } else {
                    error_name = "";
                    $('#error_name').text(error_name);
                }

                if ($.trim($('.contact_person').val()).length == 0) {
                    error_cp = "Please enter contact person name or number";
                    $('#error_cp').text(error_cp);

                } else {
                    error_cp = "";
                    $('#error_cp').text(error_cp);

                }
                if ($.trim($('.add_address').val()).length == 0) {
                    error_aa = "Please enter additional address";
                    $('#error_aa').text(error_aa);

                } else {
                    error_aa = "";
                    $('#error_aa').text(error_aa);

                }

                if ($.trim($('.location').val()).length == 0) {
                    error_location = "Please enter location";
                    $('#error_location').text(error_location);

                } else {
                    error_location = "";
                    $('#error_location').text(error_location);

                }

                if ($.trim($('.role').val()).length == 0) {
                    error_role = "Please enter role and function";
                    $('#error_role').text(error_role);

                } else {
                    error_role = "";
                    $('#error_role').text(error_role);

                }

                if (error_name != '' || error_cp != '' || error_aa != '' || error_location != '' || error_role != '') {
                    return false;

                } else {

                    var data = {
                        'name': $('.name').val(),
                        'contact_person': $('.contact_person').val(),
                        'add_address': $('.add_address').val(),
                        'location': $('.location').val(),
                        'role': $('.role').val(),
                        'description': $('.description').val(),
                        // 'document': $('.document')[0].files[0],
                    }

                    $.ajax({
                        method: 'post',
                        url: '<?php echo base_url('ClientController/addClient') ?>',
                        data: data,
                        success: function(response) {
                            if (response.status == "1000" && response.status != '') {
                                $('#validate-form :input').val('');
                                $.toast({
                                    heading: "Success",
                                    // text: result.msg,
                                    text: "Client Added Succesfully.",
                                    position: "top-right",
                                    loaderBg: "#5ba035",
                                    icon: "success"
                                });
                                // setTimeout(function() {
                                //     location.reload();
                                // }, 3000);

                            } else if (response.status == "1001" && response.status != '') {
                                $.toast({
                                    heading: "Error",
                                    text: "Client Not Added Succesfully.",
                                    position: "top-right",
                                    loaderBg: "#5ba035",
                                    icon: "error"
                                });
                            }
                        }

                    });

                }
            });
        });

    });
</script>

<?= $this->endSection('scripts'); ?>