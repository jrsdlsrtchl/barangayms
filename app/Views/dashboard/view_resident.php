<!-- Modal for editing data -->
<?php foreach ($resident as $res) { ?>
    <div class="modal fade" id="viewResident<?= $res->uniid; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">View Resident</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Last Name:</label>
                                        <label class="font-weight-bold"> <?= $res->lastname ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">First Name:</label>
                                        <label class="font-weight-bold"> <?= $res->firstname ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Middle Name:</label>
                                        <label class="font-weight-bold"> <?= $res->middlename ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Suffix:</label>
                                        <label class="font-weight-bold"> <?= $res->suffix ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Gender:</label>
                                        <label class="font-weight-bold"> <?= $res->gender ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Age:</label>
                                        <label class="font-weight-bold"> <?= $res->age ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Date of Birth:</label>
                                        <label class="font-weight-bold"> <?= $res->datebirth ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Civil Status:</label>
                                        <label class="font-weight-bold"> <?= $res->civilstatus ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Place of Birth:</label>
                                        <label class="font-weight-bold"> <?= $res->placebirth ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Citizenship:</label>
                                        <label class="font-weight-bold"> <?= $res->citizenship ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Contact No:</label>
                                        <label class="font-weight-bold"> <?= $res->mobile ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Religion:</label>
                                        <label class="font-weight-bold"> <?= $res->religion ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Ethnicity:</label>
                                        <label class="font-weight-bold"> <?= $res->ethnicity ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Educational Attainment:</label>
                                        <label class="font-weight-bold"> <?= $res->education ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Occupation:</label>
                                        <label class="font-weight-bold"> <?= $res->occupation ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">4Ps:</label>
                                        <label class="font-weight-bold"> <?= $res->for4ps ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">PWD:</label>
                                        <label class="font-weight-bold"> <?= $res->pwd ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Senior Citizen:</label>
                                        <label class="font-weight-bold"> <?= $res->senior ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Precinct:</label>
                                        <label class="font-weight-bold"> <?= $res->precinct ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Purok:</label>
                                        <label class="font-weight-bold"> <?= $res->purok_desc ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label class="font-weight-light">Household:</label>
                                        <label class="font-weight-bold"> <?= $res->household_desc ?> </label>
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer d-flex mx-4 mb-4">
                                <button type="button" class="flex-fill btn btn-primary" data-dismiss="modal">Okay</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }; ?>