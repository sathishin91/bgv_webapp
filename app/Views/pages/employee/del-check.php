<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>
<style>
    #userTable :hover {
        color: white;
        /* cursor: pointer; */
        background-color: #1722a6;
    }

    #firstTable :hover {
        color: white;
        /* cursor: pointer; */
        background-color: #1722a6;
    }
</style>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
<?php
// echo '<pre>';
// print_r($firstClientData);
// die();
?>
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

    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <select id="filter" name="filter" class="form-select" style="font-size: 14px;">
            <!-- <option value="">--select client--</option> -->
            <?php foreach ($dropdown_data as $row) : ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <select class="form-select" aria-label="Default select example" style="font-size: 14px;">
            <option selected>Profile view</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div> -->
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <!-- <div class="input-group">
            <input class="form-control" placeholder="search by candidate name" type="search" data-search id="searchInput">
            <span class="input-group-text bg-white"><i class="icon icon-magnifier"></i></span> -->
        <!-- <p class="text-gray text-medium m-2">search by candidate name</p> -->
        <!-- </div> -->
        <div class="input-group">
            <input class="form-control" placeholder="Search by employee name" type="search" data-search id="searchInput" style="font-size: 14px;">
            <span class="input-group-text bg-white"><i class="icon icon-magnifier"></i></span>

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
                    <ol class="list-group list-group-numbered" id="firstTable">
                        <?php
                        if (!empty($firstClientData)) :
                            foreach ($firstClientData as $data) :
                                $fullname = $data['first_name'] . ' ' . $data['last_name'];
                        ?>
                                <a href="javascript:void(0)" data-employee-id="<?= $data['id'] ?>" id="tab" onclick=getData(<?= $data['id'] ?>)>
                                    <li class="list-group-item d-flex justify-content-between align-items-start tab">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold"><?= $fullname ?></div>
                                            <div><?= $data['name'] ?></div>
                                        </div>
                                    </li>
                                </a>
                            <?php endforeach;
                        else :
                            ?>
                            <tr>
                                <td colspan="7" align="center">No employee found</td>
                            </tr>
                        <?php endif; ?>
                    </ol>
                    <ol class="list-group list-group-numbered" id="userTable">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
        <div class="card" id="employeeDetails">
            <form action="EmployeeController/updateDelCheck" method="post" id="myForm">
                <div class="card-body p-6 ">
                    <div class="panel panel-primary">
                        <div class="tab-menu-heading border-bottom-0">
                            <div class="tabs-menu4 border-bottomo-sm">
                                <!-- Tabs -->
                                <nav class="nav d-sm-flex d-block">
                                    <a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
                                        ID Cards
                                    </a>
                                    <!-- <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab1" href="#tab26">
                                    Address Checks
                                </a> -->
                                </nav>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content ">
                                <div class="tab-pane active h-250" id="tab25">

                                </div>
                                <!-- <div class="tab-pane" id="tab26">
                              </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-xs-10">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <button class="btn btn-primary delete-btn" style="display: inline;">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
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
    $(document).ready(function() {
        // Attach a submit event listener to the form
        $('#myForm').submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();
            var formData = $(this).serialize();
            // Perform your Ajax logic here 
            $.ajax({
                method: 'POST',
                url: 'EmployeeController/updateDelCheck',
                data: formData,
                // Serialize the form data 
                success: function(response) {
                    // Handle the Ajax response 
                    // console.log(response); 
                    $.toast({
                        heading: "Success",
                        // text: result.msg, 
                        text: "Deleted Succesfully.",
                        position: "top-right",
                        loaderBg: "#5ba035",
                        icon: "success"
                    });
                    // resetTabContent('#tab25'); 
                    getData(2);
                },
                error: function(xhr, status, error) {
                    // Handle Ajax errors if needed 
                    $.toast({
                        heading: "Error",
                        text: "Not Deleted Succesfully!",
                        position: "top-right",
                        loaderBg: "#5ba035",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
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

                    tableHtml += '<a href="javascript:void(0)" data-employee-id="' + item.id + '" id="tab" onclick=getData(' + item.id + ')> <li class="list-group-item d-flex justify-content-between align-items-start tab"><div class="ms-2 me-auto"><div class="fw-bold">' + fullName + '</div><div>' + item.name + '</div></div></li></a>';
                });
                $('#firstTable').html(tableHtml).hide();
                $('#userTable').html(tableHtml);
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
                        tabHtml += '<label class="ckbox" for="pan"><input name="id" type="hidden" value="' + item.id + '"><input type= "checkbox" id="pan" class ="pan" name="pan" value="2"><span>PAN CARD</span></label><p>' + item.created_at + '<i class="mdi mdi-approval text-success" style="margin-left:5px;"></i></p>';
                        // tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"> <input type="checkbox" class ="pan mt-2" name = "pan"> <span style = "font-size: 16px;"> PAN CARD </span><h6>' + item.created_at + '</h6></div>';
                    }
                    if (item.is_aadhar == 1) {
                        // tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="aadhar mt-2" name="aadhar"><span style="font-size: 16px;">AADHAR CARD</span><h6>' + item.created_at + '</h6></div>';
                        tabHtml += '<label class="ckbox" for="aadhar"><input name="id" type="hidden" value="' + item.id + '"><input type= "checkbox" id="aadhar" class="aadhar" name="aadhar"  value="2"><span>AADHAR CARD</span></label><p>' + item.created_at + '<i class="mdi mdi-approval text-success" style="margin-left:5px;"></i></p>';
                    }
                    if (item.is_voter_id == 1) {
                        // tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="voterid mt-2" name="voter_id"><span style="font-size: 16px;">VOTERID CARD</span><h6>' + item.created_at + '</h6></div>';
                        tabHtml += '<label class="ckbox" for="voter_id"><input name="id" type="hidden" value="' + item.id + '"><input type= "checkbox" id="voter_id" class="voter_id" name="voter_id" value="2"><span>VOTER ID</span></label><p>' + item.created_at + '<i class="mdi mdi-approval text-success" style="margin-left:5px;"></i></p>';
                    }

                    if (item.is_license == 1) {
                        // tabHtml += '<div><input name="id" type="hidden" value="' + item.id + '"><input type="checkbox" class="license mt-2" name="license"><span style="font-size: 16px;">LICENSE CARD</span><h6>' + item.created_at + '</h6></div>'; tabHtml += '<label class="ckbox" for="voter_id"><input name="id" type="hidden" value="' + item.id + '"><input type= "checkbox" id="voter_id" class="voter_id" name="voter_id"><span>VOTER ID</span></label><p>' + item.created_at + '<i class="mdi mdi-approval text-success" style="margin-left:5px;"></i></p>';
                        tabHtml += '<label class="ckbox" for="license"><input name="id" type="hidden" value="' + item.id + '"><input type= "checkbox" id="license" class="license" name="license" value="2"><span>DRIVING LICENSE</span></label><p>' + item.created_at + '<i class="mdi mdi-approval text-success" style="margin-left:5px;"></i></p>';
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
<script>
    // Add a keyup event listener to the input field for live search
    $('#searchInput').on('keyup', function() {
        // Get the search query
        var query = $(this).val();

        // Make an AJAX request to the server
        $.ajax({
            url: '<?= base_url('EmployeeController/liveSearchDelCheck') ?>',
            method: 'GET',
            data: {
                query: query
            },
            dataType: 'json',
            success: function(response) {
                // alert(response.result)
                // Update the search results container with the retrieved data
                // var resultsContainer = $('#searchResults');
                // resultsContainer.empty();
                var tableHtml = '';
                $.each(response.data, function(index, item) {
                    // console.log(item)
                    var fullName = item.first_name + ' ' + item.last_name;

                    tableHtml += '<a href="javascript:void(0)" data-employee-id="' + item.id + '" id="tab" onclick=getData(' + item.id + ')> <li class="list-group-item d-flex justify-content-between align-items-start tab"><div class="ms-2 me-auto"><div class="fw-bold">' + fullName + '</div><div>' + item.name + '</div></div></li></a>';
                });
                $('#firstTable').html(tableHtml).hide();
                $('#userTable').html(tableHtml);
            }
        });
    });
</script>

<?= $this->endSection('scripts'); ?>