        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

        <!-- JQUERY JS -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

        <!-- BOOTSTRAP JS -->
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

        <!-- SIDE-MENU JS -->
        <script src="<?php echo base_url('assets/plugins/sidemenu/sidemenu.js'); ?>"></script>

        <!-- PERFECT SCROLLBAR JS-->
        <script src="<?php echo base_url('assets/plugins/p-scroll/perfect-scrollbar.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/p-scroll/pscroll.js'); ?>"></script>

        <!-- STICKY JS -->
        <script src="<?php echo base_url('assets/js/sticky.js'); ?>"></script>
        <?= $this->renderSection('scripts'); ?>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

        <script>
                /**************** 
                 * custom modal 
                 ***************/
                function ajaxModal(title, url, modal_type = 'modal-md', id = '') {
                        var BASE_URL = "<?= base_url() ?>";

                        $.ajax({
                                url: "<?= base_url() ?>/EmployeeController/showEmployeeModal",
                                type: "post",
                                dataType: "html",
                                data: {
                                        'id': id
                                },
                                headers: {
                                        "accept": "application/json",
                                        "Access-Control-Allow-Origin": "*"
                                },
                                success: function(response) {
                                        if (response != '') {
                                                // alert(response)
                                                $('#commonModal .modal-title').html(title);
                                                $('#commonModal .modal-dialog').removeClass("modal-md");
                                                $('#commonModal .modal-dialog').removeClass("modal-lg");
                                                $('#commonModal .modal-dialog').removeClass("modal-sm");
                                                $('#commonModal .modal-dialog').addClass(modal_type);
                                                $('#commonModal .common_modal_content').html(response);
                                                $('#commonModal').modal('show');
                                        }
                                },
                                error: function(xhr, status, err) {
                                        switch (status) {
                                                case 'timeout': {}
                                                case 'parseerror': {}
                                                case 'abort': {}
                                                case 'error': {}
                                                default: {}
                                        }
                                }
                        });
                }
        </script>

        <script>
                /**************** 
                 * custom modal 
                 ***************/
                function todoAadharModal(id = '') {
                        // alert(id)
                        var BASE_URL = "<?= base_url() ?>";

                        $.ajax({
                                url: "<?= base_url() ?>/EmployeeController/showAadharTodoModal",
                                type: "post",
                                dataType: "html",
                                data: {
                                        'id': id
                                },
                                headers: {
                                        "accept": "application/json",
                                        "Access-Control-Allow-Origin": "*"
                                },
                                success: function(response) {
                                        if (response != '') {
                                                // alert(response)
                                                $('#commonModal .modal-title').html('Update Status');
                                                $('#commonModal .modal-dialog').removeClass("modal-md");
                                                $('#commonModal .modal-dialog').removeClass("modal-lg");
                                                $('#commonModal .modal-dialog').removeClass("modal-sm");
                                                $('#commonModal .modal-dialog').addClass('modal-lg');
                                                $('#commonModal .common_modal_content').html(response);
                                                $('#commonModal').modal('show');
                                        }
                                },
                                error: function(xhr, status, err) {
                                        switch (status) {
                                                case 'timeout': {}
                                                case 'parseerror': {}
                                                case 'abort': {}
                                                case 'error': {}
                                                default: {}
                                        }
                                }
                        });
                }

                /**************** 
                 * custom modal 
                 ***************/
                function todoPanModal(id = '') {
                        // alert(id)
                        var BASE_URL = "<?= base_url() ?>";

                        $.ajax({
                                url: "<?= base_url() ?>/EmployeeController/showPanTodoModal",
                                type: "post",
                                dataType: "html",
                                data: {
                                        'id': id
                                },
                                headers: {
                                        "accept": "application/json",
                                        "Access-Control-Allow-Origin": "*"
                                },
                                success: function(response) {
                                        if (response != '') {
                                                // alert(response)
                                                $('#commonModal .modal-title').html('Update Status');
                                                $('#commonModal .modal-dialog').removeClass("modal-md");
                                                $('#commonModal .modal-dialog').removeClass("modal-lg");
                                                $('#commonModal .modal-dialog').removeClass("modal-sm");
                                                $('#commonModal .modal-dialog').addClass('modal-lg');
                                                $('#commonModal .common_modal_content').html(response);
                                                $('#commonModal').modal('show');
                                        }
                                },
                                error: function(xhr, status, err) {
                                        switch (status) {
                                                case 'timeout': {}
                                                case 'parseerror': {}
                                                case 'abort': {}
                                                case 'error': {}
                                                default: {}
                                        }
                                }
                        });
                }

                /**************** 
                 * custom modal 
                 ***************/
                function todoVoterIdModal(id = '') {
                        // alert(id)
                        var BASE_URL = "<?= base_url() ?>";

                        $.ajax({
                                url: "<?= base_url() ?>/EmployeeController/showVoterIdTodoModal",
                                type: "post",
                                dataType: "html",
                                data: {
                                        'id': id
                                },
                                headers: {
                                        "accept": "application/json",
                                        "Access-Control-Allow-Origin": "*"
                                },
                                success: function(response) {
                                        if (response != '') {
                                                // alert(response)
                                                $('#commonModal .modal-title').html('Update Status');
                                                $('#commonModal .modal-dialog').removeClass("modal-md");
                                                $('#commonModal .modal-dialog').removeClass("modal-lg");
                                                $('#commonModal .modal-dialog').removeClass("modal-sm");
                                                $('#commonModal .modal-dialog').addClass('modal-lg');
                                                $('#commonModal .common_modal_content').html(response);
                                                $('#commonModal').modal('show');
                                        }
                                },
                                error: function(xhr, status, err) {
                                        switch (status) {
                                                case 'timeout': {}
                                                case 'parseerror': {}
                                                case 'abort': {}
                                                case 'error': {}
                                                default: {}
                                        }
                                }
                        });
                }

                /**************** 
                 * custom modal 
                 ***************/
                function todoLicenseModal(id = '') {
                        // alert(id)
                        var BASE_URL = "<?= base_url() ?>";

                        $.ajax({
                                url: "<?= base_url() ?>/EmployeeController/showLicenseTodoModal",
                                type: "post",
                                dataType: "html",
                                data: {
                                        'id': id
                                },
                                headers: {
                                        "accept": "application/json",
                                        "Access-Control-Allow-Origin": "*"
                                },
                                success: function(response) {
                                        if (response != '') {
                                                // alert(response)
                                                $('#commonModal .modal-title').html('Update Status');
                                                $('#commonModal .modal-dialog').removeClass("modal-md");
                                                $('#commonModal .modal-dialog').removeClass("modal-lg");
                                                $('#commonModal .modal-dialog').removeClass("modal-sm");
                                                $('#commonModal .modal-dialog').addClass('modal-lg');
                                                $('#commonModal .common_modal_content').html(response);
                                                $('#commonModal').modal('show');
                                        }
                                },
                                error: function(xhr, status, err) {
                                        switch (status) {
                                                case 'timeout': {}
                                                case 'parseerror': {}
                                                case 'abort': {}
                                                case 'error': {}
                                                default: {}
                                        }
                                }
                        });
                }
        </script>