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
                            <h4>Manage User Account</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="">User Management</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add User
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Add New User</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>UserManagementController/adduser">
                    <?= csrf_field(); ?>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
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

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Usertype</label>
                                <select name="usertype" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="Resident">Resident</option>
                                    <option value="Admin">Staff/Administrator</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>officialcontroller/official"><button type="button" class="btn btn-secondary"> Back </button></a>
                                    <button type="submit" class="btn btn-primary"> Add User</button>
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