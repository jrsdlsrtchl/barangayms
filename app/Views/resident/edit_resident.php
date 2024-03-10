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
                                    Edit Resident
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Edit Resident</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>residentcontroller/editresident/<?= $resident->uniid ?>">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter last name" value="<?= $resident->lastname; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter first name" value="<?= $resident->firstname; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="middlename" placeholder="Enter middle name" value="<?= $resident->middlename; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" class="form-control" name="suffix" placeholder="Enter suffix" value="<?= $resident->suffix; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= $resident->gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?= $resident->gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter age" value="<?= $resident->age; ?>">
                            </div>
                        </div>
                        <div class=" col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control date-picker" name="datebirth" placeholder="Select date of birth" value="<?= $resident->datebirth; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single" <?= $resident->civilstatus == 'Single' ? 'selected' : ''; ?>>Single</option>
                                    <option value="Married" <?= $resident->civilstatus == 'Married' ? 'selected' : ''; ?>>Married</option>
                                    <option value="Widow" <?= $resident->civilstatus == 'Widow' ? 'selected' : ''; ?>>Widow/er</option>
                                    <option value="Separated" <?= $resident->civilstatus == 'Separated' ? 'selected' : ''; ?>>Separated</option>
                                    <option value="Cohabitation" <?= $resident->civilstatus == 'Cohabitation' ? 'selected' : ''; ?>>Cohabitation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth" value="<?= $resident->placebirth; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship" value="<?= $resident->citizenship; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Enter contact no." value="<?= $resident->mobile; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="Roman Catholic" <?= $resident->religion == 'Roman Catholic' ? 'selected' : ''; ?>>Roman Catholic</option>
                                    <option value="Iglesia Ni Cristo" <?= $resident->religion == 'Iglesia Ni Cristo' ? 'selected' : ''; ?>>Iglesia Ni Cristo</option>
                                    <option value="Islam" <?= $resident->religion == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Baptist" <?= $resident->religion == 'Baptist' ? 'selected' : ''; ?>>Baptist</option>
                                    <option value="Born Again" <?= $resident->religion == 'Born Again' ? 'selected' : ''; ?>>Born Again</option>
                                    <option value="Johovahs Witnesss" <?= $resident->religion == 'Johovahs Witnesss' ? 'selected' : ''; ?>>Johovahs Witnesss</option>
                                    <option value="Protestant" <?= $resident->religion == 'Protestant' ? 'selected' : ''; ?>>Protestant</option>
                                    <option value="Seventh Day Adventist" <?= $resident->religion == 'Seventh Day Adventist' ? 'selected' : ''; ?>>Seventh Day Adventist</option>
                                    <option value="Filipinista" <?= $resident->religion == 'Filipinista' ? 'selected' : ''; ?>>Filipinista</option>
                                    <option value="Other" <?= $resident->religion == 'Other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Ethinicity</label>
                                <select name="ethnicity" class="form-control">
                                    <option value="">Select Ethnicity</option>
                                    <option value="Tagalog" <?= $resident->ethnicity == 'Tagalog' ? 'selected' : ''; ?>>Tagalog</option>
                                    <option value="Bisaya" <?= $resident->ethnicity == 'Bisaya' ? 'selected' : ''; ?>>Bisaya</option>
                                    <option value="Ilocano" <?= $resident->ethnicity == 'Ilocano' ? 'selected' : ''; ?>>Ilocano</option>
                                    <option value="Cebuano" <?= $resident->ethnicity == 'Cebuano' ? 'selected' : ''; ?>>Cebuano</option>
                                    <option value="Illonggo" <?= $resident->ethnicity == 'Illonggo' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Bicol" <?= $resident->ethnicity == 'Bicol' ? 'selected' : ''; ?>>Bicol</option>
                                    <option value="Waray" <?= $resident->ethnicity == 'Waray' ? 'selected' : ''; ?>>Waray</option>
                                    <option value="Kapampangan" <?= $resident->ethnicity == 'Kapampangan' ? 'selected' : ''; ?>>Kapampangan</option>
                                    <option value="Maranao" <?= $resident->ethnicity == 'Maranao' ? 'selected' : ''; ?>>Maranao</option>
                                    <option value="Maguindanao" <?= $resident->ethnicity == 'Maguindanao' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Tausog" <?= $resident->ethnicity == 'Tausog' ? 'selected' : ''; ?>>Tausog</option>
                                    <option value="Pangasinan" <?= $resident->ethnicity == 'Pangasinan' ? 'selected' : ''; ?>>Pangasinan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Educational Attainment</label>
                                <select name="education" class="form-control">
                                    <option value="">Select Educational Status</option>
                                    <option value="None" <?= $resident->education == 'None' ? 'selected' : ''; ?>>None</option>
                                    <option value="ALS" <?= $resident->education == 'ALS' ? 'selected' : ''; ?>>ALS</option>
                                    <option value="Vocational" <?= $resident->education == 'Vocational' ? 'selected' : ''; ?>>Vocational</option>
                                    <option value="Pre-school" <?= $resident->education == 'Pre-school' ? 'selected' : ''; ?>>Pre-school</option>
                                    <option value="Elem. Student" <?= $resident->education == 'Elem. Student' ? 'selected' : ''; ?>>Elem. Student</option>
                                    <option value="Elem. Undergrad" <?= $resident->education == 'Elem. Undergrad' ? 'selected' : ''; ?>>Elem. Undergrad</option>
                                    <option value="Elem. Graduate" <?= $resident->education == 'Elem. Graduate' ? 'selected' : ''; ?>>Elem. Graduate</option>
                                    <option value="HS Student" <?= $resident->education == 'HS Student' ? 'selected' : ''; ?>>HS Student</option>
                                    <option value="HS Ungrad" <?= $resident->education == 'HS Ungrad' ? 'selected' : ''; ?>>HS Ungrad</option>
                                    <option value="HS Graduate" <?= $resident->education == 'HS Graduate' ? 'selected' : ''; ?>>HS Graduate</option>
                                    <option value="SHS Student" <?= $resident->education == 'SHS Student' ? 'selected' : ''; ?>>SHS Student</option>
                                    <option value="SHS Undergrad" <?= $resident->education == 'SHS Undergrad' ? 'selected' : ''; ?>>SHS Undergrad</option>
                                    <option value="College Undergrad" <?= $resident->education == 'College Undergrad' ? 'selected' : ''; ?>>SHS Graduate</option>
                                    <option value="College Student" <?= $resident->education == 'College Student' ? 'selected' : ''; ?>>College Student</option>
                                    <option value="College Undergrad" <?= $resident->education == 'College Undergrad' ? 'selected' : ''; ?>>College Undergrad</option>
                                    <option value="College Gradaute" <?= $resident->education == 'College Gradaute' ? 'selected' : ''; ?>>College Gradaute</option>
                                    <option value="Post Grad" <?= $resident->education == 'Post Grad' ? 'selected' : ''; ?>>Post Grad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" name="occupation" placeholder="Enter occupation" value="<?= $resident->occupation ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>4P's</label>
                                <select name="for4ps" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident->for4ps == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident->for4ps == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>PWD</label>
                                <select name="pwd" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident->pwd == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident->pwd == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Senior Citizen</label>
                                <select name="senior" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident->senior == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident->senior == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Precinct</label>
                                <select name="precinct" class="form-control" aria-placeholder="">
                                    <option value="">Select Precinct</option>
                                    <option value="0023A" <?= $resident->precinct == '0023A' ? 'selected' : ''; ?>>0023A</option>
                                    <option value="0025B" <?= $resident->precinct == '0025B' ? 'selected' : ''; ?>>0025B</option>
                                    <option value="0017C" <?= $resident->precinct == '0017C' ? 'selected' : ''; ?>>0017C</option>
                                    <option value="0021A" <?= $resident->precinct == '0021A' ? 'selected' : ''; ?>>0021A</option>
                                    <option value="0019B" <?= $resident->precinct == '0019B' ? 'selected' : ''; ?>>0019B</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Purok</label>
                                <select name="purok_id" class="form-control">
                                    <?php foreach ($purok as $pur) {
                                        $userID = $pur->purok_id;
                                        $isSelected = $resident->purok_id === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $userID; ?> " <?= $isSelected; ?>> <?= $pur->purok_desc; ?></option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Household</label>
                                <select class="custom-select2 form-control" name="household_id" style="width: 100%; height: 38px">
                                    <?php foreach ($household as $house) {
                                        $userID = $house->household_id;
                                        $isSelected = $resident->household_id === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $userID; ?> " <?= $isSelected; ?>> <?= $house->household_desc; ?></option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>residentcontroller/resident"><button type="button" class="btn btn-secondary"> Back </button></a>
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