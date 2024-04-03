<?= $this->extend("layout/base_user") ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <?php foreach ($userdata as $user) { ?>

                <div class="title pb-20">
                    <h2 class="h2 mb-0">Hello, <?= $user->firstname ?>!</h2>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <a href="<?= base_url() ?>RequestDocumentController/getApproved">
                                <div class="d-flex flex-wrap">
                                    <div class="widget-data">
                                        <div class="weight-700 font-24 text-dark"> <?= $approved ?> </div>
                                        <div class="font-14 text-secondary weight-500">
                                            Approved Request
                                        </div>
                                    </div>
                                    <div class="widget-icon">
                                        <div class="icon">
                                            <i class="icon-copy bi bi-check-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <a href="<?= base_url() ?>RequestDocumentController/request">
                                <div class="d-flex flex-wrap">
                                    <div class="widget-data">
                                        <div class="weight-700 font-24 text-dark"> <?= $pending ?> </div>
                                        <div class="font-14 text-secondary weight-500">
                                            Pending Request
                                        </div>
                                    </div>
                                    <div class="widget-icon">
                                        <div class="icon">
                                            <i class="icon-copy bi bi-arrow-up-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <a href="<?= base_url() ?>RequestDocumentController/getCancelled">
                                <div class="d-flex flex-wrap">
                                    <div class="widget-data">
                                        <div class="weight-700 font-24 text-dark"> <?= $cancelled ?> </div>
                                        <div class="font-14 text-secondary weight-500">
                                            Cancelled Request
                                        </div>
                                    </div>
                                    <div class="widget-icon">
                                        <div class="icon">
                                            <i class="icon-copy bi bi-x-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <a href="#">
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

                <div class="card-box mb-30 mt-4">
                    <div class="card-header">
                        <h4 class="text-blue mt-2 h4">Personal Information</h4>
                    </div>
                    <div class="row card-body">

                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Last Name</h2>
                            <h2 class="h4"> <?= $user->lastname; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">First Name</h2>
                            <h2 class="h4"> <?= $user->firstname; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Middle Name</h2>
                            <h2 class="h4"> <?= $user->middlename; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Suffix</h2>
                            <h2 class="h4"> <?= $user->suffix; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Gender</h2>
                            <h2 class="h4"> <?= $user->gender; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Age</h2>
                            <h2 class="h4"> <?= $user->age; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Mobile</h2>
                            <h2 class="h4"> <?= $user->mobile; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Date of Birth</h2>
                            <h2 class="h4"> <?= $user->datebirth; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Place of Birth</h2>
                            <h2 class="h4"> <?= $user->placebirth; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Civil Status</h2>
                            <h2 class="h4"> <?= $user->civilstatus; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Ethnicity</h2>
                            <h2 class="h4"> <?= $user->ethnicity; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Religion</h2>
                            <h2 class="h4"> <?= $user->religion; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Occupation</h2>
                            <h2 class="h4"> <?= $user->occupation; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Citizenship</h2>
                            <h2 class="h4"> <?= $user->citizenship; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Educational Attainment</h2>
                            <h2 class="h4"> <?= $user->education; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">4PS</h2>
                            <h2 class="h4"> <?= $user->for4ps; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">PWD</h2>
                            <h2 class="h4"> <?= $user->pwd; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Senior Citizen</h2>
                            <h2 class="h4"> <?= $user->senior; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Precinct</h2>
                            <h2 class="h4"> <?= $user->precinct; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Purok</h2>
                            <h2 class="h4"> <?= $user->purok_desc; ?> </h2>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <h2 class="h6">Household</h2>
                            <h2 class="h4"> <?= $user->household_desc; ?> </h2>
                        </div>

                    </div>
                </div>

                <div class="footer-wrap pd-20 mb-20 card-box">
                    <div class="col-auto"><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>

<?= $this->endSection("") ?>