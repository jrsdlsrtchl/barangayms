<?= $this->include("layout/header"); ?>

<!-- Inlcude Preload Here -->

<?= $this->include("layout/topbar"); ?>

<?= $this->include("layout/right-sidebar"); ?>

<?= $this->include("layout/left-sidebar"); ?>

<?= $this->renderSection("content"); ?>

<?= $this->include("layout/footer"); ?>