<!-- Modal for deleting data -->
<?php foreach ($household as $house) { ?>
    <div class="modal fade" id="deleteHousehold<?= $house->household_id; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteResidentLabel" aria-hidden="true">
        <div class="modal-dialog rounded-0" role="document">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteResidentLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete this household?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>householdcontroller/deletehousehold/<?= $house->household_id ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>