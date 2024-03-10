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
                                <li class="breadcrumb-item" aria-current="page">
                                    Household Table
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php if (!empty($householdhead)) { ?>
                                        <?= $householdhead['0']->household_desc; ?> Household Table
                                    <?php } ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <?php if (!empty($householdhead)) { ?>
                        <h4 class="text-blue mt-2 h4"> <?= $householdhead['0']->household_desc; ?> Residence</h4>
                    <?php } ?>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Contact No.</th>
                                <th>Date of Birth</th>
                                <th>Household</th>
                                <th class="datatable-nosort">Purok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resident as $res) { ?>
                                <tr>
                                    <td class="table-plus"><?= $res->lastname; ?></td>
                                    <td><?= $res->firstname; ?></td>
                                    <td><?= $res->middlename; ?></td>
                                    <td><?= $res->gender; ?></td>
                                    <td><?= $res->age; ?></td>
                                    <td><?= $res->mobile; ?></td>
                                    <td><?= $res->datebirth; ?></td>
                                    <td><?= $res->household_desc; ?></td>
                                    <td><?= $res->purok_desc; ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>