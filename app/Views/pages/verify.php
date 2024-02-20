<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>
<style>
    .tag {
        display: block;
        /* padding: 1px 2px; */
        margin: 2px;
        background-color: lightgray;
        color: #fff;
        border-radius: 8px;
        font-size: 10px;
    }

    .tab {
        display: none;
    }

    .active-tab {
        display: block;
    }
</style>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
<?php
// echo '<pre>';
// print_r($clientRecord);
// print_r($records);

// die();
?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Verification</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">All Clients</li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Verify</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<!--Row open-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Form Wizard</h3>
            </div>
            <div class="card-body">
                <div id="smartwizard-3">
                    <ul>
                        <li><a href="#step-10">Select Services</a></li>
                        <li><a href="#step-11">Mapping Services</a></li>
                        <li><a href="#step-12">Tat Mapping</a></li>
                    </ul>
                    <div>
                        <div id="step-10">
                            <!-- Select Services Tab -->
                            <!-- <form action="#"> -->
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Verification</th>
                                            <th></th>
                                            <th>Reinitiate</th>
                                            <th>Check Permission</th>
                                            <th>Expiry Days</th>
                                        </tr>
                                    </thead>
                                    <tbody id="details" class="selectChk">
                                        <?php
                                        if (!empty($records)) :
                                            foreach ($records as $record) : ?>
                                                <tr>
                                                    <!-- <input type="hidden" class="client_id" value="<?= $clientRecord[0]['id'] ?>"> -->
                                                    <td>
                                                        <input type="checkbox" class="service_id" data-id="<?= $record['id'] ?>" value="<?= $record['id'] ?>">
                                                        <span>
                                                            <?= $record['name'] ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input name="service_chk" class="form-check-input service_chk" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td id="<?= $record['id'] ?>">
                                                        <div class="form-check">
                                                            <input class="form-check-input service_permission" type="radio" name="service_permission<?= $record['id'] ?>" value="1" data-id="<?= $record['id'] ?>">
                                                            <label class="form-check-label">
                                                                Auto Trigger
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input service_permission" type="radio" name="service_permission<?= $record['id'] ?>" value="2" data-id="<?= $record['id'] ?>">
                                                            <label class="form-check-label">
                                                                Approval
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control service_days" value="365" name="service_days" data-id="<?= $record['id'] ?>" style="width: 100px;">
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                        else :
                                            ?>
                                            <tr>
                                                <td colspan="7" align="center">No record found</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <!-- <div class="row mb-3">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <button class="btn btn-primary next-btn" id="submit_service">Verify <span><i class="fa fa-angle-double-right"></i></span>
                                            </button>
                                        </div>
                                    </div> -->
                            </div>
                            <!-- </form> -->
                            <!-- Select Services Tab End -->
                        </div>
                        <div id="step-11">
                            <!-- Mapping Services Tab -->
                            <!-- <form> -->
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap" id="dataTable1">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th>Verification</th>
                                                <th></th>
                                                <th>All tags</th>
                                                <th>Include tags</th>
                                                <th>Exclude tags</th>
                                            </tr>
                                        </thead>
                                    </thead>
                                    <tbody id="details" class="selectedDataTable">
                                    </tbody>
                                </table>
                                <!-- <div class="row mb-3">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <button class="btn btn-primary next-btn" id="submit_service">Verify <span><i class="fa fa-angle-double-right"></i></span>
                                            </button>
                                        </div>
                                    </div> -->
                            </div>
                            <!-- </form> -->
                            <!-- Mapping Services Tab End -->
                        </div>
                        <div id="step-12">
                            <!-- Tat Mapping Tab -->
                            <!-- <form action="#"> -->
                            <div class="table-responsive">
                                <table class="table  border text-nowrap text-md-nowrap" id="dataTable2">
                                    <thead>
                                        <tr>
                                            <th>Verification</th>
                                            <th></th>
                                            <th>Turn aound time(TAT)</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="details" class="selectedDataTable2">
                                    </tbody>
                                </table>
                                <!-- <div class="row mb-3">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <button type="button" class="btn btn-primary next-btn" id="submit_service">Verify <span><i class="fa fa-angle-double-right"></i></span>
                                        </button>
                                    </div>
                                </div> -->
                            </div>
                            <!-- </form> -->
                            <!-- Tat Mapping Tab End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row closed-->

<!-- Tag Modal -->
<div class="modal fade" id="tagModal" tabindex="-3" role="dialog" aria-labelledby="tagModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tagModalLabel">Tags</h5>
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
                                <!-- <p class="card-sub-title">Green</p> -->
                                <div class="col-6">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="1" class="selectgroup-input">
                                            <span class="selectgroup-button">ID_ADD_CRC_EMP</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <p class="card-sub-title">Yellow</p> -->
                                <div class="col-8">
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button">ID_ADD_CRC</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<!-- FORM WIZARD JS-->
<script src="<?php echo base_url('assets/plugins/formwizard/jquery.smartWizard.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/formwizard/fromwizard.js'); ?>"></script>

<!-- INTERNAl JQUERY.STEPS JS -->
<script src="<?php echo base_url('assets/plugins/jquery-steps/jquery.steps.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

<!-- INTERNAL ACCORDION-WIZARD-FORM JS-->
<script src="<?php echo base_url('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/form-wizard.js'); ?>"></script>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<script>
    $("#saveBtn").click(function() {
        var value = $("input:radio[name=value]:checked").val();
        var element = document.getElementById('tag_container');
        // var itemId = element.getAttribute('data-id');

        // console.log('data-id:', itemId);

        // Get the tags container element
        if (value == 1) {
            var tagsContainer = document.getElementById('tag_container');

            var tagElement = document.createElement('span');
            tagElement.classList.add('tag');
            tagElement.textContent = 'ID_ADD_CRC_EMP';
        }

        if (value == 2) {
            var tagsContainer = document.getElementById('tag_container');

            var tagElement = document.createElement('span');
            tagElement.classList.add('tag');
            tagElement.textContent = 'ID_ADD_CRC';

        }

        // Append the tag element to the container
        tagsContainer.appendChild(tagElement);

        // $("#modal_comment").show();
        // $("#modal_comment").html(str);


    })

    function removeTag() {
        // Get the tags cell
        var tagsCell = document.getElementById('tag_container');

        // Get the last child (assuming the last added tag is the one to remove)
        var lastTag = tagsCell.lastChild;

        // Remove the last tag
        if (lastTag) {
            tagsCell.removeChild(lastTag);
        }
    }
</script>

<script>
    $(document).ready(function() {
        var data = [{
                id: 1,
                name: 'PAN'
            },
            {
                id: 2,
                name: 'Aadhar'
            },
            {
                id: 3,
                name: 'Voter ID'
            },
            {
                id: 4,
                name: 'Driving License'
            },
            {
                id: 5,
                name: 'Physical Address'
            },
            {
                id: 6,
                name: 'Police Verification'
            },
            {
                id: 7,
                name: 'Education'
            },
            {
                id: 8,
                name: 'Employment'
            },
            {
                id: 9,
                name: 'Credit'
            },
            {
                id: 10,
                name: 'Reference'
            },
            // Add more data as needed
        ];
        $(document).on('change', '.selectChk input[type="checkbox"]', function() {
            // alert()
            var selectedData = [];

            $('.selectChk input[type="checkbox"]:checked').each(function() {
                var itemId = $(this).data('id');
                var item = data.find(function(item) {
                    return item.id == itemId;
                });
                if (item) {
                    selectedData.push(item);
                }
            });

            // Update the second table with selected data
            updateSelectedDataTable(selectedData);
        });

        // Function to update the second table with selected data
        function updateSelectedDataTable(selectedData) {
            var selectedDataTable = $('.selectedDataTable');
            var selectedDataTable2 = $('.selectedDataTable2');

            selectedDataTable.empty();
            selectedDataTable2.empty();

            selectedData.forEach(function(item) {
                // selectedDataTable.append('<tr><td>  <span>' + item.name + ' </span></td><td></td><td><div class="form-check"> <input name = "map_all_tags" class = "form-check-input map_all_tags" type = "checkbox" id = "' + item.id + '"></div></td><td><a href="javascript:void(0)" id="" onclick="addTag(' + item.id + ')"><i class="fa fa-plus"></i ></a><div id = "tagsRow' + item.id + '"class = "map_include_tags[]" ></div></td><td><span><i class="fa fa-minus map_exclude_tags[]"></i></span></td></tr>');
                selectedDataTable.append('<tr><td><input type="checkbox" class="map_id" data-id="' + item.id + '" value="' + item.id + '" checked style="display: none;"><span>' + item.name + ' </span></td><td></td><td><div class="form-check"> <input name = "map_all_tags" class = "form-check-input map_all_tags" type = "checkbox" id = "' + item.id + '"></div></td><td id="tag_container" data-id="' + item.id + '"><a href="javascript:void(0)" id="openTagModal" data-id="' + item.id + '" onclick="openTagModal()" type="button"><i class="fa fa-plus"></i></a> <div id="modal_comment" style="display:none; width:auto" class="mt-1"></div></td><td><a href="javascript:void(0)" onclick="removeTag()" type="button"><i class="fa fa-minus"></i></a></td></tr>');

                selectedDataTable2.append('<tr><td><input type="checkbox" class="map_id1" data-id="' + item.id + '" value="' + item.id + '" checked style="display: none;"><span>' + item.name + ' </span></td><td></td><td> <input type="text" class="form-control tat_map_time" value="1" style="width:50px;"> </td><td>  <select class = "form-control form-select tat_map_days" name = "tat_map_days" style = "width:175px;"> <option label = "Days"> </option> <option value = "1 day"> 1 day </option> <option value = "1 month"> 1 month </option> <option value = "1 year"> 1 year </option> </select> </td></tr> ');
                // selectedDataTable.append('<tr><td>' + item.id + '</td><td>' + item.name + '</td></tr>');
            });

        }
    });
</script>

<script type="text/javascript">
    function jsonify() {
        var rows = $('table > tbody > tr');
        var a = [];

        $("#dataTable > tbody > tr").each(function() {
            if ($(this).find('.service_id').is(':checked')) {

                var currentRow = $(this);

                var service_id = currentRow.find('.service_id').val();
                var client_id = currentRow.find('.client_id').val();

                var reinitiate = 0;

                if (currentRow.find('.service_chk').is(':checked')) {
                    reinitiate = 1;
                } else {
                    reinitiate = 0;
                }

                var permission = currentRow.find(".service_permission:checked").val();
                var exp_days = currentRow.find('.service_days').val();

                var all_tags = 0;
                $("#dataTable1 > tbody > tr").each(function() {

                    var currentRow1 = $(this);
                    if (currentRow1.find(".map_id").val() == service_id) {
                        if (currentRow1.find(".map_all_tags:checked").is(':checked')) {
                            all_tags = 1;
                        } else {
                            all_tags = 0;
                        }
                    }
                });

                var tat_time = 0;
                var tat_days = 0;
                $("#dataTable2 > tbody > tr").each(function() {
                    var currentRow2 = $(this);
                    if (currentRow2.find(".map_id1").val() == service_id) {
                        tat_time = currentRow2.find(".tat_map_time").val();
                        tat_days = currentRow2.find(".tat_map_days").val();
                    }
                });

                var x = {
                    service_id: service_id,
                    reinitiate: reinitiate,
                    permission: permission,
                    exp_days: exp_days,
                    all_tags: all_tags,
                    tat_time: tat_time,
                    tat_days: tat_days,
                };
                a.push(x);
            }

        });

        var c = JSON.stringify(a);
        return c;
    }

    $(function() {
        $('#submit_service').click(function() {
            details = jsonify();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('ClientController/verification') ?>',
                dataType: "html",
                data: {
                    details: details,
                    id: '<?= $clientRecord[0]['id'] ?>'
                },
                success: function(response) {
                    if (response.status == "1000" && response.status != '') {
                        $.toast({
                            heading: "Success",
                            text: "Verified Successfully.",
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
                            text: "Not Verified Successfully!",
                            position: "top-right",
                            loaderBg: "#5ba035",
                            icon: "error"
                        });
                    }
                }
            });
        });

    });
</script>


<script>
    // submitForms = function() {
    //     document.getElementById("form1").submit();
    //     document.getElementById("form2").submit();
    // }

    function addTag(itemId) {
        // alert(itemId)
        $.ajax({
            url: '',
            type: 'GET',
            success: function(data) {
                // Update modal content with fetched data
                // $('#myModal .modal-body').html(data);

                // Open the modal
                $('#myModal').modal('show');
            },
            error: function(error) {
                console.error('Error fetching modal content:', error);
            }
        });

        // // Get the tags container element
        // var tagsContainer = document.getElementById('tagsRow' + itemId);

        // // Create a new tag element
        // var tagElement = document.createElement('span');
        // tagElement.classList.add('tag');
        // tagElement.textContent = 'ID_ADD_CRC_EMP';

        // // Append the tag element to the container
        // tagsContainer.appendChild(tagElement);


    }
</script>


<script>
    function openTagModal() {
        // alert()
        $('#tagModal').modal('show');

        // Get the tags container element
        // var tagsContainer = document.getElementById('tagsRow2' + itemId);

        // // Create a new tag element
        // var tagElement = document.createElement('span');
        // tagElement.classList.add('tag');
        // tagElement.textContent = 'ID_ADD_CRC_EMP';

        // // Append the tag element to the container
        // tagsContainer.appendChild(tagElement);
    }
</script>

<script>
    $(document).ready(function() {

        // Handle click event for saving data from the second modal to the main modal
        $('#saveBtn').click(function() {
            var data = $('#dataInput').val();
            // $('#commonModal').text(data);
            $('#tagModal').modal('hide');
        });
    });
</script>
<?= $this->endSection('scripts'); ?>