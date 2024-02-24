<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
<?php
// print_r($_SESSION['user'][0]);
// die();
?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Profile</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-xl-6">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Change Password</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" id="password_change_form" action="#">
                                    <input type="hidden" name="id" id="id" value="<?= $_SESSION['user'][0]['id'] ?>">
                                    <input type="hidden" name="email" id="email" value="<?= $_SESSION['user'][0]['email'] ?>">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="old_password" placeholder="Old password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="new_password" placeholder="New password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm New Password">
                                    </div>
                                    <div id="password_message"></div>
                                    <div class="form-group mt-3">
                                        <div>
                                            <button type="submit" class="btn btn-primary mt-2" onclick="submitForm()">Change</button>
                                            <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xl-6">

                    </div>
                </div>
            </div>

        </div>
    </div><!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->


<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<script>
    function submitForm() {
        var id = $('#id').val();
        var email = $('#email').val()
        var oldPassword = $('#old_password').val();
        var newPassword = $('#new_password').val();
        var confirmPassword = $('#confirm_password').val();
        var messageContainer = document.getElementById('password_message');

        // Check if passwords match
        if (newPassword === confirmPassword) {
            // Prepare data for AJAX
            var formData = {
                id: id,
                email: email,
                old_password: oldPassword,
                new_password: newPassword,
                confirm_password: confirmPassword
            };
            // Perform AJAX request
            $.ajax({
                type: 'POST',
                url: '<?= base_url('Login/changePassword') ?>', // Change the URL based on your route
                data: formData,
                success: function(response) {
                    if (response.status == "1000" && response.status != '') {
                        $('#password_change_form :input').val('');
                        messageContainer.textContent = '';
                        $.toast({
                            heading: "Success",
                            text: "Password Changed Succesfully.",
                            position: "top-right",
                            loaderBg: "#5ba035",
                            icon: "success"
                        });

                    } else if (response.status == "1001" && response.status != '') {
                        $.toast({
                            heading: "Error",
                            text: "Old password is incorrect!",
                            position: "top-right",
                            loaderBg: "#5ba035",
                            icon: "error"
                        });
                    } else if (response.status == "1002" && response.status != '') {
                        $.toast({
                            heading: "Error",
                            text: "New password and confirm password do not match.",
                            position: "top-right",
                            loaderBg: "#5ba035",
                            icon: "error"
                        });
                    } else if (response.status == "1003" && response.status != '') {
                        $.toast({
                            heading: "Error",
                            text: "Password not changed!",
                            position: "top-right",
                            loaderBg: "#5ba035",
                            icon: "error"
                        });
                    }
                },
                error: function(error) {
                    $.toast({
                        heading: "Error",
                        text: "Password not changed!",
                        position: "top-right",
                        loaderBg: "#5ba035",
                        icon: "error"
                    });
                }
            });
        } else {
            // Display an error message if passwords do not match
            $('#password_message').text('Passwords do not match').css('color', 'red');
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var newPasswordInput = document.getElementById('new_password');
        var confirmPasswordInput = document.getElementById('confirm_password');
        var messageContainer = document.getElementById('password_message');

        // Add event listener to confirm password input
        confirmPasswordInput.addEventListener('keyup', function() {
            var newPassword = newPasswordInput.value;
            var confirmPassword = confirmPasswordInput.value;

            // Compare passwords
            if (newPassword === confirmPassword) {
                messageContainer.textContent = 'Passwords match';
                messageContainer.style.color = 'green';
            } else {
                messageContainer.textContent = 'Passwords do not match';
                messageContainer.style.color = 'red';
            }
        });
    });
</script>

<!-- INTERNAL SELECT2 JS -->
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js'); ?>"></script>

<!-- INTERNAL GALLERY JS -->
<script src="<?php echo base_url('assets/plugins/gallery/picturefill.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lightgallery.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-pager.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-autoplay.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-fullscreen.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-zoom.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-hash.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lg-share.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/gallery/lightgallery-1.js'); ?>"></script>

<!-- PROFILE JS -->
<script src="<?php echo base_url('assets/js/profile.js'); ?>"></script>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>