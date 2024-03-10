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
                            <h4>Manage Resident</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>residentcontroller/resident">Residents</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add Resident
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Add New Resident</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>residentcontroller/addresident">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="middlename" placeholder="Enter middle name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" class="form-control" name="suffix" placeholder="Enter suffix">
                            </div>
                        </div>
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
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter age">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control date-picker" name="datebirth" placeholder="Select date of birth">
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
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Enter contact no.">
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
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Ethinicity</label>
                                <select name="ethnicity" class="form-control">
                                    <option value="">Select Ethnicity</option>
                                    <option value="Tagalog">Tagalog</option>
                                    <option value="Bisaya">Bisaya</option>
                                    <option value="Ilocano">Ilocano</option>
                                    <option value="Cebuano">Cebuano</option>
                                    <option value="Illonggo">Illonggo</option>
                                    <option value="Bicol">Bicol</option>
                                    <option value="Waray">Waray</option>
                                    <option value="Kapampangan">Kapampangan</option>
                                    <option value="Maranao">Maranao</option>
                                    <option value="Maguindanao">Illonggo</option>
                                    <option value="Tausog">Tausog</option>
                                    <option value="Pangasinan">Pangasinan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Educational Attainment</label>
                                <select name="education" class="form-control">
                                    <option value="">Select Education</option>
                                    <option value="None">None</option>
                                    <option value="ALS">ALS</option>
                                    <option value="Vocational">Vocational</option>
                                    <option value="Pre-school">Pre-school</option>
                                    <option value="Elem. Student">Elem. Student</option>
                                    <option value="Elem. Undergrad">Elem. Undergrad</option>
                                    <option value="Elem. Graduate">Elem. Graduate</option>
                                    <option value="HS Student">HS Student</option>
                                    <option value="HS Ungrad">HS Ungrad</option>
                                    <option value="HS Graduate">HS Graduate</option>
                                    <option value="SHS Student">SHS Student</option>
                                    <option value="SHS Undergrad">SHS Undergrad</option>
                                    <option value="College Undergrad">SHS Graduate</option>
                                    <option value="College Student">College Student</option>
                                    <option value="College Undergrad">College Undergrad</option>
                                    <option value="College Gradaute">College Gradaute</option>
                                    <option value="Post Grad">Post Grad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" name="occupation" placeholder="Enter occupation">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>4P's</label>
                                <select name="for4ps" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>PWD</label>
                                <select name="pwd" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Senior Citizen</label>
                                <select name="senior" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Precinct</label>
                                <select name="precinct" class="form-control" aria-placeholder="">
                                    <option value="">Select Precinct</option>
                                    <option value="0023A">0023A</option>
                                    <option value="0025B">0025B</option>
                                    <option value="0017C">0017C</option>
                                    <option value="0021A">0021A</option>
                                    <option value="0019B">0019B</option>
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
                                <label>Household</label>
                                <select class="custom-select2 form-control" name="household_id" style="width: 100%; height: 38px">
                                    <option value="">Select Household</option>
                                    <?php foreach ($household as $house) { ?>
                                        <option value="<?= $house->household_id ?>"> <?= $house->household_desc ?> Residence </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>residentcontroller/resident"><button type="button" class="btn btn-secondary"> Back </button></a>
                                    <button type="submit" class="btn btn-primary"> Add Resident</button>
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