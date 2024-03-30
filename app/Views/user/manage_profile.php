<?= $this->extend("layout/base_user") ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Manage Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Profile</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    View Profile
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">

                            <?php if (!empty($userdata) && isset($userdata['0']->gender)) {
                                $gender = $userdata['0']->gender;
                                if ($gender == 'Male') { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="" class="avatar-photo" />
                                <?php } elseif ($gender == 'Female') { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="" class="avatar-photo" />
                                <?php } else { ?>
                                    <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="" class="avatar-photo" />
                                <?php }
                            } else { ?>
                                <!-- Handle the case when $userdata is empty or gender is not set -->
                            <?php } ?>

                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="vendors/images/photo2.jpg" alt="Picture" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0"><?= $userdata['0']->firstname . " " . substr($userdata['0']->middlename, 0, 1) . ". " . $userdata['0']->lastname ?></h5>
                        <p class="text-center text-muted font-14">
                            <?= $userdata['0']->mobile ?>
                        </p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Personal Information</h5>
                            <ul>
                                <li>
                                    <span>Full Name:</span>
                                    <?= $userdata['0']->firstname . ' ' . $userdata['0']->middlename . ' ' . $userdata['0']->lastname . ' ' . $userdata['0']->suffix ?>
                                </li>

                                <li>
                                    <span>Birthdate:</span>
                                    <?= strftime("%B %d, %Y", strtotime($userdata['0']->datebirth)) ?>
                                </li>

                                <li>
                                    <span>Age:</span>
                                    <?= $userdata['0']->age . ' years old' ?>
                                </li>

                                <li>
                                    <span>Gender:</span>
                                    <?= $userdata['0']->gender ?>
                                </li>

                                <li>
                                    <span>Civil Status:</span>
                                    <?= $userdata['0']->civilstatus ?>
                                </li>

                                <li>
                                    <span>Place of Birth:</span>
                                    <?= $userdata['0']->placebirth ?>
                                </li>

                                <li>
                                    <span>Citizenship:</span>
                                    <?= $userdata['0']->citizenship ?>
                                </li>

                            </ul>
                        </div>

                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Education</h5>
                            <ul>
                                <li>
                                    <span>Educational Attainment:</span>
                                    FerdinandMChilds@test.com
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    619-229-0054
                                </li>
                                <li>
                                    <span>Country:</span>
                                    America
                                </li>
                                <li>
                                    <span>Address:</span>
                                    1807 Holden Street<br />
                                    San Diego, CA 92115
                                </li>
                            </ul>
                        </div>

                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    FerdinandMChilds@test.com
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    619-229-0054
                                </li>
                                <li>
                                    <span>Country:</span>
                                    America
                                </li>
                                <li>
                                    <span>Address:</span>
                                    1807 Holden Street<br />
                                    San Diego, CA 92115
                                </li>
                            </ul>
                        </div>

                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    FerdinandMChilds@test.com
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    619-229-0054
                                </li>
                                <li>
                                    <span>Country:</span>
                                    America
                                </li>
                                <li>
                                    <span>Address:</span>
                                    1807 Holden Street<br />
                                    San Diego, CA 92115
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-3">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Edit Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade show active" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">

                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" name="lastname" placeholder="Enter last name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" name="firstname" placeholder="Enter first name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Middle Name</label>
                                                            <input type="text" class="form-control" name="middlename" placeholder="Enter middle name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Suffix</label>
                                                            <input type="text" class="form-control" name="suffix" placeholder="Enter suffix">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <select name="gender" class="form-control">
                                                                <option value="">Select Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Age</label>
                                                            <input type="text" class="form-control" name="age" placeholder="Enter age">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="text" class="form-control date-picker" name="datebirth" placeholder="Select date of birth">
                                                        </div>

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

                                                        <div class="form-group">
                                                            <label>Place of Birth</label>
                                                            <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Citizenship</label>
                                                            <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Contact No.</label>
                                                            <input type="text" class="form-control" name="mobile" placeholder="Enter contact no.">
                                                        </div>
                                                    </li>

                                                    <li class="weight-500 col-md-6">
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

                                                        <div class="form-group">
                                                            <label>Occupation</label>
                                                            <input type="text" class="form-control" name="occupation" placeholder="Enter occupation">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>4P's</label>
                                                            <select name="for4ps" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>PWD</label>
                                                            <select name="pwd" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Senior Citizen</label>
                                                            <select name="senior" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>

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

                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1-1" />
                                                                <label class="custom-control-label weight-400" for="customCheck1-1">
                                                                    I hereby certify that the information provided in this form is complete, true and correct to the best of my knowledge. </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="Update Information" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-wrap pd-20 mb-20 card-box">
                <div class="col-auto"><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection("") ?>