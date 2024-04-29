<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Ifsnop\Mysqldump\Mysqldump;

class BackupController extends Controller
{
    public function backupDatabase()
    {
        // Set the default timezone to Asia/Manila
        date_default_timezone_set('Asia/Manila');

        $session = \CodeIgniter\Config\Services::session();

        $date = date('Y-m-d');

        $dump = new Mysqldump('mysql:host=localhost;dbname=brmsdb;port=3306', 'root', '');
        $dump->start('D:/BRMS/brms-backup-' . $date . '.sql');
        $dump->start('C:/xampp/htdocs/barangayrms/sql/brms-backup-' . $date . '.sql');

        if ($dump) {
            $session->setTempdata('success', 'Backup Successfully!', 3);
            return redirect()->to(base_url() . "DashboardController/dashboard");
        } else {
            $session->setTempdata('error', 'Failed Backup!', 3);
            return redirect()->to(base_url() . "DashboardController/dashboard");
        }
    }
}
