<!-- Modal for editing data -->
<div class="modal fade" id="addHousehold" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">Add Household</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url() ?>householdcontroller/addhousehold">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row modal-body mt-2 mx-3">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Household Name</label>
                                    <input type="text" class="form-control" name="household_desc" placeholder="Enter household name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Purok</label>
                                    <select name="purok_id" class="form-control">
                                        <option value="">Select Purok</option>
                                        <?php foreach ($selectpurok as $pur) { ?>
                                            <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                                        <?php }; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer d-flex mx-4 mb-3">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary"> Add Household</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>