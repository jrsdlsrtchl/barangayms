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
                            <h4>Manage Purok</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>purokcontroller/purok">Purok</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Purok Table
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Purok Information Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Purok</th>
                                <th>No. Population</th>
                                <th>No. Household</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Purok 1</td>
                                <td><?= $purokUno; ?></td>
                                <td><?= $householdUno ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "1" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 2</td>
                                <td><?= $purokDos; ?></td>
                                <td><?= $householdDos ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "2" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 3</td>
                                <td><?= $purokTres; ?></td>
                                <td><?= $householdTres ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "3" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 4</td>
                                <td><?= $purokKwatro; ?></td>
                                <td><?= $householdKwatro ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "4" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 5</td>
                                <td><?= $purokSingko; ?></td>
                                <td><?= $householdSingko ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "5" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 6</td>
                                <td><?= $purokSays; ?></td>
                                <td><?= $householdSays ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "6" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                            <tr>
                                <td>Purok 7</td>
                                <td><?= $purokSyete; ?></td>
                                <td><?= $householdSyete ?></td>
                                <td> <a href="<?= base_url(); ?>purokcontroller/viewpurok/<?= $puroknumber = "7" ?>"><i class=" dw dw-eye"></i> View</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>