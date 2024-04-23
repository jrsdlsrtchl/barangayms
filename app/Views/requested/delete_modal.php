<!-- Modal for deleting data -->
<?php foreach ($request as $req) { ?>
    <div class="modal fade" id="deleteRequest<?= $req->request_id; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteResidentLabel" aria-hidden="true">
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
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>requesteddoccontroller/deleteRequest/<?= $req->request_id ?>/<?= $req->certificate_id ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>