<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>
<style>
    #userTable :hover {
        color: white;
        /* cursor: pointer; */
        background-color: #1722a6;
    }
</style>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Delete Checks</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Delete Checks</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row mb-4">

    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
        <select id="filter" name="filter" class="form-select">
            <option value="">select client</option>
            <?php foreach ($dropdown_data as $row) : ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Profile view</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <!-- <label class="form-label" for="form1">Search</label> -->
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>


</div>

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="card-title">Employees List</div>
            </div>
            <div class="card-body scroll">
                <!-- content -->
                <div class="content vscroll h-300">
                    <ol class="list-group list-group-numbered" id="userTable">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
        <div class="card" id="employeeDetails">

            <div class="card-body p-6">
                <div class="panel panel-primary">
                    <div class="tab-menu-heading border-bottom-0">
                        <div class="tabs-menu4 border-bottomo-sm">
                            <!-- Tabs -->
                            <nav class="nav d-sm-flex d-block">
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
                                    ID Cards
                                </a>
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab1" href="#tab26">
                                    Address Checks
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body">
                        <div class="tab-content">
                            <form action="EmployeeController/updateDelCheck" method="post">
                                <div class="tab-pane active" id="tab25" style="height:200px;">

                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <button class="btn btn-primary delete-btn" style="display: inline;">Delete</button>
                                    </div>
                                </div>
                            </form>
                            <div class="tab-pane" id="tab26">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- ROW-1 CLOSED -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

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
            url: '<?= base_url('EmployeeController/filterDataDelCheck') ?>',
            data: {
                filter: selectedValue
            },
            dataType: 'json',
            success: function(response) {
                // Update the table with the filtered data
                // Modify this based on your table structure
                var tableHtml = '';
                $.each(response.data, function(index, item) {
                    // console.log(item)
                    var fullName = item.first_name + ' ' + item.last_name;

                    tableHtml += '<a href="javascript:void(0)" data-employee-id="' + item.id + '" id="tab" onclick=getData(' + item.id + ')> <li class="list-group-item d-flex justify-content-between align-items-start tab"><div class="ms-2 me-auto"><div class="fw-bold">' + fullName + '</div>Content for list item</div></li></a>';
                });
                $('#userTable').html(tableHtml);
                // $('#panTable').remove();

            }
        });
    });
</script>
<script>
    function getData(id) {
        var employeeId = id

        // Make an AJAX request to retrieve employee data
        $.ajax({
            url: '<?= base_url('EmployeeController/getEmployeeDelCheck') ?>', // Replace with your actual server endpoint
            type: 'GET',
            data: {
                id: employeeId
            },
            success: function(response) {
                // Update the tab content with the received data
                // $('#employeeDetails').html(data);
                var tabHtml = '';
                $.each(response.data, function(index, item) {

                    if (item.is_pan == 1) {
                        tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"> <input type = "checkbox" class = "pan mt-2" name = "pan"> <span style = "font-size: 16px;"> PAN CARD </span><h6>' + item.created_at + '</h6></div>';
                    }
                    if (item.is_aadhar == 1) {
                        tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="aadhar mt-2" name="aadhar"><span style="font-size: 16px;">AADHAR CARD</span><h6>' + item.created_at + '</h6></div>';
                    }
                    if (item.is_voter_id == 1) {
                        tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="voterid mt-2" name="voter_id"><span style="font-size: 16px;">VOTERID CARD</span><h6>' + item.created_at + '</h6></div>';
                    }
                    if (item.is_license == 1) {
                        tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="license mt-2" name="license"><span style="font-size: 16px;">LICENSE CARD</span><h6>' + item.created_at + '</h6></div>';
                    }

                });
                $('#tab25').html(tabHtml);
                // $('#employeeDetails').html(employeeName);
                // $('.delete-btn').style.display = 'inline';
                // this.querySelector('.delete').style.display = 'inline';

                // Activate the clicked tab
                // $('.tab').removeClass('active-tab');
                // $(this).addClass('active-tab');
            },
            error: function(error) {
                console.error('Error fetching employee data:', error);
            }
        });
    }
</script>

<?= $this->endSection('scripts'); ?>