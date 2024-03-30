<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            width: 90%;
            margin: auto;
        }

        h3 {
            font-size: 15px;
            margin: 0;
            text-align: center;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 12px;
            border-collapse: collapse;
            text-align: left;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
            width: auto;
        }

        table th {
            font-weight: bold;
            text-align: left;
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
            font-size: 22px;
            flex: 2;
            text-align: center;
        }

        .footer-wrap {
            font-size: 10px;
            display: flex;
            justify-content: flex-end;
        }

        /* Adjustments for print */
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
                <h5>Republic of the Philippines<br>Province of Lanao del Norte<br>Municipality of Lala<br>Barangay Raw-an</h5>
            </div>
            <div class="logo-right">
                <img src="<?= base_url() ?>public/vendors/images/rawan-logo.png" alt="Right Logo">
            </div>
        </div>

        <h3>RESIDENT DATA REPORT</h3>
        <?php
        ?>

        <table>
            <thead>
                <tr>
                    <th class="center" id="no">#</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Contact No.</th>
                    <th>Date of Birth</th>
                    <th>Purok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($resident as $res) { ?>
                    <tr>
                        <th class="center"><?= $no++ ?></th>
                        <td><?= $res->lastname; ?></td>
                        <td><?= $res->firstname; ?></td>
                        <td><?= $res->middlename; ?></td>
                        <td><?= $res->gender; ?></td>
                        <td><?= $res->age; ?></td>
                        <td><?= $res->mobile; ?></td>
                        <td><?= $res->datebirth; ?></td>
                        <td><?= $res->purok_desc; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <div><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
</body>

</html>