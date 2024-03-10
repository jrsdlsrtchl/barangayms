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
                                    Add Barangay Official
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Add New Barangay Official</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>officialcontroller/addofficial">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <select class="custom-select2 form-control" name="resident_id" style="width: 100%; height: 38px">
                                    <option value="">Select Resident</option>
                                    <?php foreach ($resident as $res) { ?>
                                        <option value="<?= $res->resident_id ?>"> <?= $res->firstname . " " . substr($res->middlename, 0, 1) . ". " . $res->lastname  ?> </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Purok</label>
                                <select name="purok_id" class="form-control">
                                    <option value="">Select Purok</option>
                                    <?php foreach ($purok as $pur) { ?>
                                        <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Committee</label>
                                <select name="committee" class="form-control">
                                    <option value="">Select Committee</option>
                                    <option value="Committee on Appropriation">Committee on Appropriation</option>
                                    <option value="Committee on Education">Committee on Education</option>
                                    <option value="Committee on Health">Committee on Health</option>
                                    <option value="Committee on Infrastracture">Committee on Infrastracture</option>
                                    <option value="Committee on Agriculture">Committee on Agriculture</option>
                                    <option value="Committee on Ways and Means">Committee on Ways and Means</option>
                                    <option value="Committee on Peace and Order">Committee on Peace and Order</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Vice Chair Committee</label>
                                <select name="vice_committee" class="form-control">
                                    <option value="">Select Vice Committee</option>
                                    <option value="Committee on Appropriation">Committee on Appropriation</option>
                                    <option value="Committee on Education">Committee on Education</option>
                                    <option value="Committee on Health">Committee on Health</option>
                                    <option value="Committee on Infrastracture">Committee on Infrastracture</option>
                                    <option value="Committee on Agriculture">Committee on Agriculture</option>
                                    <option value="Committee on Ways and Means">Committee on Ways and Means</option>
                                    <option value="Committee on Peace and Order">Committee on Peace and Order</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select name="position" class="form-control">
                                    <option value="">Select Position</option>
                                    <option value="Captain">Captain</option>
                                    <option value="Councilor-1">Councilor-1</option>
                                    <option value="Councilor-2">Councilor-2</option>
                                    <option value="Councilor-3">Councilor-3</option>
                                    <option value="Councilor-4">Councilor-4</option>
                                    <option value="Councilor-5">Councilor-5</option>
                                    <option value="Councilor-6">Councilor-6</option>
                                    <option value="Councilor-7">Councilor-7</option>
                                    <option value="Sk Chairman">Sk Chairman</option>
                                    <option value="Secretary">Secretary</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Term</label>
                                <select name="term" class="form-control">
                                    <option value="">Select Term</option>
                                    <option value="First">First</option>
                                    <option value="Second">Second</option>
                                    <option value="Third">Third</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>officialcontroller/official"><button type="button" class="btn btn-secondary"> Back </button></a>
                                    <button type="submit" class="btn btn-primary"> Add Official</button>
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