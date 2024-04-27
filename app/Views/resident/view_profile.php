<?= $this->extend("layout/base_form"); ?>

<?= $this->section("content") ?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Manage Resident</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>residentcontroller/resident">Residents</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    View Profile
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">View Profile</h4>
                </div>
                <div class="col-md-12">
                    <div class="card-body p-4">
                        <h5 class="text-center mb-3">Personal Information</h5>
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Last Name</h6>
                                <p class="text-muted"> <?= $resident['0']->lastname ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>First Name</h6>
                                <p class="text-muted"> <?= $resident['0']->firstname ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Middle Name</h6>
                                <p class="text-muted"> <?= $resident['0']->middlename ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Suffix</h6>
                                <p class="text-muted"> <?= $resident['0']->suffix ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Birthdate</h6>
                                <p class="text-muted"> <?= $resident['0']->datebirth ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Age</h6>
                                <p class="text-muted"> <?= $resident['0']->age ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Gender</h6>
                                <p class="text-muted"> <?= $resident['0']->gender ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Civil Status</h6>
                                <p class="text-muted"> <?= $resident['0']->civilstatus ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Place of Birth</h6>
                                <p class="text-muted"> <?= $resident['0']->placebirth ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Citizenship</h6>
                                <p class="text-muted"> <?= $resident['0']->citizenship ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Occupation</h6>
                                <p class="text-muted"> <?= $resident['0']->occupation ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Educational Attainment</h6>
                                <p class="text-muted"> <?= $resident['0']->education ?> </p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">
                        <h5 class="text-center mb-3">Social Group</h5>
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Religion</h6>
                                <p class="text-muted"> <?= $resident['0']->religion ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Ethinicity</h6>
                                <p class="text-muted"> <?= $resident['0']->ethnicity ?> </p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">
                        <h5 class="text-center mb-3">Vulnerabilities</h5>
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>PWD</h6>
                                <p class="text-muted"> <?= $resident['0']->pwd ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>4P'S</h6>
                                <p class="text-muted"> <?= $resident['0']->for4ps ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Senior Citizen</h6>
                                <p class="text-muted"> <?= $resident['0']->senior ?> </p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">
                        <h5 class="text-center mb-3">Contact Information</h5>
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Mobile</h6>
                                <p class="text-muted"> <?= $resident['0']->mobile ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Purok</h6>
                                <p class="text-muted"><?= $resident['0']->purok_desc ?></p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Household</h6>
                                <p class="text-muted"> <?= $resident['0']->household_desc ?> </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Precinct</h6>
                                <p class="text-muted"> <?= $resident['0']->precinct ?> </p>
                            </div>
                        </div>

                        <hr class="mt-0 mb-4">
                        <h5 class="text-center mb-3">Assistance</h5>
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <ul class="">
                                    <?php if (is_array($assistance) || is_object($assistance)) { ?>
                                        <?php foreach ($assistance as $ass) { ?>
                                            <li class="font-weight-bold"> • <?= $ass->type_assistance ?> </li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li class="font-weight-bold">No assistance available</li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>