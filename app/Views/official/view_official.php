<!-- Modal for editing data -->
<?php foreach ($official as $off) { ?>
    <div class="modal fade" id="viewOfficial<?= $off->off_uniid; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">View Barangay Official</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Name:</label>
                                        <label class="font-weight-bold"> <?= $off->firstname . " " . substr($off->middlename, 0, 1) . ". " . $off->lastname  ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Purok:</label>
                                        <label class="font-weight-bold"> <?= $off->purok_desc ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Committee:</label>
                                        <label class="font-weight-bold"> <?= $off->committee ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Vice Chair Committee:</label>
                                        <label class="font-weight-bold"> <?= $off->vice_committee ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Position:</label>
                                        <label class="font-weight-bold"> <?= $off->position ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Term:</label>
                                        <label class="font-weight-bold"> <?= $off->term ?> </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="font-weight-light">Status:</label>
                                        <label class="font-weight-bold"> <?= $off->status ?> </label>
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