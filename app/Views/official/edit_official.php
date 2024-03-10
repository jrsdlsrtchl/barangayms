<?= $this->extend("layout/base_form"); ?>

<?= $this->section("content") ?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Manage Barangay Official</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>officialcontroller/official">Barangay Official</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Barangay Official
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Edit Barangay Official</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>officialcontroller/editofficial/<?= $official->off_uniid ?>">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <select class="custom-select2 form-control" name="resident_id" style="width: 100%; height: 38px">
                                    <option value="">Select Resident</option>
                                    <?php foreach ($resident as $res) {
                                        $userID = $res->resident_id;
                                        $isSelected = $official->resident_id === $userID ? 'selected' : ''; ?>
                                        <option value="<?= $userID; ?> " <?= $isSelected; ?>>
                                            <?= $res->firstname . " " . substr($res->middlename, 0, 1) . ". " . $res->lastname  ?>
                                        </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Purok</label>
                                <select name="purok_id" class="form-control">
                                    <option value="">Select Purok</option>
                                    <?php foreach ($purok as $pur) {
                                        $userID = $pur->purok_id;
                                        $isSelected = $official->purok_id === $userID ? 'selected' : '' ?>
                                        <option value="<?= $userID; ?> " <?= $isSelected; ?>>
                                            <?= $pur->purok_desc; ?>
                                        </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Committee</label>
                                <select name="committee" class="form-control">
                                    <option value="">Select Committee</option>
                                    <option value="Committee on Appropriation" <?= $official->committee == 'Committee on Appropriation' ? 'selected' : ''; ?>>Committee on Appropriation</option>
                                    <option value="Committee on Education" <?= $official->committee == 'Committee on Education' ? 'selected' : ''; ?>>Committee on Education</option>
                                    <option value="Committee on Health" <?= $official->committee == 'Committee on Health' ? 'selected' : ''; ?>>Committee on Health</option>
                                    <option value="Committee on Infrastracture" <?= $official->committee == 'Committee on Infrastracture' ? 'selected' : ''; ?>>Committee on Infrastracture</option>
                                    <option value="Committee on Agriculture" <?= $official->committee == 'Committee on Agriculture' ? 'selected' : ''; ?>>Committee on Agriculture</option>
                                    <option value="Committee on Ways and Means" <?= $official->committee == 'Committee on Ways and Means' ? 'selected' : ''; ?>>Committee on Ways and Means</option>
                                    <option value="Committee on Peace and Order" <?= $official->committee == 'Committee on Peace and Order' ? 'selected' : ''; ?>>Committee on Peace and Order</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Vice Chair Committee</label>
                                <select name="vice_committee" class="form-control">
                                    <option value="">Select Vice Committee</option>
                                    <option value="Committee on Appropriation" <?= $official->vice_committee == 'Committee on Appropriation' ? 'selected' : ''; ?>>Committee on Appropriation</option>
                                    <option value="Committee on Education" <?= $official->vice_committee == 'Committee on Education' ? 'selected' : ''; ?>>Committee on Education</option>
                                    <option value="Committee on Health" <?= $official->vice_committee == 'Committee on Health' ? 'selected' : ''; ?>>Committee on Health</option>
                                    <option value="Committee on Infrastracture" <?= $official->vice_committee == 'Committee on Infrastracture' ? 'selected' : ''; ?>>Committee on Infrastracture</option>
                                    <option value="Committee on Agriculture" <?= $official->vice_committee == 'Committee on Agriculture' ? 'selected' : ''; ?>>Committee on Agriculture</option>
                                    <option value="Committee on Ways and Means" <?= $official->vice_committee == 'Committee on Ways and Means' ? 'selected' : ''; ?>>Committee on Ways and Means</option>
                                    <option value="Committee on Peace and Order" <?= $official->vice_committee == 'Committee on Peace and Order' ? 'selected' : ''; ?>>Committee on Peace and Order</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select name="position" class="form-control">
                                    <option value="">Select Position</option>
                                    <option value="Captain" <?= $official->position == 'Captain' ? 'selected' : ''; ?>>Captain</option>
                                    <option value="Councilor-1" <?= $official->position == 'Councilor-1' ? 'selected' : ''; ?>>Councilor-1</option>
                                    <option value="Councilor-2" <?= $official->position == 'Councilor-2' ? 'selected' : ''; ?>>Councilor-2</option>
                                    <option value="Councilor-3" <?= $official->position == 'Councilor-3' ? 'selected' : ''; ?>>Councilor-3</option>
                                    <option value="Councilor-4" <?= $official->position == 'Councilor-4' ? 'selected' : ''; ?>>Councilor-4</option>
                                    <option value="Councilor-5" <?= $official->position == 'Councilor-5' ? 'selected' : ''; ?>>Councilor-5</option>
                                    <option value="Councilor-6" <?= $official->position == 'Councilor-6' ? 'selected' : ''; ?>>Councilor-6</option>
                                    <option value="Councilor-7" <?= $official->position == 'Councilor-7' ? 'selected' : ''; ?>>Councilor-7</option>
                                    <option value="Sk Chairman" <?= $official->position == 'Sk Chairman' ? 'selected' : ''; ?>>Sk Chairman</option>
                                    <option value="Secretary" <?= $official->position == 'Secretary' ? 'selected' : ''; ?>>Secretary</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Term</label>
                                <select name="term" class="form-control">
                                    <option value="">Select Term</option>
                                    <option value="First" <?= $official->term == 'First' ? 'selected' : ''; ?>>First</option>
                                    <option value="Second" <?= $official->term == 'Second' ? 'selected' : ''; ?>>Second</option>
                                    <option value="Third" <?= $official->term == 'Third' ? 'selected' : ''; ?>>Third</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="Active" <?= $official->status == 'Active' ? 'selected' : ''; ?>>Active</option>
                                    <option value="Inactive" <?= $official->status == 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>officialcontroller/official"><button type="button" class="btn btn-secondary"> Back </button></a>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>