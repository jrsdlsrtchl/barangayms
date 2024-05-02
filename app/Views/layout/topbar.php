<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
    </div>
    <div class="header-right">
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <?php foreach ($notification as $notif) { ?>
                                <li>
                                    <a href="<?= base_url() ?>RequestedDocController/getRequest/<?= $notif->certificate_id ?>">
                                        <div class="img-container-3">
                                            <?php if ($notif->image == '') { ?>
                                                <?php if ($notif->gender == 'Male') { ?>
                                                    <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="" class="avatar-photo" />
                                                <?php } elseif ($notif->gender == 'Female') { ?>
                                                    <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="" class="avatar-photo" />
                                                <?php } else { ?>
                                                    <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="" class="avatar-photo" />
                                                <?php } ?>
                                            <?php } else { ?>
                                                <img src="<?= $notif->image_notif ?>" alt="" class="avatar-photo" />
                                            <?php } ?>
                                        </div>
                                        <h3> <?= $notif->firstname . " " . substr($notif->middlename, 0, 1) . ". " . $notif->lastname ?> </h3>
                                        <p>
                                            requested a <b> <?= $notif->certificate_type ?></b>
                                        </p>
                                        <div class="text-muted">
                                            <small>
                                                <?php
                                                date_default_timezone_set('Asia/Manila');

                                                $date_db = new DateTime($notif->date_notif);
                                                $current_time = new DateTime();
                                                $interval = $current_time->diff($date_db);

                                                if ($interval->y > 0) {
                                                    echo $interval->format('%y years ago');
                                                } elseif ($interval->m > 0) {
                                                    echo $interval->format('%m months ago');
                                                } elseif ($interval->d > 0) {
                                                    echo $interval->format('%d days ago');
                                                } elseif ($interval->h > 0) {
                                                    echo $interval->format('%h hours ago');
                                                } elseif ($interval->i > 0) {
                                                    echo $interval->format('%i minutes ago');
                                                } else {
                                                    echo 'Just now';
                                                }
                                                ?>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown mr-3 ">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-name mr-3"> <b>STAFF</b> | <?= $userdata['0']->firstname . " " . " " . $userdata['0']->lastname  ?></span>
                    <span class="user-icon">

                        <?php if ($userdata['0']->image == '') { ?>
                            <?php if ($userdata['0']->gender == 'Male') { ?>
                                <img src="<?= base_url(); ?>public/vendors/images/male.png" alt="" class="avatar-photo" />
                            <?php } elseif ($userdata['0']->gender == 'Female') { ?>
                                <img src="<?= base_url(); ?>public/vendors/images/female.png" alt="" class="avatar-photo" />
                            <?php } else { ?>
                                <img src="<?= base_url(); ?>public/vendors/images/nogender.png" alt="" class="avatar-photo" />
                            <?php } ?>
                        <?php } else { ?>
                            <img src="<?= $userdata['0']->image ?>" alt="" class="avatar-photo" />
                        <?php } ?>

                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="<?= base_url() ?>usercontroller/admin"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar" href="faq.html"><i class="dw dw-settings2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutAdminModal"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutAdminModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteResidentLabel">Logout Confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body mx-3 mb-4"> Are you sure you want to go out? </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button class="flex-fill btn btn-secondary p-2" type="button" data-dismiss="modal">Cancel</button>
                    <a class="flex-fill btn btn-danger p-2" href="<?= base_url(); ?>AuthenticationController/logoutAdmin">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>