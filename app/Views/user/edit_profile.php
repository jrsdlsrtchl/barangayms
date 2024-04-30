 <!-- Edit Profile -->
 <div class="tab-pane fade show active" id="editprofile" role="tabpanel">
     <div class="profile-setting pd-20">
         <form method="post" action="<?= base_url() ?>usercontroller/updateprofile/<?= $userdata['0']->resident_id ?>">
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
                         <input type="text" class="form-control date-picker" name="datebirth" placeholder="Select date of birth" value="<?= $userdata['0']->datebirth ?>">
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
                         <label>Purok</label>
                         <select name="purok_id" class="form-control">
                             <option value="">Select Purok</option>
                             <?php foreach ($purok as $pur) { ?>
                                 <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                             <?php }; ?>
                         </select>
                     </div>

                     <div class="form-group">
                         <label>Household</label>
                         <select class="custom-select2 form-control" name="household_id" style="width: 100%; height: 38px">
                             <option value="">Select Household</option>
                             <?php foreach ($household as $house) { ?>
                                 <option value="<?= $house->household_id ?>"> <?= $house->household_desc ?> Residence </option>
                             <?php }; ?>
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