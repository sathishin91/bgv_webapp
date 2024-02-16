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
        <form class="validate-form" id="validate-form" method="post" action="<?php echo base_url('ClientController/addClient') ?>">

            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="search-box">Organisation Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="organisation name" maxlength="50" required>
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Contact Person</label>
                        <div class="input-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="contact_person" name="contact_person" maxlength="100" placeholder="contact person" required>
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="separated-input">Additional Address</label>
                        <div class="row ">
                            <div class="input-group">
                                <input type="text" class="form-control" id="add_address" name="add_address" placeholder="address" required>
                                <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon4">Documents</label>
                        <div class="input-group">

                            <input type="file" class="form-control" id="documents" name="documents" placeholder="" required accept=".pdf">
                            <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon5">Location and sites</label>
                        <!-- <div class="input-group">
                            <select class="form-control select2 form-select" data-placeholder="location">
                                <option label="Choose one"></option>
                                <option value="">location1</option>
                                <option value="">location2</option>
                                <option value="">location3</option>
                                <option value="">location4</option>
                            </select>
                        </div> -->
                        <input type="text" class="form-control select2" name="location" id="location" placeholder="location" required>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon">Functions and roles</label>
                        <!-- <div class="input-group mb-3">
                            <select class="form-control select2 form-select" data-placeholder="role">
                                <option label="Choose one"></option>
                                <option value="">role1</option>
                                <option value="">role2</option>
                                <option value="">role3</option>
                                <option value="">role4</option>
                            </select>
                        </div> -->
                        <input type="text" class="form-control select2" name="location" id="location" placeholder="roles" required>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon6">Description</label>
                        <div class="input-group">
                            <div class="input-group">
                                <textarea cols="30" rows="5" class="form-control" id="description" name="description" placeholder="description" required>
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
<script>
    $(function() {
        /********************
          user form validation
        ********************/
        $('#validate-form').validate({
            rules: {
                "name": {
                    required: true,
                    maxlength: 50
                },
                "contact_person": {
                    required: true,
                    maxlength: 50
                },
                "location": {
                    required: true
                },
                "contact": {
                    required: true,
                    number: true,
                    maxlength: 12,
                    minlength: 10
                },

            },
            messages: {
                "email": {
                    remote: "Email already exist."
                },
                "contact": {
                    number: "Please enter valid contact.",
                    maxlength: "Please enter valid contact.",
                    minlength: "Please enter valid contact."
                }
            },
        });

    });
</script>

<?= $this->endSection('scripts'); ?>