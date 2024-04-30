<!DOCTYPE html>
<html>

<head>
    <title> Certificate of Indigency </title>
    <style>
        body {
            width: 90%;
            margin: auto;
            font-family: "Times New Roman", Times, serif;
        }

        .office {
            text-align: center;

        }

        .cert-title {
            margin-top: 40px;
            margin-bottom: 70px;
            text-align: center;
        }

        .name {
            font-weight: bold;
            text-decoration: underline;
            text-align: right;
            margin-bottom: 0;
        }

        .position {
            margin-top: 0;
            margin-bottom: 0;
            text-align: right;
        }

        span {
            margin-left: 20px;
        }

        .center {
            text-align: center;
        }

        #no {
            width: 30px;
        }

        .print {
            text-align: center;
            margin-top: 50px;
            flex: auto;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo-left,
        .logo-right {
            flex: auto;

        }

        .logo-left {
            left: 0px;
        }

        .logo-right {
            right: 10px;
        }

        .logo-left img,
        .logo-right img {
            max-width: 100px;
        }

        .title {
            font-size: 16px;
            flex: 2;
            text-align: center;

        }

        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.10;
            z-index: -1;
        }

        .logo-container img {
            max-width: 400px;
            display: block;
            margin: auto;
        }

        .copyright {
            font-size: 13px;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .signature {
            margin-top: 20px;
        }

        @media print {
            .print {
                margin-top: 0;
                flex: auto;
            }

            .header {
                margin-bottom: 10px;
                flex: auto;
            }

            table {
                font-size: 10px;
            }

        }
    </style>
</head>

<body>

    <div class="print">
        <div class="header">
            <div class="logo-left">
                <img src="<?= base_url() ?>public/vendors/images/lala-logo.png" alt="Left Logo">
            </div>
            <div class="title">
                <h4>Republic of the Philippines<br>Province of Lanao del Norte<br>Municipality of Lala<br>Barangay Raw-an</h4>
            </div>
            <div class="logo-right">
                <img src="<?= base_url() ?>public/vendors/images/rawan-logo.png" alt="Right Logo">
            </div>
        </div>
    </div>

    <div class="certification">

        <div class="office">
            <h4>OFFICE OF THE PUNONG BARANGAY</h4>
        </div>
        <div class="cert-title">
            <h1>CERTIFICATE OF INDIGENCY</h1>
        </div>

        <div class="content">
            <h4>TO WHOM IT MAY CONCERN;</h4><br>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; THIS IS TO CERTIFY that <b><u><?= strtoupper($request['0']->firstname) . " " . substr($request['0']->middlename, 0, 1) . ". " . strtoupper($request['0']->lastname)  ?></u></b>,&nbsp; <b><u><?= $request['0']->age ?></u></b> years of age a Filipino
                citizen, and a bona fide resident of Purok - <b><u><?= $request['0']->purok_id ?></u></b>, Raw-an, Lala, Lanao del Norte. The said person has a good moral
                character and an active member of the community. He/She is one of those who belong to a low-income family. </p>
            <br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This certification is being issued upon the request
                of the above named person for whatever legal purposes it may serve his/her best.
            </p> <br>

            <?php
            // Set the default timezone to Asia/Manila
            date_default_timezone_set('Asia/Manila');

            // Get current day
            $currentDay = date('j');
            // Add the suffix
            if ($currentDay % 10 == 1 && $currentDay != 11) {
                $daySuffix = "st";
            } elseif ($currentDay % 10 == 2 && $currentDay != 12) {
                $daySuffix = "nd";
            } elseif ($currentDay % 10 == 3 && $currentDay != 13) {
                $daySuffix = "rd";
            } else {
                $daySuffix = "th";
            }

            // Get current month and year
            $currentMonthYear = date('F Y');
            ?>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Issued this <b><u><?= $currentDay ?></u></b><?= $daySuffix ?> day of <b><u><?= $currentMonthYear ?></u></b> at the
                Barangay Office of Raw-an, Lala, Lanao del Norte.
            </p> <br>


        </div>
        <div class="signature">
            <div class="name">
                <p><b><u><?= !empty($official) ? strtoupper($official[0]->firstname) . " " . substr($official[0]->middlename, 0, 1) . ". " . strtoupper($official[0]->lastname) : '' ?></u></b></p>
            </div>
            <div class="position">
                <p>Barangay Chairman</p>
            </div>
        </div>
    </div>

    <div class="logo-container">
        <img src="<?= base_url() ?>public/vendors/images/rawan-logo.png" alt="Right Logo">
    </div>
    <?php
    ?>

    <div class="footer-wrap card-box" id="note">
        <div class="col-auto">
            <<br><br>Note: This certification is validated with an official seal and does not have alteration.
                In case of alteration, it is countersighted by the issuing officer.
        </div>
    </div>
    <div class="copyright">
        <?php $current_time = date("h:i A") ?>
        <div>Printed By: <?= !empty($printed) ? strtoupper($printed[0]->firstname) . " " . substr($printed[0]->middlename, 0, 1) . ". " . strtoupper($printed[0]->lastname) : '' ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?= $current_time ?> </div>
        <div>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>