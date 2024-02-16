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

<form action="<?php echo base_url('ClientController/addEmployee') ?>" id="user_frm" method="post">
    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($record) ? $record['id'] : '' ?>">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?= ($record) ? $record['first_name'] : '' ?>" required>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?= ($record) ? $record['last_name'] : '' ?>" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?= ($record) ? $record['mobile'] : '' ?>" required>
                    <!-- <button class="input-group-text btn btn-primary text-white">Go!</button> -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= ($record) ? $record['email'] : '' ?>" required>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="dob">Date of birth</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="dob" name="dob" value="<?= ($record) ? $record['dob'] : '' ?>" required>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 mt-1">
            <div class="form-group">
                <label for="dob">Date of birth</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="join_date" name="join_date" value="<?= ($record) ? $record['join_date'] : '' ?>" required>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <button class="btn btn-primary float-right"> <?= (!empty($record)) ? 'Update' : 'Save'; ?></button>
        </div>
    </div>
</form>

<script>
    $(function() {
        /********************
          user form validation
        ********************/
        $('#user_frm').validate({

            rules: {
                "first_name": {
                    required: true
                },
                "last_name": {
                    required: true
                },
                "role_id": {
                    required: true
                },
                "email": {
                    required: true,
                    email: true,
                    remote: {
                        async: false,
                        url: base_url + 'auth/users/checkexists',
                        type: "post",
                        data: {
                            'name': 'email',
                            email: function() {
                                return $("#user_frm input[name=email]").val();
                            },
                            "user_id": function() {
                                return $("#user_frm input[name=user_id]").val();
                            },
                        }
                    },
                },
                "contact": {
                    required: true,
                    number: true,
                    maxlength: 12,
                    minlength: 10
                },
                <?php if (empty($userData)) : ?> "password": {
                        required: true,
                    },
                <?php endif; ?>
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