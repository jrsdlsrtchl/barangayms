<!-- Modal for editing data -->
<div class="modal fade" id="addType" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">Add Assistance Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url() ?>assistancecontroller/addtypeassistance">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row modal-body mt-2 mx-3">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Type of Assistance Name</label>
                                    <input type="text" class="form-control" name="type_assistance" placeholder="Enter assistance type">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer d-flex mx-4 mb-3">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>