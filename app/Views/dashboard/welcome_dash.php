<?= $this->include("layout/header"); ?>

<?= $this->include("layout/preload"); ?>

<?= $this->include("layout/topbar"); ?>

<?= $this->include("layout/right-sidebar"); ?>

<?= $this->include("layout/left-sidebar"); ?>

<?php
$page_session = \CodeIgniter\Config\Services::session();
?>


<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 5000);
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Prompt Message -->
            <?php if ($page_session->getTempdata('success')) : ?>
                <div id="hidemessage" class="alert alert-success" role="alert">
                    <?= $page_session->getTempdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($page_session->getTempdata('error')) : ?>
                <div id="hidemessage" class="alert alert-danger" role="alert">
                    <?= $page_session->getTempdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="title pb-20">
                <h2 class="h3 mb-0">Dashboard</h2>
            </div>

            <div class="row pb-10">

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/populationdash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"> <?= $population ?> </div>
                                    <div class="font-14 text-secondary weight-500">
                                        Population
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/maledash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $male ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Male
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-mars-stroke"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/femaledash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $female ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Female
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-venus"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="#">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $household ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Households
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-house"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/seniordash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $senior ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Senior Citizen
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-person-cane"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/pwddash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $pwd ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Person with Disability
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-wheelchair"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/for4psdash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $fourPs ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        4PS
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-hands-holding-child"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>dashboardcontroller/voterdash">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $voter ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Voters
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa-fingerprint"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>RequestedDocController/document">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"> <?= $documents ?> </div>
                                    <div class="font-14 text-secondary weight-500">
                                        Type of Documents
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa fa-folder-open"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>AssistanceController/listassistance">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"> <?= $assistance ?> </div>
                                    <div class="font-14 text-secondary weight-500">
                                        Type of Assistance
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa fa-handshake-o"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>AssistanceController/assistance">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"> <?= $active ?> </div>
                                    <div class="font-14 text-secondary weight-500">
                                        Active of Assistance
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="fa-solid fa fa-hand-stop-o"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <a href="<?= base_url() ?>ProfileRequestController/getRequest">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"> <?= $profile ?> </div>
                                    <div class="font-14 text-secondary weight-500">
                                        Profile Request
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon">
                                        <i class="icon-copy fa fa-user-o"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Dashboard Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Contact No.</th>
                                <th>Date of Birth</th>
                                <th>Purok</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="footer-wrap pd-20 mb-20 card-box">
                <div class="col-auto"><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
            </div>

        </div>
    </div>
</div>



<?= $this->include("layout/footer"); ?>