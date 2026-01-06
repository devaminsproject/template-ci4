<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'active_dashboard' => 'active',
        ];

        echo view('bo/pages/v_header', $data);
        echo view('bo/pages/v_dashboard');
        echo view('bo/pages/v_footer');
    }
    public function other_changelog()
    {
        $data = [
            'title' => 'Other Changelog',
            'active_otherChangelog' => 'active',
        ];

        echo view('bo/pages/v_header', $data);
        echo view('bo/template/v_other_changelog');
        echo view('bo/pages/v_footer');
    }
}
