<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Login</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>public/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>public/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>public/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->


    <style>
        #hidemessage {
            margin-left: 30px;
        }

        .text-danger {
            color: red;
        }

        .text-success {
            padding: 10px;
            color: white;
            background-color: #2dc653;
            border-radius: 10px;
        }
    </style>

    <script>
        setTimeout(function() {
            $("#hidemessage").hide();
        }, 4000);

        setTimeout(function() {
            $(".text-danger").hide();
        }, 4000);
    </script>

</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="<?= base_url() ?>public/vendors/images/rawan-logo-white.png" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 d-none d-lg-inline">
                    <img src="<?= base_url() ?>public/vendors/images/rawan-login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login Here!</h2>
                        </div>

                        <div class="login-title">
                            <?php
                            if ($page_session->getTempdata('error')) { ?>
                                <span class="alert alert-danger" id="hidemessage"> <?= $page_session->getTempdata('error'); ?> </span>
                            <?php } ?>
                        </div>

                        <form action="<?= base_url() ?>AuthenticationController/login" method="post">
                            <span class="text-danger"> <?= display_error($validation, 'usertype') ?></span>
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="usertype" value="Resident" />
                                        <div class="icon">
                                            <img src="<?= base_url() ?>public/vendors/images/person.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Resident
                                    </label>
                                    <label class="btn active">
                                        <input type="radio" name="usertype" value="Admin" />
                                        <div class="icon">
                                            <img src="<?= base_url() ?>public/vendors/images/briefcase.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Staff/Admin
                                    </label>
                                </div>
                            </div>

                            <span class="text-danger"> <?= display_error($validation, 'username') ?></span>
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" value="<?= set_value('username') ?>" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>

                            <span class="text-danger"> <?= display_error($validation, 'password') ?></span>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" placeholder="**********" name="password" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                        <!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a> -->
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome modal end -->
    <!-- js -->
    <script src="<?= base_url() ?>public/vendors/scripts/core.js"></script>
    <script src="<?= base_url() ?>public/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url() ?>public/vendors/scripts/process.js"></script>
    <script src="<?= base_url() ?>public/vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>