<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
<?php

// print_r($user_id);
// die();
?>


<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">All Employee</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">All Clients</li>
            <li class="breadcrumb-item">Clients</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">All Employee</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<!-- ROW -->
<div class="row">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <a href="http://localhost/excel/index.php?id=<?= $user_id ?>" class="btn btn-primary">Goto</a>
                    <h3 class="card-title m-2">Click on the button to go to import/export page</h3>
                </div>
                <?php
                // print_r($records);
                // die();
                ?>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Display other fields as needed -->
                            <tbody>
                                <?php
                                if (!empty($records)) :
                                    foreach ($records as $record) : ?>
                                        <tr>
                                            <td data-field="id"><?= $record['id']; ?></td>
                                            <td data-field="name"><?= $record['first_name'] . ' ' . $record['last_name']; ?></td>
                                            <td data-field="mobile"><?= $record['mobile']; ?></td>
                                            <td data-field="email"><?= $record['email']; ?></td>
                                            <td data-field="dob"><?= $record['dob']; ?></td>
                                            <td data-field="join_date"><?= $record['join_date']; ?></td>
                                            <td style="width: 100px">

                                                <a class="btn btn-primary fs-14 text-white edit-icn modal-effect " href="javascript:void(0)" onclick="ajaxModal('Update','EmployeeController/showEmployeeModal','modal-lg','<?= $record['id']; ?>')" data-container="body"> <i class="fe fe-edit"></i></a>

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

<?= $this->endSection('scripts'); ?>