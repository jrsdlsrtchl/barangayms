<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            width: 90%;
            margin: auto;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 12px;
            border-collapse: collapse;
            text-align: left;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 12px;
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
    </style>
</head>

<body>
    <h5>BARANGAY RAW-AN MANAGEMENT SYSTEM</h5>
    <h1>Resident Data Report</h1>
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
        <div class="col-auto"><span>&copy; Barangay Raw-an Management System - <?php echo date('Y') ?> Version 1.0</span></div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>