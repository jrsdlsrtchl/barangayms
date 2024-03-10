<?= $this->extend("layout/base"); ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="title pb-20">
                <h2 class="h3 mb-0">Generate Report</h2>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Filter</h4>
                </div>

                <form action="<?= base_url() ?>generatereportcontroller/generatereport" method="post">
                    <div class="row mt-3 mx-3">
                        <?= csrf_field() ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow">Widow/er</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Cohabitation">Cohabitation</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="Roman Catholic">Roman Catholic</option>
                                    <option value="Iglesia Ni Cristo">Iglesia Ni Cristo</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Baptist">Baptist</option>
                                    <option value="Born Again">Born Again</option>
                                    <option value="Johovahs Witnesss">Johovahs Witnesss</option>
                                    <option value="Protestant">Protestant</option>
                                    <option value="Seventh Day Adventist">Seventh Day Adventist</option>
                                    <option value="Filipinista">Filipinista</option>
                                    <option value="Filipinista">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary"> Submit </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Residents Information Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Contact No.</th>
                                <th>Date of Birth</th>
                                <th>Civil Status</th>
                                <th>Religion</th>
                                <th class="datatable-nosort">Purok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resident as $res) { ?>
                                <tr>
                                    <td class="table-plus"><?= $res->lastname; ?></td>
                                    <td><?= $res->firstname; ?></td>
                                    <td><?= $res->middlename; ?></td>
                                    <td><?= $res->gender; ?></td>
                                    <td><?= $res->age; ?></td>
                                    <td><?= $res->mobile; ?></td>
                                    <td><?= $res->datebirth; ?></td>
                                    <td><?= $res->civilstatus; ?></td>
                                    <td><?= $res->religion; ?></td>
                                    <td><?= $res->purok_desc; ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>


<?= $this->endSection() ?>