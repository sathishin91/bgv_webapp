<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
<?php
// echo "<pre>";
// print_r($clientRecord);
// die();
?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Configure</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('all-client') ?>">All Clients</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client-next') ?>">Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Configure</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
    <div class="col-md-12 col-xl-0">
        <div class="card">
            <!-- <div class="card-header ">
                <h3 class="card-title ">Employee card</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
                </div>
            </div> -->
            <!-- <div class="card-body text-center">
                <span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="<?php echo base_url('assets/images/users/18.jpg'); ?>"></span>
                <h4 class="h4 mb-0 mt-3">Apollo supply chain private limited
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</p>
            </div>
            <div class="card-footer text-center">
                <div class="row user-social-detail">
                    <a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div> -->
        </div>

    </div>

    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="tab-menu-heading border-bottom-0">
                        <div class="tabs-menu4 border-bottomo-sm">
                            <!-- Tabs -->
                            <nav class="nav d-sm-flex d-block">
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
                                    About
                                </a>
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab26">
                                    Setting
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab25">
                                <div class="row row-deck">
                                    <!-- CARD 1 -->
                                    <div class="col-xl-12 col-md-12">
                                        <div class="card ">
                                            <div class="card-header border-bottom">
                                                <!-- <div class="card-title">Orders</div> -->
                                                <div class="table-responsive">
                                                    <table class="table text-nowrap text-md-nowrap">
                                                        <!-- <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead> -->
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Image</b></td>
                                                                <td><b>Name</b></td>
                                                                <td><b>Contact Person</b></td>
                                                                <td><b>Location</b></td>
                                                                <td><b>Role</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="avatar avatar-xxl rounded cover-image cover-image" data-bs-image-src="<?php echo base_url('assets/images/users/18.jpg'); ?>"></span></td>
                                                                <td class="text-muted"><?= $clientRecord[0]['name'] ?></td>
                                                                <td class="text-muted"><?= $clientRecord[0]['contact_person'] ?></td>
                                                                <td class="text-muted"><?= $clientRecord[0]['location'] ?></td>
                                                                <td class="text-muted"><?= $clientRecord[0]['role'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p><?= $clientRecord[0]['description'] ?></p>
                                                <p>Completed my graduation in Arts from the well known and renowned institution of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was affiliated to M.S. University. I ranker in University exams from the same university from 1996-01.</p>
                                                <!-- <a href="<?php echo base_url('all-client-next'); ?>" class="btn btn-primary">Go somewhere</a> -->
                                                <p>
                                                    Worked as Professor and Head of the department at Sarda Collage, Rajkot, Gujarat from 2003-2015
                                                </p>
                                                <!-- <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                </p> -->

                                                <!-- <ul class="list-group list-group-flush">
                                                    <li class="nav-header disabled"><b>Education</b></li>
                                                    <li class="list-group-item">
                                                        Cras justo odio
                                                    </li>
                                                    <li class="list-group-item">
                                                        Dapibus ac facilisis in
                                                    </li>
                                                    <li class="list-group-item">
                                                        Morbi leo risus
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab26">
                                <!-- CARD 1 -->
                                <div class="col-md-12 col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3>Update Client</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- <form class="validate-form" method="post" action="<?php echo base_url('ClientController/editClient') ?>"> -->
                                            <form class="validate-form" id="validate-form" method="post" action="#">
                                                <input type="hidden" id="id" name="id" value="<?= $clientRecord[0]['id'] ?>" class="id">
                                                <div class="row ">
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="search-box">Organisation name<span class="text-danger"> *</span><span id="error_name" class="text-danger"></span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control name" id="name" name="name" placeholder="organisation name" value="<?= $clientRecord[0]['name'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="basic-addon6">Contact person<span class="text-danger"> *</span><span id="error_cp" class="text-danger"></span></label>
                                                            <div class="input-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control contact_person" id="contact_person" name="contact_person" placeholder="contact person" value="<?= $clientRecord[0]['contact_person'] ?>">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="separated-input">Additional address<span class="text-danger"> *</span><span id="error_aa" class="text-danger"></span></label>
                                                            <div class="row ">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control add_address" id="add_address" name="add_address" placeholder="address" value="<?= $clientRecord[0]['add_address'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="basic-addon4">Documents</label>
                                                            <div class="input-group">
                                                                <input type="file" class="form-control documents" id="documents" name="documents" placeholder="Search for..." value="<?= $clientRecord[0]['documents'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="basic-addon5">Location and sites<span class="text-danger"> *</span><span id="error_location" class="text-danger"></span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control location" id="location" name="location" placeholder="location" value="<?= $clientRecord[0]['location'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="basic-addon">Functions and roles<span class="text-danger"> *</span><span id="error_role" class="text-danger"></span></label>
                                                            <div class="input-group mb-3">
                                                                <input type="role" class="form-control role" id="role" name="role" placeholder="role" value="<?= $clientRecord[0]['role'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input class="btn btn-primary ajaxUpdate" type="submit" value="Update">
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

<script>
    $(document).ready(function() {
        $(document).on('click', '.ajaxUpdate', function() {
            $('#validate-form').submit(function(event) {
                event.preventDefault();

                var data = {
                    'id': $('.id').val(),
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
                            // $('#validate-form :input').val('');
                            $.toast({
                                heading: "Success",
                                // text: result.msg,
                                text: "Client Updated Succesfully.",
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
                                text: "Client Not Found.",
                                position: "top-right",
                                loaderBg: "#5ba035",
                                icon: "error"
                            });
                        }
                    }

                });

                // }
            });
        });

    });
</script>

<?= $this->endSection('scripts'); ?>