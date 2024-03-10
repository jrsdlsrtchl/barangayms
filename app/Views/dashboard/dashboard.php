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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $pwd ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        Person with Ability
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
                        <a href="#">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark"><?= $fourPs ?></div>
                                    <div class="font-14 text-secondary weight-500">
                                        4ps
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
                        <a href="#">
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

        </div>
    </div>
</div>


<?= $this->endSection() ?>