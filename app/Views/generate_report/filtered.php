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

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= set_value('gender') == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?= set_value('gender') == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single" <?= set_value('civilstatus') == 'Single' ? 'selected' : ''; ?>>Single</option>
                                    <option value="Married" <?= set_value('civilstatus') == 'Married' ? 'selected' : ''; ?>>Married</option>
                                    <option value="Widow" <?= set_value('civilstatus') == 'Widow' ? 'selected' : ''; ?>>Widow/er</option>
                                    <option value="Separated" <?= set_value('civilstatus') == 'Separated' ? 'selected' : ''; ?>>Separated</option>
                                    <option value="Cohabitation" <?= set_value('civilstatus') == 'Cohabitation' ? 'selected' : ''; ?>>Cohabitation</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="Roman Catholic" <?= set_value('religion') == 'Roman Catholic' ? 'selected' : ''; ?>>Roman Catholic</option>
                                    <option value="Iglesia Ni Cristo" <?= set_value('religion') == 'Iglesia Ni Cristo' ? 'selected' : ''; ?>>Iglesia Ni Cristo</option>
                                    <option value="Islam" <?= set_value('religion') == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Baptist" <?= set_value('religion') == 'Baptist' ? 'selected' : ''; ?>>Baptist</option>
                                    <option value="Born Again" <?= set_value('religion') == 'Born Again' ? 'selected' : ''; ?>>Born Again</option>
                                    <option value="Johovahs Witnesss" <?= set_value('religion') == 'Johovahs Witnesss' ? 'selected' : ''; ?>>Johovahs Witnesss</option>
                                    <option value="Protestant" <?= set_value('religion') == 'Protestant' ? 'selected' : ''; ?>>Protestant</option>
                                    <option value="Seventh Day Adventist" <?= set_value('religion') == 'Seventh Day Adventist' ? 'selected' : ''; ?>>Seventh Day Adventist</option>
                                    <option value="Filipinista" <?= set_value('religion') == 'Filipinista' ? 'selected' : ''; ?>>Filipinista</option>
                                    <option value="Other" <?= set_value('religion') == 'Other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Ethinicity</label>
                                <select name="ethnicity" class="form-control">
                                    <option value="">Select Ethnicity</option>
                                    <option value="Tagalog" <?= set_value('ethnicity') == 'Tagalog' ? 'selected' : ''; ?>>Tagalog</option>
                                    <option value="Bisaya" <?= set_value('ethnicity') == 'Bisaya' ? 'selected' : ''; ?>>Bisaya</option>
                                    <option value="Ilocano" <?= set_value('ethnicity') == 'Ilocano' ? 'selected' : ''; ?>>Ilocano</option>
                                    <option value="Cebuano" <?= set_value('ethnicity') == 'Cebuano' ? 'selected' : ''; ?>>Cebuano</option>
                                    <option value="Illonggo" <?= set_value('ethnicity') == 'Illonggo' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Bicol" <?= set_value('ethnicity') == 'Bicol' ? 'selected' : ''; ?>>Bicol</option>
                                    <option value="Waray" <?= set_value('ethnicity') == 'Waray' ? 'selected' : ''; ?>>Waray</option>
                                    <option value="Kapampangan" <?= set_value('ethnicity') == 'Kapampangan' ? 'selected' : ''; ?>>Kapampangan</option>
                                    <option value="Maranao" <?= set_value('ethnicity') == 'Maranao' ? 'selected' : ''; ?>>Maranao</option>
                                    <option value="Maguindanao" <?= set_value('ethnicity') == 'Maguindanao' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Tausog" <?= set_value('ethnicity') == 'Tausog' ? 'selected' : ''; ?>>Tausog</option>
                                    <option value="Pangasinan" <?= set_value('ethnicity') == 'Pangasinan' ? 'selected' : ''; ?>>Pangasinan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Educational Attainment</label>
                                <select name="education" class="form-control">
                                    <option value="">Select Education</option>
                                    <option value="None" <?= set_value('education') == 'None' ? 'selected' : ''; ?>>None</option>
                                    <option value="ALS" <?= set_value('education') == 'ALS' ? 'selected' : ''; ?>>ALS</option>
                                    <option value="Vocational" <?= set_value('education') == 'Vocational' ? 'selected' : ''; ?>>Vocational</option>
                                    <option value="Pre-school" <?= set_value('education') == 'Pre-school' ? 'selected' : ''; ?>>Pre-school</option>
                                    <option value="Elem. Student" <?= set_value('education') == 'Elem. Student' ? 'selected' : ''; ?>>Elem. Student</option>
                                    <option value="Elem. Undergrad" <?= set_value('education') == 'Elem. Undergrad' ? 'selected' : ''; ?>>Elem. Undergrad</option>
                                    <option value="Elem. Graduate" <?= set_value('education') == 'Elem. Graduate' ? 'selected' : ''; ?>>Elem. Graduate</option>
                                    <option value="HS Student" <?= set_value('education') == 'HS Student' ? 'selected' : ''; ?>>HS Student</option>
                                    <option value="HS Ungrad" <?= set_value('education') == 'HS Ungrad' ? 'selected' : ''; ?>>HS Ungrad</option>
                                    <option value="HS Graduate" <?= set_value('education') == 'HS Graduate' ? 'selected' : ''; ?>>HS Graduate</option>
                                    <option value="SHS Student" <?= set_value('education') == 'SHS Student' ? 'selected' : ''; ?>>SHS Student</option>
                                    <option value="SHS Undergrad" <?= set_value('education') == 'SHS Undergrad' ? 'selected' : ''; ?>>SHS Undergrad</option>
                                    <option value="College Undergrad" <?= set_value('education') == 'College Undergrad' ? 'selected' : ''; ?>>SHS Graduate</option>
                                    <option value="College Student" <?= set_value('education') == 'Student' ? 'selected' : ''; ?>>College Student</option>
                                    <option value="College Undergrad" <?= set_value('education') == 'College Undergrad' ? 'selected' : ''; ?>>College Undergrad</option>
                                    <option value="College Gradaute" <?= set_value('education') == 'College Gradaute' ? 'selected' : ''; ?>>College Gradaute</option>
                                    <option value="Post Grad" <?= set_value('education') == 'Post Grad' ? 'selected' : ''; ?>>Post Grad</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>4P's</label>
                                <select name="for4ps" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('for4ps') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= set_value('for4ps') == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>PWD</label>
                                <select name="pwd" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('pwd') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= set_value('pwd') == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Senior Citizen</label>
                                <select name="senior" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('senior') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= set_value('senior') == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Precinct</label>
                                <select name="precinct" class="form-control" aria-placeholder="">
                                    <option value="">Select Precinct</option>
                                    <option value="0023A" <?= set_value('precinct') == '0023A' ? 'selected' : ''; ?>>0023A</option>
                                    <option value="0025B" <?= set_value('precinct') == '0025B' ? 'selected' : ''; ?>>0025B</option>
                                    <option value="0017C" <?= set_value('precinct') == '0017C' ? 'selected' : ''; ?>>0017C</option>
                                    <option value="0021A" <?= set_value('precinct') == '0021A' ? 'selected' : ''; ?>>0021A</option>
                                    <option value="0019B" <?= set_value('precinct') == '0019B' ? 'selected' : ''; ?>>0019B</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" name="min_age" value="<?= set_value('min_age') ?>" class="form-control" placeholder="Enter min. age">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>.</label>
                                <input type="number" name="max_age" value="<?= set_value('min_age') ?>" class="form-control" placeholder="Enter max. age">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Purok</label>
                                <select name="purok_id" class="form-control">
                                    <option value="">Select Purok</option>
                                    <?php foreach ($purok as $pur) {
                                        $userID = $pur->purok_id;
                                        $selectedPurok = set_value('purok_id');
                                        $isSelected = $selectedPurok === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $userID; ?>" <?= $isSelected; ?>><?= $pur->purok_desc; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Household</label>
                                <select class="custom-select2 form-control" name="household_id" style="width: 100%; height: 38px">
                                    <option value="">Select Household</option>
                                    <?php foreach ($household as $house) {
                                        $userID = $house->household_id;
                                        $selectedHousehold = set_value('household_id');
                                        $isSelected = $selectedHousehold === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $userID; ?>" <?= $isSelected; ?>><?= $house->household_desc; ?> Residence</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary"> Generate </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-box mb-30">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="text-blue mt-2 h4">Residents Information Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Contact No.</th>
                                <th>Date of Birth</th>
                                <th>Purok</th>
                                <th class="datatable-nosort">Action</th>
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
                                    <td><?= $res->purok_desc; ?></td>
                                    <td> <a href="" data-toggle="modal" data-target="#viewResident<?= $res->uniid; ?>"><i class="dw dw-eye"></i> View</a></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->include("resident/view_modal") ?>

<?= $this->endSection() ?>