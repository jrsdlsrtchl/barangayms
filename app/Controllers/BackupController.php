<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Ifsnop\Mysqldump\Mysqldump;

class BackupController extends Controller
{
    public function backupDatabase()
    {
        $session = \CodeIgniter\Config\Services::session();

        $date = date('Y-m-d');

        $dump = new Mysqldump('mysql:host=localhost;dbname=brmsdb;port=3306', 'root', '');
        $dump->start('D:/BRMS/brms-backup-' . $date . '.sql');

        if ($dump) {
            $session->setTempdata('success', 'Database backup completed successfully!', 3);
            return redirect()->to(base_url() . "DashboardController/dashboard");
        } else {
            $session->setTempdata('success', 'Failed to backup the database!', 3);
            return redirect()->to(base_url() . "DashboardController/dashboard");
        }
    }
}
