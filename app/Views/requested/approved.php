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
                            <h4>Manage Requested Documents</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Requested Document</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Approved Request
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
                    <h4 class="text-blue mt-2 h4">Requested Documents Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Resident</th>
                                <th>Document Type</th>
                                <th>Date</th>
                                <th>Purpose</th>
                                <th>Status</th>
                                <th>Official</th>
                                <th>Tracking ID</th>
                                <th class="datatable-nosort">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($request as $req) { ?>
                                <tr>
                                    <td class="table-plus"> <?= $req->firstname . " " . substr($req->middlename, 0, 1) . ". " . $req->lastname  ?> </td>
                                    <td><?= $req->certificate_type ?></td>
                                    <td><?= $req->date; ?></td>
                                    <td><?= $req->purpose; ?></td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#26d75b" data-color="#ffffff"><?= $req->request_status; ?></span>
                                    </td>
                                    <td><?= $req->official; ?></td>
                                    <td><?= $req->tracking_id; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#updateRequest<?= $req->request_id ?>"><i class="dw dw-trash"></i> Delete </a>
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

<?= $this->endSection("") ?>