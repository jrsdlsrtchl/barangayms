<?= $this->extend("layout/base_user") ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <?php foreach ($userdata as $user) { ?>
                <div class="title pb-20">
                    <h2 class="h2 mb-0">Hello, <?= $user->firstname ?>!</h2>
                </div>
            <?php } ?>

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

            <!-- Data Table -->
            <div class="card-box mb-30 mt-3">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Login Activity</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Browser</th>
                                <th>IP Address</th>
                                <th>Login Time</th>
                                <th class="datatable-nosort">Logout Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($activity as $act) { ?>
                                <tr>
                                    <td class="table-plus"><?= $act->browser; ?></td>
                                    <td><?= $act->ip_address; ?></td>
                                    <td><?= $act->login_time; ?></td>
                                    <td><?= $act->logout_time; ?></td>
                                </tr>
                            <?php }; ?>
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

<?= $this->endSection("") ?>