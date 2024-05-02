<?php foreach ($resident as $res) { ?>
    <div class="modal fade" id="viewResident<?= $res->uniid; ?>" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">Resident's Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center text-center">

                        <?php if (!empty(isset($res->gender) && isset($res->image))) {
                            $gender = $res->gender;
                            $image = $res->image;

                            if ($image == '') {
                                if ($gender == 'Male') { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="resident" class="rounded-circle" width="150" />
                                <?php } elseif ($gender == 'Female') { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="resident" class="rounded-circle" width="150" />
                                <?php } else { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="resident" class="rounded-circle" width="150" />
                                <?php }
                            } else { ?>
                                <img src="<?= $image ?>" alt="resident" class="rounded-circle" width="150" />
                            <?php } ?>
                        <?php } ?>

                        <div class="mt-3">
                            <h4><?= $res->firstname . " " . substr($res->middlename, 0, 1) . ". " . $res->lastname ?></h4>
                            <p class="text-secondary mb-0"> <?= $res->purok_desc ?> </p>
                            <p class="text-secondary"> <?= $res->mobile ?> </p>
                            <a href="<?= base_url() ?>residentcontroller/viewprofile/<?= $res->resident_id ?>">
                                <button class="btn btn-outline-primary btn-sm">View Profile</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body p-4">
                            <h6>Personal Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Last Name</h6>
                                    <p class="text-muted"> <?= $res->lastname ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>First Name</h6>
                                    <p class="text-muted"> <?= $res->firstname ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Middle Name</h6>
                                    <p class="text-muted"> <?= $res->middlename ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Suffix</h6>
                                    <p class="text-muted"> <?= $res->suffix ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Birthdate</h6>
                                    <p class="text-muted"> <?= $res->datebirth ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Age</h6>
                                    <p class="text-muted"> <?= $res->age ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Gender</h6>
                                    <p class="text-muted"> <?= $res->gender ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Civil Status</h6>
                                    <p class="text-muted"> <?= $res->civilstatus ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Place of Birth</h6>
                                    <p class="text-muted"> <?= $res->placebirth ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Citizenship</h6>
                                    <p class="text-muted"> <?= $res->citizenship ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Occupation</h6>
                                    <p class="text-muted"> <?= $res->occupation ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Educational Attainment</h6>
                                    <p class="text-muted"> <?= $res->education ?> </p>
                                </div>
                            </div>
                            <h6>Social Group</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Religion</h6>
                                    <p class="text-muted"> <?= $res->religion ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Ethinicity</h6>
                                    <p class="text-muted"> <?= $res->ethnicity ?> </p>
                                </div>
                            </div>
                            <h6>Vulnerabilities</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>PWD</h6>
                                    <p class="text-muted"> <?= $res->pwd ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>4P'S</h6>
                                    <p class="text-muted"> <?= $res->for4ps ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Senior Citizen</h6>
                                    <p class="text-muted"> <?= $res->senior ?> </p>
                                </div>
                            </div>
                            <h6>Contact Information</h6>
                            <hr class="mt-0 mb-0">
                            <div class="row pt-1">
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Mobile</h6>
                                    <p class="text-muted"> <?= $res->mobile ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Purok</h6>
                                    <p class="text-muted"><?= $res->purok_desc ?></p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Household</h6>
                                    <p class="text-muted"> <?= $res->household_desc ?> </p>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <h6>Precinct</h6>
                                    <p class="text-muted"> <?= $res->precinct ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex">
                        <button type="button" class="flex-fill btn btn-primary" data-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>