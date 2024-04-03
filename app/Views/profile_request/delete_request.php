<!-- Modal for deleting data -->
<?php foreach ($userdata as $user) { ?>
    <div class="modal fade" id="deleteRequest<?= $user->resident_id_store ?>" tabindex="-1" role="dialog" aria-labelledby="deleteResidentLabel" aria-hidden="true">
        <div class="modal-dialog rounded-0" role="document">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteResidentLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete this request?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>ProfileRequestController/deleterequest/<?= $user->resident_id_store ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>