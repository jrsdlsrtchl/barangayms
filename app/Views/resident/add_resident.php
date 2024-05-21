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
                <form class="m-4" method="post" class="needs-validation" action="<?= base_url() ?>residentcontroller/addresident" novalidate>
                    <?= csrf_field(); ?>
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" value="<?= set_value('lastname') ?>" placeholder="Enter last name">
                                <span class="text-danger small"> <?= display_error($validation, 'lastname') ?></span>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname') ?>" placeholder="Enter first name">
                                <span class="text-danger small"> <?= display_error($validation, 'firstname') ?></span>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="middlename" value="<?= set_value('middlename') ?>" placeholder="Enter middle name">
                                <span class="text-danger small"> <?= display_error($validation, 'middlename') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" class="form-control" name="suffix" value="<?= set_value('suffix') ?>" placeholder="Enter suffix">
                                <span class="text-danger small"> <?= display_error($validation, 'suffix') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= set_value('gender') == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= set_value('gender') == 'Female' ? 'selected' : '' ?>>Female</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'gender') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" value="<?= set_value('age') ?>" placeholder="Enter age">
                                <span class="text-danger small"> <?= display_error($validation, 'age') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control date-picker" name="datebirth" value="<?= set_value('datebirth') ?>" placeholder="Select date of birth">
                                <span class="text-danger small"> <?= display_error($validation, 'datebirth') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single" <?= set_value('civilstatus') == 'Single' ? 'selected' : '' ?>>Single</option>
                                    <option value="Married" <?= set_value('civilstatus') == 'Married' ? 'selected' : '' ?>>Married</option>
                                    <option value="Widow" <?= set_value('civilstatus') == 'Widow' ? 'selected' : '' ?>>Widow/er</option>
                                    <option value="Separated" <?= set_value('civilstatus') == 'Separated' ? 'selected' : '' ?>>Separated</option>
                                    <option value="Cohabitation" <?= set_value('civilstatus') == 'Cohabitation' ? 'selected' : '' ?>>Cohabitation</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'civilstatus') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="placebirth" value="<?= set_value('placebirth') ?>" placeholder="Enter place of birth">
                                <span class="text-danger small"> <?= display_error($validation, 'placebirth') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Citizenship</label>
                                <input type="text" class="form-control" name="citizenship" value="<?= set_value('citizenship') ?>" placeholder="Enter citizenship">
                                <span class="text-danger small"> <?= display_error($validation, 'citizenship') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="mobile" value="<?= set_value('mobile') ?>" placeholder="Enter contact no.">
                                <span class="text-danger small"> <?= display_error($validation, 'mobile') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="Roman Catholic" <?= set_value('religion') == 'Roman Catholic' ? 'selected' : '' ?>>Roman Catholic</option>
                                    <option value="Iglesia Ni Cristo" <?= set_value('religion') == 'Iglesia Ni Cristo' ? 'selected' : '' ?>>Iglesia Ni Cristo</option>
                                    <option value="Islam" <?= set_value('religion') == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Baptist" <?= set_value('religion') == 'Baptist' ? 'selected' : '' ?>>Baptist</option>
                                    <option value="Born Again" <?= set_value('religion') == 'Born Again' ? 'selected' : '' ?>>Born Again</option>
                                    <option value="Johovahs Witnesss" <?= set_value('religion') == 'Johovahs Witnesss' ? 'selected' : '' ?>>Johovahs Witnesss</option>
                                    <option value="Protestant" <?= set_value('religion') == 'Protestant' ? 'selected' : '' ?>>Protestant</option>
                                    <option value="Seventh Day Adventist" <?= set_value('religion') == 'Seventh Day Adventist' ? 'selected' : '' ?>>Seventh Day Adventist</option>
                                    <option value="Filipinista" <?= set_value('religion') == 'Filipinista' ? 'selected' : '' ?>>Filipinista</option>
                                    <option value="Other" <?= set_value('religion') == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'religion') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Ethinicity</label>
                                <select name="ethnicity" class="form-control">
                                    <option value="">Select Ethnicity</option>
                                    <option value="Tagalog" <?= set_value('ethnicity') == 'Tagalog' ? 'selected' : '' ?>>Tagalog</option>
                                    <option value="Bisaya" <?= set_value('ethnicity') == 'Bisaya' ? 'selected' : '' ?>>Bisaya</option>
                                    <option value="Ilocano" <?= set_value('ethnicity') == 'Ilocano' ? 'selected' : '' ?>>Ilocano</option>
                                    <option value="Cebuano" <?= set_value('ethnicity') == 'Cebuano' ? 'selected' : '' ?>>Cebuano</option>
                                    <option value="Illonggo" <?= set_value('ethnicity') == 'Illonggo' ? 'selected' : '' ?>>Illonggo</option>
                                    <option value="Bicol" <?= set_value('ethnicity') == 'Bicol' ? 'selected' : '' ?>>Bicol</option>
                                    <option value="Waray" <?= set_value('ethnicity') == 'Waray' ? 'selected' : '' ?>>Waray</option>
                                    <option value="Kapampangan" <?= set_value('ethnicity') == 'Kapampangan' ? 'selected' : '' ?>>Kapampangan</option>
                                    <option value="Maranao" <?= set_value('ethnicity') == 'Maranao' ? 'selected' : '' ?>>Maranao</option>
                                    <option value="Maguindanao" <?= set_value('ethnicity') == 'Maguindanao' ? 'selected' : '' ?>>Illonggo</option>
                                    <option value="Tausog" <?= set_value('ethnicity') == 'Tausog' ? 'selected' : '' ?>>Tausog</option>
                                    <option value="Pangasinan" <?= set_value('ethnicity') == 'Pangasinan' ? 'selected' : '' ?>>Pangasinan</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'ethnicity') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Educational Attainment</label>
                                <select name="education" value="<?= set_value('education') ?>" class="form-control">
                                    <option value="">Select Education</option>
                                    <option value="None" <?= set_value('education') == 'None' ? 'selected' : '' ?>>None</option>
                                    <option value="ALS" <?= set_value('education') == 'ALS' ? 'selected' : '' ?>>ALS</option>
                                    <option value="Vocational" <?= set_value('education') == 'Vocational' ? 'selected' : '' ?>>Vocational</option>
                                    <option value="Pre-school" <?= set_value('education') == 'Pre-school' ? 'selected' : '' ?>>Pre-school</option>
                                    <option value="Elem. Student" <?= set_value('education') == 'Elem. Student' ? 'selected' : '' ?>>Elem. Student</option>
                                    <option value="Elem. Undergrad" <?= set_value('education') == 'Elem. Undergrad' ? 'selected' : '' ?>>Elem. Undergrad</option>
                                    <option value="Elem. Graduate" <?= set_value('education') == 'Elem. Graduate' ? 'selected' : '' ?>>Elem. Graduate</option>
                                    <option value="HS Student" <?= set_value('education') == 'HS Student' ? 'selected' : '' ?>>HS Student</option>
                                    <option value="HS Ungrad" <?= set_value('education') == 'HS Ungrad' ? 'selected' : '' ?>>HS Ungrad</option>
                                    <option value="HS Graduate" <?= set_value('education') == 'HS Graduate' ? 'selected' : '' ?>>HS Graduate</option>
                                    <option value="SHS Student" <?= set_value('education') == 'SHS Student' ? 'selected' : '' ?>>SHS Student</option>
                                    <option value="SHS Undergrad" <?= set_value('education') == 'SHS Undergrad' ? 'selected' : '' ?>>SHS Undergrad</option>
                                    <option value="College Undergrad" <?= set_value('education') == 'College Undergrad' ? 'selected' : '' ?>>SHS Graduate</option>
                                    <option value="College Student" <?= set_value('education') == 'College Student' ? 'selected' : '' ?>>College Student</option>
                                    <option value="College Undergrad" <?= set_value('education') == 'College Undergrad' ? 'selected' : '' ?>>College Undergrad</option>
                                    <option value="College Gradaute" <?= set_value('education') == 'College Gradaute' ? 'selected' : '' ?>>College Gradaute</option>
                                    <option value="Post Grad" <?= set_value('education') == 'Post Grad' ? 'selected' : '' ?>>Post Grad</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'education') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" name="occupation" value="<?= set_value('occupation') ?>" placeholder="Enter occupation">
                                <span class="text-danger small"> <?= display_error($validation, 'occupation') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>4P's</label>
                                <select name="for4ps" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('for4ps') == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                    <option value="No" <?= set_value('for4ps') == 'No' ? 'selected' : '' ?>>No</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'for4ps') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>PWD</label>
                                <select name="pwd" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('pwd') == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                    <option value="No" <?= set_value('pwd') == 'No' ? 'selected' : '' ?>>No</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'pwd') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Senior Citizen</label>
                                <select name="senior" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Yes" <?= set_value('senior') == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                    <option value="No" <?= set_value('senior') == 'No' ? 'selected' : '' ?>>No</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'senior') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Precinct</label>
                                <select name="precinct" class="form-control" aria-placeholder="">
                                    <option value="">Select Precinct</option>
                                    <option value="0023A" <?= set_value('precinct') == '0023A' ? 'selected' : '' ?>>0023A</option>
                                    <option value="0025B" <?= set_value('precinct') == '0025B' ? 'selected' : '' ?>>0025B</option>
                                    <option value="0017C" <?= set_value('precinct') == '0017C' ? 'selected' : '' ?>>0017C</option>
                                    <option value="0021A" <?= set_value('precinct') == '0021A' ? 'selected' : '' ?>>0021A</option>
                                    <option value="0019B" <?= set_value('precinct') == '0019B' ? 'selected' : '' ?>>0019B</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'precinct') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Purok</label>
                                <select name="purok_id" id="purok_number" class="form-control" onchange="selectPurok()">
                                    <option value="">Select Purok</option>
                                    <?php foreach ($purok as $pur) { ?>
                                        <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                                    <?php }; ?>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'purok_id') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Household</label>
                                <select class="custom-select2 form-control" id="household_name" name="household_id" style="width: 100%; height: 38px">
                                    <option value="" selected>Select Household</option>
                                </select>
                                <span class="text-danger small"> <?= display_error($validation, 'household_id') ?></span>
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


<script>
    function selectPurok() {
        var puroknum = $('#purok_number').val();
        // alert(puroknum);
        if (puroknum) {
            $.ajax({
                type: "POST",
                url: "http://localhost/barangayrms/residentcontroller/getHousehold",
                data: {
                    'purok': puroknum,
                },
                success: function(response) {
                    var select = $("#household_name")

                    if (response) {
                        $("#household_name").empty()
                        response.forEach((household) => {
                            var option = $("<option></option>")
                            option.text(`${household.household_desc}`)

                            option.val(household.household_id)

                            select.append(option)
                        })
                    }
                }
            });
        }
    }
</script>

<?= $this->endSection() ?>