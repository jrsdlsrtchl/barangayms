<!-- Footer -->
<div class="footer-wrap pd-20 mb-20 card-box">
    <div class="col-auto"><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
</div>

<script>
    setTimeout(function() {
        $('#hidemessage').slideUp('slow');
    }, 2000);

    setTimeout(function() {
        $(".text-danger").slideUp('slow');
    }, 3000);
</script>

<!-- Javascript -->
<script src="<?= base_url() ?>public/vendors/scripts/core.js"></script>
<script src="<?= base_url() ?>public/vendors/scripts/script.min.js"></script>
<script src="<?= base_url() ?>public/vendors/scripts/process.js"></script>
<script src="<?= base_url() ?>public/vendors/scripts/layout-settings.js"></script>
<!-- switchery js -->
<script src="<?= base_url() ?>public/src/plugins/switchery/switchery.min.js"></script>
<!-- bootstrap-tagsinput js -->
<script src="<?= base_url() ?>public/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<!-- bootstrap-touchspin js -->
<script src="<?= base_url() ?>public/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?= base_url() ?>public/vendors/scripts/advanced-components.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>