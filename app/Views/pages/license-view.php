<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>
<style>
    .badge_primary {
        background-color: blue;
        color: white;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }

    .badge_success {
        background-color: green;
        color: white;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }

    .badge_danger {
        background-color: red;
        color: white;
        padding: 2px 4px;
        text-align: center;
        border-radius: 5px;
        font-size: 10px;
    }
</style>
<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Todo's - License</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Delete Checks</li> -->
        </ol>
    </div>
</div>


<!-- PAGE-HEADER END -->
<div class="row mb-4 ">
    <!-- <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div> -->
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4">
        <input class="form-control" placeholder="Search by name" type="search" data-search id="searchInput">

        <!-- <button class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                <path d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
            </svg>
        </button> -->
        <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="button">Button</button>
            </div>
            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div> -->
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <p class="text-gray text-medium ">search by candidate name</p>

    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">

    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <!-- <img src="../../../public/assets/images/pancard.png" alt=""> -->
        <div class=" row justify-content-end">
            <div class="col-9">
                <img src="<?php echo base_url('assets/images/doc-images/license.png'); ?>" class="" alt="logo" style="height: 75px; width:full;">
            </div>

        </div>


    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-gray text-semibold">TAT left</label>
                        <select id="filter" name="filter" class="form-select" style="font-size: 14px;">
                            <option value="">select TAT left</option>
                            <!-- <?php foreach ($dropdown_data as $row) : ?>
                                <option value=" <?= $row['id'] ?>"><?= $row['name'] ?></option>
                            <?php endforeach; ?> -->
                            <option value="">1 day</option>
                            <option value="">1 week</option>
                            <option value="">1 month</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-gray text-semibold">Case status</label>
                        <select id="filterStatus" name="filterStatus" class="form-select" style="font-size: 14px;">
                            <option value="">--select--</option>
                            <option value="1" class="text-success">license found</option>
                            <option value="2" class="text-warning">insufficient information</option>
                            <option value="3" class="text-danger">license not found</option>
                            <option value="4" class="text-danger">name mismatched</option>
                            <option value="5" class="text-danger">fake license</option>
                        </select>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 border-white border-1 rounded-2" style="height: 100px;background-color:#fff9e6;">
                        <div class="d-flex flex-column mb-3 p-4 ">
                            <h1 class="text-warning"><?= $count ?></h1>
                            <p class="text-medium">Todo's for License</p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <select id="filter" name="filter" class="form-select text-primary text-medium" style="font-size: 14px;">
                            <option value="">View more filters</option>

                        </select>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ROW-1 OPEN -->
<div class="row">
    <!-- <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">

        <div class="card">
            <div class="card-header border-bottom">
                <div class="card-title">Ticket Status</div>
            </div>

            <div class="card-body">
                <div id="morrisBar9" class="chartsh"></div>
            </div>
        </div>
    </div> -->

    <?php
    // echo '<pre>';
    // print_r($pan_data);
    // die();
    ?>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

        <div class="card">

            <div class="card product-sales-main">
                <div class="card-header border-bottom">
                    <h3 class="card-title mb-0">Employee List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="panTable" class="table editable-table table-nowrap  table-edit wp-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Candidate Name</th>
                                    <th>License Number</th>
                                    <th>Case status</th>
                                    <th>TAT left</th>
                                    <th>Initiated on</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                // echo '<pre>';
                                // print_r($records);
                                // die();
                                if (!empty($records)) :
                                    foreach ($records as $record) :
                                        $id = $record['id'];
                                        // print_r($id);
                                        // die();
                                ?>
                                        <tr>
                                            <td><?= $record['id'] ?></td>
                                            <!-- <td><a href="javascript:void(0)" onclick="todoPanModal(<?= $record['id'] ?>)"><?= $record['first_name'] . ' ' . $record['last_name'] ?></a></td> -->
                                            <td><?= $record['first_name'] . ' ' . $record['last_name'] ?></td>
                                            <td><?= $record['driving_lic'] ?></td>
                                            <?php
                                            if ($record['is_license'] == 1) {
                                            ?>
                                                <td><span class="text-success  text-medium">license found</span></td>

                                            <?php } elseif ($record['is_license'] == 2) { ?>

                                                <td><span class="text-warning text-medium">insufficient info</span></td>

                                            <?php } elseif ($record['is_license'] == 3) { ?>

                                                <td><span class="text-danger text-medium">license not found</span></td>


                                            <?php } elseif ($record['is_license'] == 4) { ?>

                                                <td><span class="text-danger text-medium">name mismatched</span></td>

                                            <?php } elseif ($record['is_license'] == 5) { ?>

                                                <td><span class="text-danger text-medium">fake license</span></td>

                                            <?php } ?>

                                            <td>-16 days</td>
                                            <td><?= $record['created_at'] ?></td>
                                            <td><span>
                                                    <a href="javascript:void(0)" onclick="todoLicenseModal(<?= $record['id'] ?>)"><i class="fa fa-arrow-right"></i></a>
                                                    <!-- <a href="<?php echo base_url("EmployeeController/licenseDashboard?id=$id"); ?>"><i class="fa fa-arrow-right"></i></a> -->
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach;
                                else :
                                    ?>
                                    <tr>
                                        <td colspan="7" align="center">No user found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>

                        </table>

                        <table id="userTable" class="table editable-table table-nowrap  table-edit wp-100">
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ROW-1 CLOSED -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- MORRIS-CHART JS -->
<script src="<?php echo base_url('assets/plugins/morris/raphael-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/morris/morris.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/morris.js'); ?>"></script>

<!-- PERFECT SCROLLBAR JS-->
<script src="<?php echo base_url('assets/plugins/p-scroll/pscroll-2.js'); ?>"></script>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<script>
    // Add JavaScript to handle the dropdown change event
    $('#filter').on('change', function() {
        var selectedValue = $(this).val();

        // Make an AJAX request to get filtered data
        $.ajax({
            type: 'POST',
            url: '<?= base_url('EmployeeController/filterDataPan') ?>',
            data: {
                filter: selectedValue
            },
            dataType: 'json',
            success: function(response) {
                // Update the table with the filtered data
                // Modify this based on your table structure
                var tableHtml = '<thead><tr><th>Id</th><th>Candidate Name</th><th>License Number</th><th>Case status</th><th>TAT left</th><th>Initiated on</th><th></th></tr></thead>';
                $.each(response.data, function(index, item) {
                    var fullName = item.first_name + ' ' + item.last_name;
                    if (item.is_license == 1) {
                        item.is_license = '<span class="text-success text-medium">license found</span>'
                    } else if (item.is_license == 2) {
                        item.is_license = '<span class="text-warning text-medium">insufficient info</span>'
                    } else if (item.is_license == 3) {
                        item.is_license = '<span class="text-danger text-medium">license not found</span>'
                    } else if (item.is_license == 4) {
                        item.is_license = '<span class="text-danger text-medium">name mismatched</span>'
                    } else if (item.is_license == 5) {
                        item.is_license = '<span class="text-danger text-medium">fake license</span>'
                    }
                    tableHtml += '<tbody><tr><td>' + item.id + '</td><td>' + fullName + '</td><td>' + item.driving_lic + '</td><td>' + item.is_license + '</td><td>-16 days</td><td>' + item.created_at + '</td><td><span> <a href="javascript:void(0)" onclick="todoPanModal(' + item.id + ')"><i class="fa fa-arrow-right"></i></a></span></td></tr></tbody>';
                });
                $('#userTable').html(tableHtml);
                $('#panTable').remove();

            }
        });
    });

    $('#filterStatus').on('change', function() {
        var selectedValue = $(this).val();

        // Make an AJAX request to get filtered data
        $.ajax({
            type: 'POST',
            url: '<?= base_url('EmployeeController/filterLicenseStatus') ?>',
            data: {
                filter: selectedValue
            },
            dataType: 'json',
            success: function(response) {
                // Update the table with the filtered data
                // Modify this based on your table structure
                var tableHtml = '<thead><tr><th>Id</th><th>Candidate Name</th><th>License Number</th><th>Case status</th><th>TAT left</th><th>Initiated on</th><th></th></tr></thead>';
                $.each(response.data, function(index, item) {
                    var fullName = item.first_name + ' ' + item.last_name;
                    if (item.is_license == 1) {
                        item.is_license = '<span class="text-success text-medium">license found</span>'
                    } else if (item.is_license == 2) {
                        item.is_license = '<span class="text-warning text-medium">insufficient info</span>'
                    } else if (item.is_license == 3) {
                        item.is_license = '<span class="text-danger text-medium">license not found</span>'
                    } else if (item.is_license == 4) {
                        item.is_license = '<span class="text-danger text-medium">name mismatched</span>'
                    } else if (item.is_license == 5) {
                        item.is_license = '<span class="text-danger text-medium">fake license</span>'
                    }
                    tableHtml += '<tbody><tr><td>' + item.id + '</td><td>' + fullName + '</td><td>' + item.driving_lic + '</td><td>' + item.is_license + '</td><td>-16 days</td><td>' + item.created_at + '</td><td><span> <a href="javascript:void(0)" onclick="todoPanModal(' + item.id + ')"><i class="fa fa-arrow-right"></i></a></span></td></tr></tbody>';
                });
                $('#userTable').html(tableHtml);
                $('#panTable').remove();

            }
        });
    });
</script>

<script>
    // Add a keyup event listener to the input field for live search
    $('#searchInput').on('keyup', function() {
        // Get the search query
        var query = $(this).val();
        var doc = "is_license";

        // Make an AJAX request to the server
        $.ajax({
            url: '<?= base_url('EmployeeController/liveSearch') ?>',
            method: 'GET',
            data: {
                query: query,
                doc: doc
            },
            dataType: 'json',
            success: function(response) {
                // alert(response.result)
                // Update the search results container with the retrieved data
                // var resultsContainer = $('#searchResults');
                // resultsContainer.empty();


                var tableHtml = '<thead><tr><th>Id</th><th>Candidate Name</th><th>License Number</th><th>Case status</th><th>TAT left</th><th>Initiated on</th><th></th></tr></thead>';
                // Loop through the response and display the results
                $.each(response.data, function(index, item) {
                    // resultsContainer.append('<p>' + result.column_name + '</p>');
                    var fullName = item.first_name + ' ' + item.last_name;
                    if (item.is_license == 1) {
                        item.is_license = '<span class="text-success text-medium">license found</span>'
                    } else if (item.is_license == 2) {
                        item.is_license = '<span class="text-warning text-medium">insufficient info</span>'
                    } else if (item.is_license == 3) {
                        item.is_license = '<span class="text-danger text-medium">license not found</span>'
                    } else if (item.is_license == 4) {
                        item.is_license = '<span class="text-danger text-medium">name mismatched</span>'
                    } else if (item.is_license == 5) {
                        item.is_license = '<span class="text-danger text-medium">fake license</span>'
                    }
                    tableHtml += '<tbody><tr><td>' + item.id + '</td><td>' + fullName + '</td><td>' + item.driving_lic + '</td><td>' + item.is_license + '</td><td>-16 days</td><td>' + item.created_at + '</td><td><span> <a href="javascript:void(0)" onclick="todoLicenseModal(' + item.id + ')"><i class="fa fa-arrow-right"></i></a></span></td></tr></tbody>';
                });
                $('#userTable').html(tableHtml);
                $('#panTable').remove();
            }
        });
    });
</script>

<?= $this->endSection('scripts'); ?>