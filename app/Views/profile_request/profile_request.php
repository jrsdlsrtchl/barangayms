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
                                    <a href="#">Profile Request</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Active Request
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- <div class="col-md-6 col-sm-12 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addRequest">
                            Add Request
                        </button>
                    </div> -->
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Request Profile Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Resident</th>
                                <th>Date & Time</th>
                                <th>Status</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($userdata as $user) { ?>
                                <tr>
                                    <td> <?= $user->resfirstname . " " . substr($user->resmiddlename, 0, 1) . ". " . $user->reslastname ?> </td>
                                    <td>
                                        <?= strftime("%B %d, %Y %I:%M:%S %p", strtotime($user->date_requested)) ?>
                                    </td>
                                    <td>
                                        <?php if ($user->resident_status == "Pending") { ?>
                                            <span class="badge badge-pill" data-bgcolor="#265ed7" data-color="#ffffff"><?= $user->resident_status; ?></span>
                                        <?php } else { ?>
                                            <span class="badge badge-pill" data-bgcolor="#26d75b" data-color="#ffffff"><?= $user->resident_status; ?></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>profilerequestcontroller/editprofile/<?= $user->resident_id_store ?>"><i class="dw dw-edit2"></i> Edit</a> |
                                        <a href="#" data-toggle="modal" data-target="#deleteRequest<?= $user->resident_id_store ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include("profile_request/delete_request") ?>

<?= $this->endSection("") ?>