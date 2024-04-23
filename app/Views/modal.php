<?= $this->extend("layout/base"); ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <button class="btn btn-primary" data-toggle="modal" data-target="#viewResident">Launch Modal</button>
        </div>
    </div>
</div>


<div class="modal fade" id="viewResident" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
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
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="resident" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4>John Doe Batumbakal</h4>
                        <p class="text-secondary mb-0">Purok - 1</p>
                        <p class="text-secondary">+6398-1104-3220</p>

                        <button class="btn btn-primary btn-sm">Edit</button>

                        <button class="btn btn-outline-primary btn-sm">Delete</button>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card-body p-4">
                        <h6>Personal Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Last Name</h6>
                                <p class="text-muted">Doe</p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>First Name</h6>
                                <p class="text-muted">John</p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Middle Name</h6>
                                <p class="text-muted">Batumbakal</p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Suffix</h6>
                                <p class="text-muted"> III </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Birthdate</h6>
                                <p class="text-muted"> February 29, 1991 </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Age</h6>
                                <p class="text-muted"> 31 </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Gender</h6>
                                <p class="text-muted"> Male </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Civil Status</h6>
                                <p class="text-muted"> Single </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Place of Birth</h6>
                                <p class="text-muted"> Australia </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Citizenship</h6>
                                <p class="text-muted"> Filipino </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Occupation</h6>
                                <p class="text-muted"> Policeman </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Educational Attainment</h6>
                                <p class="text-muted"> College Graduate </p>
                            </div>
                        </div>

                        <h6>Social Group</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Religion</h6>
                                <p class="text-muted"> Roman Catholic </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Ethinicity</h6>
                                <p class="text-muted"> Cebuano </p>
                            </div>
                        </div>

                        <h6>Assistance</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>PWD</h6>
                                <p class="text-muted"> Yes </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>4P'S</h6>
                                <p class="text-muted"> Yes </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Senior Citizen</h6>
                                <p class="text-muted"> No </p>
                            </div>
                        </div>


                        <h6>Contact Information</h6>
                        <hr class="mt-0 mb-0">
                        <div class="row pt-1">
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Mobile</h6>
                                <p class="text-muted"> +6398-1104-3220 </p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Purok</h6>
                                <p class="text-muted">Purok - 7</p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Household</h6>
                                <p class="text-muted"> Batumbakal Residence</p>
                            </div>
                            <div class="col-lg-4 col-6 mb-3">
                                <h6>Precinct</h6>
                                <p class="text-muted">0023A</p>
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

<?= $this->endSection() ?>