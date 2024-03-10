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
                            <h4>Manage Household</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>purokcontroller/purok">Household</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php if (!empty($purok)) { ?>
                                        Purok <?= $purok['0']->purok_id; ?> Household Table
                                    <?php } ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="" data-toggle="modal" data-target="#addHousehold">
                            Add Household
                        </a>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <?php if (!empty($purok)) { ?>
                        <h4 class="text-blue mt-2 h4">Purok <?= $purok['0']->purok_id; ?> Household Information Table</h4>
                    <?php } ?>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Household Names</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($household as $house) { ?>
                                <tr>
                                    <td><?= $house->household_desc ?></td>
                                    <td> <a href="<?= base_url() ?>householdcontroller/gethouseholdmembers/<?= $house->household_id ?>"><i class=" dw dw-eye"></i> View</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include("household/add_household") ?>

<?= $this->endSection() ?>