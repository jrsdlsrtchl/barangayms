<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base_user") ?>

<?= $this->section("content") ?>

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

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4> Reset Passowrd </h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    Change New Password
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Reset Password Field</h4>
                </div>

                <form class="m-4" method="post" action="<?= base_url() ?>usercontroller/resetpassword">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="text" class="form-control" name="oldpass" placeholder="Enter old password">
                                <span class="text-danger"> <?= display_error($validation, 'oldpass') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" class="form-control" name="newpass" placeholder="Enter new password">
                                <span class="text-danger"> <?= display_error($validation, 'newpass') ?></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control" name="confirmpass" placeholder="Enter confirm password">
                                <span class="text-danger"> <?= display_error($validation, 'confirmpass') ?></span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="goBack()"> Back </button>
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection("") ?>