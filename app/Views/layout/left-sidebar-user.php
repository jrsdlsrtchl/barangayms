<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?= base_url() ?>public/vendors/images/rawan-logo-white.png" alt="" class="dark-logo" />
            <img src="<?= base_url() ?>public/vendors/images/rawan-logo-black.png" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li>
                    <div class="sidebar-small-cap">Menu</div>
                </li>

                <li>
                    <a href="<?= base_url() ?>usercontroller/user" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house-door"></span><span class="mtext">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-earmark-person"></span><span class="mtext">My Profile</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-envelope-paper"></span><span class="mtext">Request Documents</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url() ?>RequestDocumentController/request">Active Request</a></li>
                        <li><a href="<?= base_url() ?>RequestDocumentController/getApproved">Approved Request</a></li>
                        <li><a href="<?= base_url() ?>RequestDocumentController/getCancelled">Cancelled Request</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-search"></span><span class="mtext">Track Request</span>
                    </a>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>

                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>

                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Landing Page</span>
                    </a>
                </li>

                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-info-circle"></span><span class="mtext">About</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>