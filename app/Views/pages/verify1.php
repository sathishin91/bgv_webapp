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
<div class="col-md-12 col-xl-12">
    <div class="card">

        <div class="card-body p-2">
            <div class="panel panel-primary">
                <div class="tab-menu-heading border-bottom-0">
                    <div class="tabs-menu4 border-bottomo-sm">
                        <!-- Tabs -->
                        <nav class="nav d-sm-flex d-block nav-tabs">
                            <a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
                                Select Services
                            </a>
                            <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab26">
                                Mapping Services
                            </a>
                            <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab27">
                                Tat Mapping
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <!-- Select Services Tab -->
                        <div class="tab-pane active tab" id="tab25">
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
                                <div class="row mb-3">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <button class="btn btn-primary next-btn" id="submit_service">Verify <span><i class="fa fa-angle-double-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="btn btn-primary form-control floas" id="submit">Verify</button> -->

                        </div>
                        <!-- Mapping Services Tab -->
                        <div class="tab-pane tab" id="tab26">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap">
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
                                    <tbody id="details1" class="selectedDataTable">
                                    </tbody>
                                </table>

                                <h3 class="card-title"><b>Address verification</b></h3>
                                <table class="table  border text-nowrap text-md-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Address verification</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="checkbox mapping_phy_chk" data-id="<?= $record['id'] ?>" value="<?= $record['id'] ?>">
                                                <span>
                                                    Physical Verification
                                                </span>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input name="mapping_phy_alltag" class="form-check-input mapping_phy_alltag" type="checkbox" value="1" id="<?= $record['id'] ?>">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascirpt:void(0)" onclick="addTag1(<?= $record['id'] ?>)"><i class="fa fa-plus"></i></a>
                                                <div id="tagsRow1<?= $record['id'] ?>" class="mapping_phy_includetags[]">
                                                </div>
                                                <!-- <span><i class="fa fa-plus"></i></span> -->
                                            </td>
                                            <td>
                                                <span><i class="fa fa-minus mapping_phy_excludetags[]"></i></span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="checkbox mapping_digi_chk" data-id="<?= $record['id'] ?>" value="<?= $record['id'] ?>">
                                                <span>
                                                    Digital
                                                </span>
                                            </td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input name="mapping_digiadd_chk" class="form-check-input mapping_digi_alltag" type="checkbox" value="1" id="<?= $record['id'] ?>">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascirpt:void(0)" onclick="addTag2(<?= $record['id'] ?>)"><i class="fa fa-plus"></i></a>
                                                <div id="tagsRow2<?= $record['id'] ?>" class="mapping_digi_includetags[]">
                                                </div>
                                                <!-- <span><i class="fa fa-plus"></i></span> -->
                                            </td>
                                            <td>
                                                <span><i class="fa fa-minus mapping_digi_excludetags[]"></i></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mb-3">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <button class="btn btn-primary next-btn" id="submit_service">Verify <span><i class="fa fa-angle-double-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tat Mapping Tab -->
                        <div class="tab-pane tab" id="tab27">
                            <div class="table-responsive">
                                <table class="table  border text-nowrap text-md-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Verification</th>
                                            <th></th>
                                            <th>Turn aound time(TAT)</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="details2" class="selectedDataTable2">
                                    </tbody>
                                </table>

                                <h3 class="card-title"><b>Address verification</b></h3>
                                <table class="table  border text-nowrap text-md-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Permanent address</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="checkbox" data-id="<?= $record['id'] ?>" value="<?= $record['id'] ?>">
                                                <span>
                                                    Physical verification
                                                </span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" value="1" style="width:50px;">
                                            </td>
                                            <td>
                                                <select class="form-control form-select" data-placeholder="role" id="days" name="days" style="width:175px;">
                                                    <option label="Days"></option>
                                                    <option value="1 day">1 day</option>
                                                    <option value="1 month">1 month</option>
                                                    <option value="1 year">1 year</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="checkbox" data-id="<?= $record['id'] ?>" value="<?= $record['id'] ?>">
                                                <span>
                                                    Digital
                                                </span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" value="1" style="width:50px;" name="add_input">
                                            </td>
                                            <td>
                                                <select class="form-control form-select" data-placeholder="role" id="" name="add_days" style="width:175px;">
                                                    <option label="Days"></option>
                                                    <option value="1 day">1 day</option>
                                                    <option value="1 month">1 month</option>
                                                    <option value="1 year">1 year</option>
                                                </select>
                                            </td>
                                            <td></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- COL END -->

<!-- END ROW -->
<!-- <div class="modal-content" id="myModal">
    <div class="modal-header">
        <h5 class="modal-title">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div> -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<script>

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
                selectedDataTable.append('<tr><td>  <span>' + item.name + ' </span></td><td></td><td><div class="form-check"> <input name = "map_all_tags" class = "form-check-input map_all_tags" type = "checkbox" id = "' + item.id + '"></div></td><td><a href="javascript:void(0)" id="" onclick="addTag(' + item.id + ')"><i class="fa fa-plus"></i ></a><div id = "tagsRow' + item.id + '"class = "map_include_tags[]" ></div></td><td><span><i class="fa fa-minus map_exclude_tags[]"></i></span></td></tr>');

                selectedDataTable2.append('<tr><td>  <span>' + item.name + ' </span></td><td></td><td> <input type="text" class="form-control tat_map_time" value="1" style="width:50px;"> </td><td>  <select class = "form-control form-select tat_map_days" name = "tat_map_days" style = "width:175px;"> <option label = "Days"> </option> <option value = "1 day"> 1 day </option> <option value = "1 month"> 1 month </option> <option value = "1 year"> 1 year </option> </select> </td></tr> ');
                // selectedDataTable.append('<tr><td>' + item.id + '</td><td>' + item.name + '</td></tr>');
            });

        }
    });
</script>

<script type="text/javascript">
    function jsonify() {
        var rows = $('#details tr');
        var a = [];

        rows.each(function() {
            if ($(this).find('.service_id').is(':checked')) {
                var service_id = $(this).find('.service_id').val();
                var client_id = $(this).find('.client_id').val();

                // var map_id = $(this).find('.map_id').val();
                // var tat_map_id = $(this).find('.tat_map_id').val();

                if ($(this).find('.service_chk').is(':checked')) {
                    var reinitiate = 1
                } else {
                    var reinitiate = 0
                }
                var permission = $(".service_permission:checked").val();
                // alert(permission)
                // var permission = $(this).find('.service_permission').val();
                var days = $(this).find('.service_days').val();

                //second table
                // if ($(this).find('.map_all_tags').is(':checked')) {
                //     var all_tags = 0
                // } else {
                //     var all_tags = 1
                // }

                //third table
                // var tat_time = $(this).find('.tat_map_time').val();
                // var tat_days = $(this).find('.tat_map_days').val();

                var x = {
                    service_id: service_id,
                    reinitiate: reinitiate,
                    permission: permission,
                    days: days,
                    // all_tags: all_tags,
                    // tat_time: tat_time,
                    // tat_days: tat_days
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
                    // console.log(details)
                    //if you data save successfuly, do sth here..
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
        alert(itemId)
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
    function addTag1(itemId) {
        // Get the tags container element
        var tagsContainer = document.getElementById('tagsRow1' + itemId);

        // Create a new tag element
        var tagElement = document.createElement('span');
        tagElement.classList.add('tag');
        tagElement.textContent = 'ID_ADD_CRC_EMP';

        // Append the tag element to the container
        tagsContainer.appendChild(tagElement);
    }
</script>
<script>
    function addTag2(itemId) {
        // Get the tags container element
        var tagsContainer = document.getElementById('tagsRow2' + itemId);

        // Create a new tag element
        var tagElement = document.createElement('span');
        tagElement.classList.add('tag');
        tagElement.textContent = 'ID_ADD_CRC_EMP';

        // Append the tag element to the container
        tagsContainer.appendChild(tagElement);
    }
</script>
<?= $this->endSection('scripts'); ?>