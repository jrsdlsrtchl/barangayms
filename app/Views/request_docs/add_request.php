<!-- Modal for editing data -->
<div class="modal fade" id="addRequest" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel"> Add Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url() ?>RequestDocumentController/addrequest">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row modal-body mt-2 mx-3">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Type of Document:</label>
                                    <select name="certificate_id" class="form-control">
                                        <option hidden>Select Type of Document</option>
                                        <?php foreach ($document as $doc) { ?>
                                            <option value="<?= $doc->certificate_id; ?>"> <?= $doc->certificate_type; ?></option>
                                        <?php }; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Purpose:</label>
                                    <input type="text" name="purpose" class="form-control" placeholder="Enter purpose">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer d-flex mx-4 mb-2">
                            <button type="cancel" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>