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
                            <h4>Manage List of Assistance</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>officialcontroller/official">List of Assistance</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Assistance Type List Table
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addType">
                            Add Assistance Type
                        </button>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Assistance Type Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Assistance Type</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($assistance as $ass) {
                            ?>
                                <tr>
                                    <td class="table-plus"> <?= $ass->type_assistance ?> </td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#editType<?= $ass->type_assistance_id ?>"><i class="dw dw-edit2"></i> Edit</a> |
                                        <a href="#" data-toggle="modal" data-target="#deleteAssistance<?= $ass->type_assistance_id ?>"><i class="dw dw-delete-3"></i> Delete</a>
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

<?= $this->include("assistance/add_type") ?>

<?= $this->include("assistance/edit_type") ?>

<?= $this->include("assistance/delete_assistance") ?>

<?= $this->endSection() ?>