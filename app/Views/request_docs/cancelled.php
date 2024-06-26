<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base_user") ?>

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
                            <h4>Manage Request Documents</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Request Document</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Cancelled Request
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addRequest">
                            Add Request
                        </button>
                    </div>
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
                                <th class="table-plus datatable-nosort">Document Type</th>
                                <th>Date & Time</th>
                                <th>Purpose</th>
                                <th>Status</th>
                                <th class="datatable-nosort">Tracking ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($request as $req) { ?>
                                <tr>
                                    <td class="table-plus"><?= $req->certificate_type ?></td>
                                    <td><?= strftime("%B %d, %Y %I:%M:%S %p", strtotime($req->date)) ?></td>
                                    <td><?= $req->purpose; ?></td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#d7264c" data-color="#ffffff"><?= $req->request_status; ?></span>
                                    </td>
                                    <td><?= $req->tracking_id; ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->include("request_docs/add_request"); ?>

<?= $this->endSection("") ?>