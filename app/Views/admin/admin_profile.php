<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base") ?>

<?= $this->section("content") ?>

<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 5000);
</script>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Prompt Message -->
            <?php if ($page_session->getTempdata('success')) : ?>
                <div id="hidemessage" class="alert alert-success" role="alert">
                    <?= $page_session->getTempdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($page_session->getTempdata('error')) : ?>
                <div id="hidemessage" class="alert alert-danger" role="alert">
                    <?= $page_session->getTempdata('error'); ?>
                </div>
            <?php endif; ?>

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
                    <div class="pd-20 card-box">
                        <div class="profile-photo">

                            <?php if (!empty($userdata) && isset($userdata['0']->gender) && isset($userdata['0']->image)) {
                                $gender = $userdata['0']->gender;
                                $image = $userdata['0']->image;

                                if ($image == '') {
                                    if ($gender == 'Male') { ?>
                                        <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="" class="avatar-photo" />
                                    <?php } elseif ($gender == 'Female') { ?>
                                        <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="" class="avatar-photo" />
                                    <?php } else { ?>
                                        <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="" class="avatar-photo" />
                                    <?php }
                                } else { ?>
                                    <img src="<?= $image ?>" alt="" class="avatar-photo" />
                                <?php } ?>
                            <?php } ?>

                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="<?= base_url() ?>usercontroller/getImage" method="post" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="img-container p-3">
                                                    <?php if (!empty($userdata) && isset($userdata['0']->gender) && isset($userdata['0']->image)) {
                                                        $gender = $userdata['0']->gender;
                                                        $image = $userdata['0']->image;

                                                        if ($image == '') {
                                                            if ($gender == 'Male') { ?>
                                                                <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="" class="avatar-photo" />
                                                            <?php } elseif ($gender == 'Female') { ?>
                                                                <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="" class="avatar-photo" />
                                                            <?php } else { ?>
                                                                <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="" class="avatar-photo" />
                                                            <?php }
                                                        } else { ?>
                                                            <img src="<?= $image ?>" alt="" class="avatar-photo" />
                                                        <?php } ?>
                                                    <?php } ?>

                                                    <input type="file" name="image" class="form-control mt-4">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" value="Update" class="btn btn-primary" />
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <h5 class="text-center h5 mb-0"><?= $userdata['0']->firstname . " " . substr($userdata['0']->middlename, 0, 1) . ". " . $userdata['0']->lastname ?></h5>
                        <p class="text-center text-muted font-14">
                            <?= $userdata['0']->mobile ?>
                        </p>
                        <p class="text-center"><b>BRGY. STAFF ACCOUNT</b></p>

                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Assistace</h5>
                            <ul>
                                <?php if ($assistance !== false) : ?>
                                    <?php foreach ($assistance as $ass) : ?>
                                        <li><?= $ass->type_assistance ?></li>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <li>No assistance received</li>
                                <?php endif ?>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Personal Data</a>
                                    </li>

                                </ul>
                                <div class="tab-content">

                                    <?= $this->include("user/view_profile") ?>

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