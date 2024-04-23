<!-- Modal for editing data -->
<?php foreach ($request as $req) { ?>
    <div class="modal fade" id="updateRequest<?= $req->request_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel"> Add Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url() ?>RequestedDocController/updateRequest/<?= $req->request_id; ?>/<?= $req->certificate_id ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row modal-body mt-2 mx-3">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <select name="request_status" class="form-control">
                                            <option value="Pending" selected>Pending</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Release by:</label>
                                        <select name="official_id" class="form-control" required>
                                            <option value="">Select Official</option>
                                            <?php foreach ($official as $off) { ?>
                                                <option value="<?= $off->official_id ?>"> <?= $off->firstname . " " . substr($off->middlename, 0, 1) . ". " . $off->lastname  ?> </option>
                                            <?php }; ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer d-flex mx-4 mb-2">
                                <button type="cancel" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }; ?>