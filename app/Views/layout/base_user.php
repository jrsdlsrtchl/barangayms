<?= $this->include("layout/header"); ?>

<?= $this->include("layout/topbar-user"); ?>

<?= $this->include("layout/right-sidebar"); ?>

<?= $this->include("layout/left-sidebar-user"); ?>

<?= $this->renderSection("content"); ?>

<?= $this->include("layout/footer"); ?>