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
                            <h4>Manage Profile Request</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>residentcontroller/resident">Profile Request</a>
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
                    <h4 class="text-blue mt-2 h4">Review Profile Request</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>ProfileRequestController/updateprofile/<?= $resident['0']->resident_id ?>/<?= $resident['0']->resident_id_store ?>">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter last name" value="<?= $resident['0']->lastname; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter first name" value="<?= $resident['0']->firstname; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="middlename" placeholder="Enter middle name" value="<?= $resident['0']->middlename; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" class="form-control" name="suffix" placeholder="Enter suffix" value="<?= $resident['0']->suffix; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= $resident['0']->gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?= $resident['0']->gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter age" value="<?= $resident['0']->age; ?>">
                            </div>
                        </div>
                        <div class=" col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control date-picker" name="datebirth" placeholder="Select date of birth" value="<?= $resident['0']->datebirth; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single" <?= $resident['0']->civilstatus == 'Single' ? 'selected' : ''; ?>>Single</option>
                                    <option value="Married" <?= $resident['0']->civilstatus == 'Married' ? 'selected' : ''; ?>>Married</option>
                                    <option value="Widow" <?= $resident['0']->civilstatus == 'Widow' ? 'selected' : ''; ?>>Widow/er</option>
                                    <option value="Separated" <?= $resident['0']->civilstatus == 'Separated' ? 'selected' : ''; ?>>Separated</option>
                                    <option value="Cohabitation" <?= $resident['0']->civilstatus == 'Cohabitation' ? 'selected' : ''; ?>>Cohabitation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth" value="<?= $resident['0']->placebirth; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship" value="<?= $resident['0']->citizenship; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Enter contact no." value="<?= $resident['0']->mobile; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="Roman Catholic" <?= $resident['0']->religion == 'Roman Catholic' ? 'selected' : ''; ?>>Roman Catholic</option>
                                    <option value="Iglesia Ni Cristo" <?= $resident['0']->religion == 'Iglesia Ni Cristo' ? 'selected' : ''; ?>>Iglesia Ni Cristo</option>
                                    <option value="Islam" <?= $resident['0']->religion == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Baptist" <?= $resident['0']->religion == 'Baptist' ? 'selected' : ''; ?>>Baptist</option>
                                    <option value="Born Again" <?= $resident['0']->religion == 'Born Again' ? 'selected' : ''; ?>>Born Again</option>
                                    <option value="Johovahs Witnesss" <?= $resident['0']->religion == 'Johovahs Witnesss' ? 'selected' : ''; ?>>Johovahs Witnesss</option>
                                    <option value="Protestant" <?= $resident['0']->religion == 'Protestant' ? 'selected' : ''; ?>>Protestant</option>
                                    <option value="Seventh Day Adventist" <?= $resident['0']->religion == 'Seventh Day Adventist' ? 'selected' : ''; ?>>Seventh Day Adventist</option>
                                    <option value="Filipinista" <?= $resident['0']->religion == 'Filipinista' ? 'selected' : ''; ?>>Filipinista</option>
                                    <option value="Other" <?= $resident['0']->religion == 'Other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Ethinicity</label>
                                <select name="ethnicity" class="form-control">
                                    <option value="">Select Ethnicity</option>
                                    <option value="Tagalog" <?= $resident['0']->ethnicity == 'Tagalog' ? 'selected' : ''; ?>>Tagalog</option>
                                    <option value="Bisaya" <?= $resident['0']->ethnicity == 'Bisaya' ? 'selected' : ''; ?>>Bisaya</option>
                                    <option value="Ilocano" <?= $resident['0']->ethnicity == 'Ilocano' ? 'selected' : ''; ?>>Ilocano</option>
                                    <option value="Cebuano" <?= $resident['0']->ethnicity == 'Cebuano' ? 'selected' : ''; ?>>Cebuano</option>
                                    <option value="Illonggo" <?= $resident['0']->ethnicity == 'Illonggo' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Bicol" <?= $resident['0']->ethnicity == 'Bicol' ? 'selected' : ''; ?>>Bicol</option>
                                    <option value="Waray" <?= $resident['0']->ethnicity == 'Waray' ? 'selected' : ''; ?>>Waray</option>
                                    <option value="Kapampangan" <?= $resident['0']->ethnicity == 'Kapampangan' ? 'selected' : ''; ?>>Kapampangan</option>
                                    <option value="Maranao" <?= $resident['0']->ethnicity == 'Maranao' ? 'selected' : ''; ?>>Maranao</option>
                                    <option value="Maguindanao" <?= $resident['0']->ethnicity == 'Maguindanao' ? 'selected' : ''; ?>>Illonggo</option>
                                    <option value="Tausog" <?= $resident['0']->ethnicity == 'Tausog' ? 'selected' : ''; ?>>Tausog</option>
                                    <option value="Pangasinan" <?= $resident['0']->ethnicity == 'Pangasinan' ? 'selected' : ''; ?>>Pangasinan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Educational Attainment</label>
                                <select name="education" class="form-control">
                                    <option value="">Select Educational Status</option>
                                    <option value="None" <?= $resident['0']->education == 'None' ? 'selected' : ''; ?>>None</option>
                                    <option value="ALS" <?= $resident['0']->education == 'ALS' ? 'selected' : ''; ?>>ALS</option>
                                    <option value="Vocational" <?= $resident['0']->education == 'Vocational' ? 'selected' : ''; ?>>Vocational</option>
                                    <option value="Pre-school" <?= $resident['0']->education == 'Pre-school' ? 'selected' : ''; ?>>Pre-school</option>
                                    <option value="Elem. Student" <?= $resident['0']->education == 'Elem. Student' ? 'selected' : ''; ?>>Elem. Student</option>
                                    <option value="Elem. Undergrad" <?= $resident['0']->education == 'Elem. Undergrad' ? 'selected' : ''; ?>>Elem. Undergrad</option>
                                    <option value="Elem. Graduate" <?= $resident['0']->education == 'Elem. Graduate' ? 'selected' : ''; ?>>Elem. Graduate</option>
                                    <option value="HS Student" <?= $resident['0']->education == 'HS Student' ? 'selected' : ''; ?>>HS Student</option>
                                    <option value="HS Ungrad" <?= $resident['0']->education == 'HS Ungrad' ? 'selected' : ''; ?>>HS Ungrad</option>
                                    <option value="HS Graduate" <?= $resident['0']->education == 'HS Graduate' ? 'selected' : ''; ?>>HS Graduate</option>
                                    <option value="SHS Student" <?= $resident['0']->education == 'SHS Student' ? 'selected' : ''; ?>>SHS Student</option>
                                    <option value="SHS Undergrad" <?= $resident['0']->education == 'SHS Undergrad' ? 'selected' : ''; ?>>SHS Undergrad</option>
                                    <option value="College Undergrad" <?= $resident['0']->education == 'College Undergrad' ? 'selected' : ''; ?>>SHS Graduate</option>
                                    <option value="College Student" <?= $resident['0']->education == 'College Student' ? 'selected' : ''; ?>>College Student</option>
                                    <option value="College Undergrad" <?= $resident['0']->education == 'College Undergrad' ? 'selected' : ''; ?>>College Undergrad</option>
                                    <option value="College Gradaute" <?= $resident['0']->education == 'College Gradaute' ? 'selected' : ''; ?>>College Gradaute</option>
                                    <option value="Post Grad" <?= $resident['0']->education == 'Post Grad' ? 'selected' : ''; ?>>Post Grad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" name="occupation" placeholder="Enter occupation" value="<?= $resident['0']->occupation ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>4P's</label>
                                <select name="for4ps" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident['0']->for4ps == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident['0']->for4ps == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>PWD</label>
                                <select name="pwd" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident['0']->pwd == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident['0']->pwd == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Senior Citizen</label>
                                <select name="senior" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= $resident['0']->senior == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?= $resident['0']->senior == 'No' ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Precinct</label>
                                <select name="precinct" class="form-control" aria-placeholder="">
                                    <option value="">Select Precinct</option>
                                    <option value="0023A" <?= $resident['0']->precinct == '0023A' ? 'selected' : ''; ?>>0023A</option>
                                    <option value="0025B" <?= $resident['0']->precinct == '0025B' ? 'selected' : ''; ?>>0025B</option>
                                    <option value="0017C" <?= $resident['0']->precinct == '0017C' ? 'selected' : ''; ?>>0017C</option>
                                    <option value="0021A" <?= $resident['0']->precinct == '0021A' ? 'selected' : ''; ?>>0021A</option>
                                    <option value="0019B" <?= $resident['0']->precinct == '0019B' ? 'selected' : ''; ?>>0019B</option>
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
                                        $isSelected = $resident['0']->purok_id === $userID ? 'selected' : '';
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
                                    <option value="">Select Household</option>
                                    <?php foreach ($household as $house) {
                                        $userID = $house->household_id;
                                        $isSelected = $resident['0']->household_id === $userID ? 'selected' : '';
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