<style>
    /* @media (min-width: 992px) {
        .modal-lg {
            max-width: 910px;
        }
    } */
</style>

<?php
// print_r($record);
// die();
?>
<style>
    .badge_success {
        background-color: green;
        color: green;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }

    .badge_danger {
        background-color: red;
        color: red;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }

    .badge_warning {
        background-color: yellow;
        color: yellow;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }

    #secondModal {
        overflow-y: auto;
    }

    .vl {
        border-left: 6px solid green;
        height: 100px;
    }
</style>

<form action="<?php echo base_url('EmployeeController/editLicenseStatus') ?>" id="user_frm" method="post" enctype="multipart/form-data">
    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($record) ? $record['id'] : '' ?>">

    <?php if ($record['is_license'] == 1) {
        $status = "<span class='text-success'>approved</span>";
    } elseif ($record['is_license'] == 2) {
        $status = "<span class='text-warning'>inProgress</span>";
    } else {
        $status = "<span class='text-danger'>rejected</span>";
    } ?>
    <!-- <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="first_name">Employee Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" value="<?= ($record['first_name']) ? $record['first_name'] . ' ' . $record['last_name'] : '' ?>" readonly>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="first_name">Pan Number</label>
                <div class="input-group">
                    <input type="text" class="form-control" value="<?= ($record['pan']) ? $record['pan'] : '' ?>" readonly>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="first_name">Feedback</label>
                <div class="input-group">
                    <textarea name="feedback" rows="4" class="form-control" value="<?= ($record['feedback']) ? $record['feedback'] : '' ?>" required></textarea>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="first_name">Upload Document</label>
                <div class="input-group">
                    <input type="file" name="feedback_doc" class="form-control" value="<?= ($record['feedback_doc']) ? $record['feedback_doc'] : '' ?>" accept=".pdf">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="last_name">Status</label>
                <div class="input-group">
                    <select name="status" id="status" class="form-control">
                        <option value="0"><a href="#"><span class="badge rounded-pill bg-danger">Not verified</span></a></option>
                        <option value="1"><span class="badge rounded-pill bg-success"></span>Verified</option>
                        <option value="2"><span class="badge rounded-pill bg-warning"></span>Pending</option>
                    </select>
                </div>
            </div>
        </div>

    </div> -->
    <div class="container text-center">
        <div class="row border-white border-1 rounded-2 mb-5 p-4" style="height: 100px; background-color:#e8ebf4;">
            <div class="col-4">
                <div style="text-align: left;">
                    <p class="text-black text-medium">Candidate name</p>
                    <h5 class="text-grey text-medium"><i class="fa fa-user-circle" style="font-size: 20px;"></i>&nbsp;&nbsp;<?= ($record['first_name']) ? $record['first_name'] . ' ' . $record['last_name'] : '' ?></h5>
                </div>
            </div>
            <div class="col-4">
                <div style="text-align: left;">
                    <p class="text-black text-medium">TAT</p>
                    <h5 class="text-grey text-medium"><i class="fa fa-clock-o" style="font-size: 22px;"></i>&nbsp;&nbsp;-17 days</h5>
                </div>
            </div>

            <div class="col-4">
                <div style="text-align: left;">
                    <p class="text-black text-medium">Case Status</p>
                    <h5 class="text-grey text-medium"><i class="fa fa-check" style="font-size: 20px;"></i>&nbsp;&nbsp;<?= $status ?></h5>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-9">

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <button class="btn btn-primary"> <?= (!empty($record)) ? 'Update' : 'Save'; ?></button>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div style="text-align: left;">
                    <label for="first_name">License number</label>
                    <h6 class="text-black text-bold"><?= $record['driving_lic'] ?></h6>
                </div>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div style="text-align: left;">
                    <label for="first_name">Full name</label>
                    <h6 class="text-black text-bold"><?= ($record['first_name']) ? $record['first_name'] . ' ' . $record['last_name'] : '' ?></h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div style="text-align: left;">
                    <label for="first_name">Date of birth</label>
                    <h6 class="text-black text-bold"><?= $record['dob'] ?></h6>
                </div>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

            </div>
        </div>
        <hr>
        <!-- <hr style="border-top: 1.5px solid #D0D0D0;"> -->
        <div class="row mt-5">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div style="text-align: left;">
                    <label for="first_name">Comments</label>
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ion-plus-round"></i> Add Comment
                        </button> -->
                        <button type="button" class="btn btn-primary" id="openSecondModal">
                            <i class="ion-plus-round"></i> Add Comment
                        </button>
                        <div id="modal_comment" style="display:none; max-width:fit-content" class="mt-2">
                        </div>

                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        </div> -->
                        <!-- <textarea id="myTextarea" class="form-control mt-4" rows="6" cols="200"></textarea><br /> -->

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div style="text-align: left;">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ion-plus-round"></i> Add Attachment
                        </button>
                        <!-- <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton"> -->
                        <div class="form-group fileInput mt-4">
                            <input type="file" name="attachment" class="dropify" data-height="200" />
                            <!-- <button type="submit">Upload</button> -->
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
            </div>
        </div>
        <hr>
        <!-- <hr style="border-top: 1.5px solid #D0D0D0;"> -->
        <div class='row'>
            <div class='col-md-10 col-sm-10 col-xs-10'>
            </div>
            <div class='col-md-2 col-sm-2 col-xs-2'>
                <button class="btn btn-primary float-right"> <?= (!empty($record)) ? 'Update' : 'Save'; ?></button>
            </div>
        </div>
    </div>
    <!-- <div class="modal-footer mt-3"> -->
    <!-- <button type="button" class="btn btn-primary" value="submit">Update</button> -->
    <!-- </div> -->
</form>

<!-- Second Modal -->
<div class="modal fade" id="secondModal" tabindex="-3" role="dialog" aria-labelledby="secondModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="secondModalLabel">Comments</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- Form to save data in the second modal -->
                <div class="row">
                    <div class="example">
                        <div class="form-group ">
                            <div class="row">
                                <p class="card-sub-title">Green</p>
                                <div class="col-6">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="1" class="selectgroup-input">
                                            <span class="selectgroup-button"><i class="mdi mdi-approval text-success"></i> license found</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="card-sub-title">Yellow</p>
                                <div class="col-8">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button"><i class="mdi mdi-alert-decagram text-warning"></i> insufficient information</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <p class="card-sub-title">Red</p>
                                <div class="col-10">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="3" class="selectgroup-input">
                                            <span class="selectgroup-button"><i class="mdi mdi-close-circle text-danger"></i> license not found</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="4" class="selectgroup-input">
                                            <span class="selectgroup-button"><i class="mdi mdi-close-circle text-danger"></i> license found but name mismatched</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="5" class="selectgroup-input">
                                            <span class="selectgroup-button"><i class="mdi mdi-close-circle text-danger"></i> fake license</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveDataBtn">Save</button>
            </div>
        </div>
    </div>
</div>


<script>
    $("#saveDataBtn").click(function() {
        var value = $("input:radio[name=value]:checked").val();
        // console.log(value);
        // alert(value);
        if (value == 1) {
            var str = "<input type='radio' name='status' value='1' id='status' class='selectgroup-input' checked> <span class='selectgroup-button'><i class='mdi mdi-approval text-success'></i> license found</span>";
        } else if (value == 2) {
            var str = "<input type='radio' name='status' value='2' id='status' class='selectgroup-input' checked> <span class='selectgroup-button'><i class='mdi mdi-alert-decagram text-warning'></i> insufficient information</span>";
        } else if (value == 3) {
            var str = "<input type='radio' name='status' value='3' id='status' class='selectgroup-input' checked> <span class='selectgroup-button'><i class='mdi mdi-close-circle text-danger'></i> license not found</span>";
        } else if (value == 4) {
            var str = "<input type='radio' name='status' value='4' id='status' class='selectgroup-input' checked> <span class='selectgroup-button'><i class='mdi mdi-close-circle text-danger'></i> license found but name mismatched</span>";
        } else if (value == 5) {
            var str = "<input type='radio' name='status' value='5' id='status' class='selectgroup-input' checked> <span class='selectgroup-button'><i class='mdi mdi-close-circle text-danger'></i> fake license</span>";
        }

        $("#modal_comment").show();
        $("#modal_comment").html(str);

    })
</script>

<!-- Second Modal -->
<script>
    $(document).ready(function() {
        // Hide the textarea initially
        $('#myTextarea').hide();

        // Show/hide the textarea on dropdown button click
        $('.dropdown-toggle').on('click', function() {
            $('#myTextarea').toggle();
        });
    });

    $(document).ready(function() {
        // Hide the textarea initially
        $('.fileInput').hide();

        // Show/hide the textarea on dropdown button click
        $('.dropdown-toggle2').on('click', function() {
            $('.fileInput').toggle();
        });
    });
</script>

<!-- Include Dropify JS -->
<script src="<?php echo base_url('assets/js/dropify.min.js'); ?>"></script>

<!-- Initialize Dropify -->
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>

<script>
    $(document).ready(function() {
        // Show the main modal when the page loads
        // $('#commonModal').modal('show');

        // Handle click event for opening the second modal
        $('#openSecondModal').click(function() {
            // Show the second modal
            $('#secondModal').modal('show');
        });

        // Handle click event for saving data from the second modal to the main modal
        $('#saveDataBtn').click(function() {
            var data = $('#dataInput').val();
            // $('#commonModal').text(data);
            $('#secondModal').modal('hide');
        });
    });
</script>