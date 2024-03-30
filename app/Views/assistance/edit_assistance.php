<?= $this->extend("layout/base_form"); ?>

<?= $this->section("content") ?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

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
                                    <a href="<?= base_url() ?>officialcontroller/official">Asisstance</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Assistance
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

            <div class="card-box mb-30">
                <div class="card-header">
                    <h4 class="text-blue mt-2 h4">Edit Assistance</h4>
                </div>
                <form class="m-4" method="post" action="<?= base_url() ?>AssistanceController/updateAssistance/<?= $assistance_data['0']->type_assistance_id ?>">
                    <?= csrf_field(); ?>
                    <div class="row">

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Assistance Type</label>
                                <select class="custom-select2 form-control" name="type_assistance_id" style="width: 100%; height: 38px">
                                    <option value="">Select Assistance</option>
                                    <?php foreach ($assistance as $ass) {
                                        $userID = $ass->type_assistance_id;
                                        $isSelected = !empty($assistance_data) && $assistance_data[0]->type_assistance_id === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $ass->type_assistance_id ?>" <?= $isSelected ?>> <?= $ass->type_assistance; ?> </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date Received</label>
                                <input type="text" class="form-control date-picker" name="date_receive" placeholder="Select date received" autocomplete="off" value="<?= $assistance_data['0']->date_receive ?>">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Received by:</label>
                                <select class="custom-select2 form-control" name="official_id" style="width: 100%; height: 38px">
                                    <option value="">Select Official</option>
                                    <?php foreach ($official as $off) {
                                        $userID = $off->official_id;
                                        $isSelected = !empty($assistance_data) && $assistance_data[0]->official_id === $userID ? 'selected' : '';
                                    ?>
                                        <option value="<?= $off->official_id ?>" <?= $isSelected ?>> <?= $off->firstname . " " . substr($off->middlename, 0, 1) . ". " . $off->lastname  ?> </option>
                                    <?php }; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Date Distributed</label>
                                <input type="text" class="form-control date-picker" name="distribute_date" placeholder="Select date distributed" autocomplete="off" value="<?= $assistance_data['0']->distribute_date ?>">
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>officialcontroller/official"><button type="button" class="btn btn-secondary"> Back </button></a>
                                    <button type="submit" class="btn btn-primary"> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?= $this->include("assistance/add_type") ?>

<?= $this->endSection() ?>