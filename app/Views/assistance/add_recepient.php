<!-- Modal for editing data -->
<div class="modal fade" id="addRecepient" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formviewResident" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold ml-4" id="formviewResidentLabel">Add Recepient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url() ?>assistancecontroller/addAssistance">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row modal-body mt-2 mx-3">

                            <input type="text" name="date_receive" value="<?= $resident['0']->date_receive ?>" hidden>
                            <input type="text" name="type_assistance_id" value="<?= $resident['0']->type_assistance_id ?>" hidden>
                            <input type="text" name="official_id" value="<?= $resident['0']->official_id ?>" hidden>
                            <input type="text" name="distribute_date" value="<?= $resident['0']->distribute_date ?>" hidden>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Recipients</label>
                                    <select class="custom-select2 form-control" name="resident_id[]" multiple="multiple" style="width: 100%">
                                        <?php foreach ($getresident as $res) { ?>
                                            <option value="<?= $res->resident_id ?>"> <?= $res->firstname . " " . substr($res->middlename, 0, 1) . ". " . $res->lastname  ?> </option>
                                        <?php }; ?>
                                    </select>
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