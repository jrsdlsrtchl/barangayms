<?= $this->extend("layout/base_user") ?>

<?= $this->section("content") ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">


            <h2 class="h2 mb-0"> Hello Resident </h2>

            <div class="card-box mb-30 mt-4">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Personal Information</h4>
                </div>
                <div class="row card-body">

                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Last Name</h2>
                        <h2 class="h4"> <?= $resident['0']->lastname; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">First Name</h2>
                        <h2 class="h4"> <?= $resident['0']->firstname; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Middle Name</h2>
                        <h2 class="h4"> <?= $resident['0']->middlename; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Suffix</h2>
                        <h2 class="h4"> <?= $resident['0']->suffix; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Gender</h2>
                        <h2 class="h4"> <?= $resident['0']->gender; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Age</h2>
                        <h2 class="h4"> <?= $resident['0']->age; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Mobile</h2>
                        <h2 class="h4"> <?= $resident['0']->mobile; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Date of Birth</h2>
                        <h2 class="h4"> <?= $resident['0']->datebirth; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Place of Birth</h2>
                        <h2 class="h4"> <?= $resident['0']->placebirth; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Civil Status</h2>
                        <h2 class="h4"> <?= $resident['0']->civilstatus; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Ethnicity</h2>
                        <h2 class="h4"> <?= $resident['0']->ethnicity; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Religion</h2>
                        <h2 class="h4"> <?= $resident['0']->religion; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Occupation</h2>
                        <h2 class="h4"> <?= $resident['0']->occupation; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Citizenship</h2>
                        <h2 class="h4"> <?= $resident['0']->citizenship; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Educational Attainment</h2>
                        <h2 class="h4"> <?= $resident['0']->education; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">4PS</h2>
                        <h2 class="h4"> <?= $resident['0']->for4ps; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">PWD</h2>
                        <h2 class="h4"> <?= $resident['0']->pwd; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Senior Citizen</h2>
                        <h2 class="h4"> <?= $resident['0']->senior; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Precinct</h2>
                        <h2 class="h4"> <?= $resident['0']->precinct; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Purok</h2>
                        <h2 class="h4"> <?= $resident['0']->purok_id; ?> </h2>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <h2 class="h6">Household</h2>
                        <h2 class="h4"> <?= $resident['0']->household_id; ?> </h2>
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