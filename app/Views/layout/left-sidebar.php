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
                    <a href="<?= base_url() ?>dashboardcontroller/dashboard" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-ui-checks-grid"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Menu</div>
                </li>

                <li>
                    <a href="<?= base_url() ?>officialcontroller/official" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-earmark-person"></span><span class="mtext">Barangay Official</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>residentcontroller/resident" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-people"></span><span class="mtext">Residents</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>purokcontroller/purok" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-building"></span><span class="mtext">Purok</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house-door"></span><span class="mtext">Household</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '1' ?>">Purok 1</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '2' ?>">Purok 2</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '3' ?>">Purok 3</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '4' ?>">Purok 4</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '5' ?>">Purok 5</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '6' ?>">Purok 6</a></li>
                        <li><a href="<?= base_url() ?>householdcontroller/household/<?= $puroknum = '7' ?>">Purok 7</a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?= base_url() ?>UserManagementController/user" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-person-workspace"></span><span class="mtext">User Management</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>ProfileRequestController/getRequest" class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy dw dw-user-2"></span><span class="mtext">Profile Request</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-envelope-paper"></span><span class="mtext">Requested Document</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url() ?>RequestedDocController/getRequest">Pending Request</a></li>
                        <li><a href="<?= base_url() ?>RequestedDocController/getApproved">Approved Request</a></li>
                        <li><a href="<?= base_url() ?>RequestedDocController/getCancelled">Cancelled Request</a></li>
                        <li><a href="<?= base_url() ?>RequestedDocController/document">List Documents</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-truck"></span><span class="mtext">Assistance</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url() ?>AssistanceController/assistance">Manage Assistance</a></li>
                        <li><a href="<?= base_url() ?>AssistanceController/listassistance">List Of Assistance</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house-door"></span><span class="mtext">Generate Report</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url() ?>generatereportcontroller/report">View Report</a></li>
                        <li><a href="<?= base_url() ?>generatereportcontroller/printreport">Print Report</a></li>
                    </ul>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>

                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>

                <li>
                    <a href="<?= base_url() ?>BackupController/backupDatabase" class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy dw dw-inbox"></span><span class="mtext">Backup</span>
                    </a>
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