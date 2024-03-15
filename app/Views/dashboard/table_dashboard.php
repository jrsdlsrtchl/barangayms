<?= $this->extend("layout/base"); ?>

<?= $this->section("content") ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

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

            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4"><?= $title; ?></h4>
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
                            <?php foreach ($resident as $res) { ?>
                                <tr>
                                    <td class="table-plus"><?= $res->lastname; ?></td>
                                    <td><?= $res->firstname; ?></td>
                                    <td><?= $res->middlename; ?></td>
                                    <td><?= $res->gender; ?></td>
                                    <td><?= $res->age; ?></td>
                                    <td><?= $res->mobile; ?></td>
                                    <td><?= $res->datebirth; ?></td>
                                    <td><?= $res->purok_desc; ?></td>
                                    <td> <a href="" data-toggle="modal" data-target="#viewResident<?= $res->uniid; ?>"><i class="dw dw-eye"></i> View</a></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->include("dashboard/view_resident") ?>


<?= $this->endSection() ?>