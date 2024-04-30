<!--View Profile -->
<div class="tab-pane fade show active" id="profile" role="tabpanel">
    <div class="pd-10">
        <form method="post" action="#">
            <ul class="profile-timeline">
                <li class="weight-500 col-md-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 p-2">
                                <h6>Last Name</h6>
                                <p class="text-muted"> <?= $userdata['0']->lastname ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>First Name</h6>
                                <p class="text-muted"> <?= $userdata['0']->firstname ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Middle Name</h6>
                                <p class="text-muted"> <?= $userdata['0']->middlename ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Suffix</h6>
                                <p class="text-muted"> <?= $userdata['0']->suffix ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Birthdate</h6>
                                <p class="text-muted"> <?= $userdata['0']->datebirth ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Age</h6>
                                <p class="text-muted"> <?= $userdata['0']->age . ' years old' ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Gender</h6>
                                <p class="text-muted"> <?= $userdata['0']->gender ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Civil Status</h6>
                                <p class="text-muted"> <?= $userdata['0']->civilstatus ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Place of Birth</h6>
                                <p class="text-muted"> <?= $userdata['0']->placebirth ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Citizenship</h6>
                                <p class="text-muted"> <?= $userdata['0']->citizenship ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Occupation</h6>
                                <p class="text-muted"> <?= $userdata['0']->occupation ?> </p>
                            </div>
                            <div class="col-6 p-2">
                                <h6>Educational Attainment</h6>
                                <p class="text-muted"> <?= $userdata['0']->education ?> </p>
                            </div>

                            <h6 class="col-12 mt-5 mb-3">SOCIAL GROUP:</h6>
                            <div class="col-6">
                                <h6>Religion</h6>
                                <p class="text-muted"> <?= $userdata['0']->religion ?> </p>
                            </div>
                            <div class="col-6">
                                <h6>Ethinicity</h6>
                                <p class="text-muted"> <?= $userdata['0']->ethnicity ?> </p>
                            </div>

                            <h6 class="col-12 mt-5 mb-3">VULNERABILITIES:</h6>
                            <div class="col-6">
                                <h6>PWD</h6>
                                <p class="text-muted"> <?= $userdata['0']->pwd ?> </p>
                            </div>
                            <div class="col-6">
                                <h6>4P'S</h6>
                                <p class="text-muted"> <?= $userdata['0']->for4ps ?> </p>
                            </div>
                            <div class="col-6">
                                <h6>Senior Citizen</h6>
                                <p class="text-muted"> <?= $userdata['0']->senior ?> </p>
                            </div>

                            <h6 class="col-12 mt-5 mb-3">CONTACT INFORMATION:</h6>
                            <div class="col-6">
                                <h6>Mobile</h6>
                                <p class="text-muted"> <?= $userdata['0']->mobile ?> </p>
                            </div>
                            <div class="col-6">
                                <h6>Purok</h6>
                                <p class="text-muted"><?= $userdata['0']->purok_desc ?></p>
                            </div>
                            <div class="col-6">
                                <h6>Household</h6>
                                <p class="text-muted"> <?= $userdata['0']->household_desc ?> </p>
                            </div>
                            <div class="col-6">
                                <h6>Precinct</h6>
                                <p class="text-muted"> <?= $userdata['0']->precinct ?> </p>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </form>
    </div>
</div>
<!-- View Profile -->