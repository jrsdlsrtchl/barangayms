<!-- Modal for editing data -->
<?php foreach ($resident as $res) { ?>
    <div class="modal fade" id="accountResident<?= $res->uniid; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="<?= base_url() ?>usercontroller/addUserAccount">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">
                                <?= csrf_field() ?>

                                <input type="text" class="form-control" name="resident_id" value="<?= $res->resident_id ?>" hidden>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter email" value="<?= strtoupper($res->firstname . "" . $res->lastname) ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Enter password" value="<?= strtoupper($res->lastname . "" . $res->firstname . "" . $res->middlename) ?>">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Usertype</label>
                                        <select name="usertype" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Resident">Resident</option>
                                            <option value="Staff">Staff/Administrator</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer d-flex mx-4 mb-4">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Back </button>
                                <button type="submit" class="btn btn-primary"> Submit </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }; ?>