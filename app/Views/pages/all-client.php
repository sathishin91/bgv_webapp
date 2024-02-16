<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>


<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Clients</h1>

    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">All Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clients</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<!-- TABS OPEN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Simple Tabs</h3>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class="tab-menu-heading border-bottom-0">
                        <div class="tabs-menu4 border-bottomo-sm">
                            <!-- Tabs -->
                            <nav class="nav d-sm-flex d-block">
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
                                    Starred
                                </a>
                                <a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab26">
                                    All
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab25">
                                <div class="row row-deck">
                                    <?php foreach ($starredRecords as $starredRecord) : ?>
                                        <!-- CARD 1 -->
                                        <div class="col-xl-3 col-md-12">
                                            <a href="ClientController/index2/<?= $starredRecord['id']; ?>" class="button">
                                                <div class="card">
                                                    <div class="card-header border-bottom" style="height: 75px;">
                                                        <div class="card-title"><?= $starredRecord['name']; ?></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>With supporting text below as a natural lead-in to additional content.</p>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab26">
                        <div class="row ">
                            <?php foreach ($records as $record) : ?>
                                <div class="col-md-12 col-xl-3">
                                    <a href="ClientController/index2/<?= $record['id']; ?>" style="color:white;">
                                        <div class="card text-white bg-primary">
                                            <div class="card-body">
                                                <div class="align-items-center justify-content-between">
                                                    <div class="row" style="height: 100px;">
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 left-grid-spacing w-auto">
                                                            <h5 class="card-title "><?= $record['name']; ?></h5>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 right-grid-spacing">
                                                            <button href="#" class="star-toggle" data-id="<?= $record['id']; ?>">
                                                                <i class="fa fa-star star" style="color:white;
                                                            display:none;"></i>
                                                                <i class="fa fa-star-o unstar" style="color:white"></i>
                                                                <!-- <span class="star">&#9733;</span> -->
                                                                <!-- Star symbol -->
                                                                <!-- <span class="unstar">&#9734;</span> -->
                                                                <!-- Unstar symbol -->
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <p class="card-text"><?= $record['description']; ?></p> -->
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            <?php endforeach; ?>

                            <!-- CARD 1 -->
                            <!-- <div class="col-md-12 col-xl-3">
                                        <div class="card text-white bg-primary">
                                            <div class="card-body">
                                                <h4 class="card-title">New booking</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- TABS CLOSED -->

</div>
</div>
</div>
<!-- END ROW -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const starButtons = document.querySelectorAll('.star-toggle');

        starButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const recordId = this.getAttribute('data-id');
                const isStarred = this.classList.contains('starred');

                // Perform AJAX request to your CI controller method to toggle star status
                fetch(`<?= base_url('ClientController/toggleStar/') ?>/${recordId}`, {
                        method: 'POST',
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Update the UI based on the response
                        if (data.isStarred) {
                            this.classList.add('starred');
                            this.querySelector('.star').style.display = 'inline';
                            this.querySelector('.unstar').style.display = 'none';
                        } else {
                            this.classList.remove('starred');
                            this.querySelector('.star').style.display = 'none';
                            this.querySelector('.unstar').style.display = 'inline';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });

        });
    });
</script>


<?= $this->endSection('scripts'); ?>