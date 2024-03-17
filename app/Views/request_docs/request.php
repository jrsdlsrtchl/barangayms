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
                            <h4>Manage Request Documents</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Request Document</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Request Table
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="<?= base_url() ?>officialcontroller/addofficial" role="button">
                            Add Request
                        </a>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Request Documents Information Table</h4>
                </div>
                <div class="pb-20 mt-3 mx-3">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Document</th>
                                <th>Purok</th>
                                <th>Committee</th>
                                <th>Vice Chair Committee</th>
                                <th>Position</th>
                                <th>Term</th>
                                <th>Status</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($official as $off) { ?>
                                <tr>
                                    <td class="table-plus"><?= $off->firstname . " " . substr($off->middlename, 0, 1) . ". " . $off->lastname ?></td>
                                    <td><?= $off->purok_desc; ?></td>
                                    <td><?= $off->committee; ?></td>
                                    <td><?= $off->vice_committee; ?></td>
                                    <td><?= $off->position; ?></td>
                                    <td><?= $off->term; ?></td>
                                    <td><?= $off->status; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#viewOfficial<?= $off->off_uniid ?>"><i class=" dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="<?= base_url() ?>officialcontroller/editofficial/<?= $off->off_uniid ?>"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteOfficial<?= $off->off_uniid ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
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