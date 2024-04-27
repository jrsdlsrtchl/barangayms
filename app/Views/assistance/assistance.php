<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base"); ?>

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
                            <h4>Manage Assistance</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>officialcontroller/official">Assistance</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Assistance Table
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="<?= base_url() ?>AssistanceController/addassistance" role="button">
                            Add Assistance
                        </a>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Assistance Information Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Assistance Type</th>
                                <th>Date Receive</th>
                                <th>Official</th>
                                <th>Distribute Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($assistance as $ass) {
                            ?>
                                <tr>
                                    <td class="table-plus"> <?= $ass->type_assistance ?> </td>
                                    <td> <?= strftime("%B %d, %Y", strtotime($ass->date_receive)) ?> </td>
                                    <td> <?= $ass->firstname . " " . substr($ass->middlename, 0, 1) . ". " . $ass->lastname  ?> </td>
                                    <td> <?= strftime("%B %d, %Y", strtotime($ass->distribute_date)) ?> </td>
                                    <td>
                                        <a href="<?= base_url() ?>assistancecontroller/getAssResidents/<?= $ass->type_assistance_id ?>"><i class=" dw dw-eye"></i> View</a> |
                                        <a href="<?= base_url() ?>assistancecontroller/editAssistance/<?= $ass->type_assistance_id ?>"><i class=" dw dw-edit2"></i> Edit</a> |
                                        <a href="#" data-toggle="modal" data-target="#deleteAssistance<?= $ass->type_assistance_id  ?>"><i class="dw dw-delete-3"></i> Delete</a> |
                                        <a href="<?= base_url() ?>assistancecontroller/printAssistance/<?= $ass->type_assistance_id ?>"><i class=" dw dw-print"></i> Print</a>
                                    </td>
                                </tr>
                            <?php };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include("assistance/delete_assistance_ass") ?>

<?= $this->endSection() ?>