<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sidebar extends BaseController
{
    public function sidebar_default_resizable()
    {
        $data = [
            'title' => 'Sidebar Default Resizable',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultResizable' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_resizable');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_default_resized()
    {
        $data = [
            'title' => 'Sidebar Default Resized',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultResized' => 'active',
            'sidebar' => 'sidebar-main-resized',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_resized');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_default_hideable()
    {
        $data = [
            'title' => 'Sidebar Default Hideable',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultHideable' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_hideable');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_default_hidden()
    {
        $data = [
            'title' => 'Sidebar Default Hidden',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultHidden' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_hidden');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_default_stretched()
    {
        $data = [
            'title' => 'Sidebar Default Stretched',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultStretched' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_stretched');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_default_color_dark()
    {
        $data = [
            'title' => 'Sidebar Default Color Dark',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondMain' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondMain' => 'show',
            'active_sidebarDefaultColorDark' => 'active',
            'sidebar' => 'sidebar-dark',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_default_color_dark');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_secondary_hideable()
    {
        $data = [
            'title' => 'Sidebar Secondary Hideable',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondSec' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondSec' => 'show',
            'active_sidebarSecondaryHideable' => 'active',
            'sidebar' => 'sidebar-main-resized',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_secondary_hideable');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_secondary_hidden()
    {
        $data = [
            'title' => 'Sidebar Secondary Hidden',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondSec' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondSec' => 'show',
            'active_sidebarSecondaryHidden' => 'active',
            'sidebar' => 'sidebar-main-resized',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_secondary_hidden');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_secondary_stretched()
    {
        $data = [
            'title' => 'Sidebar Secondary Stretched',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondSec' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondSec' => 'show',
            'active_sidebarSecondaryStretched' => 'active',
            'sidebar' => 'sidebar-main-resized',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_secondary_stretched');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_secondary_color_dark()
    {
        $data = [
            'title' => 'Sidebar Secondary Color Dark',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondSec' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondSec' => 'show',
            'active_sidebarSecondaryColorDark' => 'active',
            'sidebar' => 'sidebar-main-resized sidebar-dark align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_secondary_color_dark');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_right_hideable()
    {
        $data = [
            'title' => 'Sidebar Right Hideable',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondRight' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondRight' => 'show',
            'active_sidebarRightHideable' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_right_hideable');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_right_hidden()
    {
        $data = [
            'title' => 'Sidebar Right Hidden',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondRight' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondRight' => 'show',
            'active_sidebarRightHidden' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_right_hidden');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_right_stretched()
    {
        $data = [
            'title' => 'Sidebar Right Stretched',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondRight' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondRight' => 'show',
            'active_sidebarRightStretched' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_right_stretched');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_right_color_dark()
    {
        $data = [
            'title' => 'Sidebar Right Color Dark',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'open_sidebar_secondRight' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'show_sidebar_secondRight' => 'show',
            'active_sidebarRightColorDark' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_right_color_dark');
        echo view('bo/pages/v_footer');
    }
    public function sidebar_components()
    {
        $data = [
            'title' => 'Sidebar Components',
            'open_sidebar' => 'nav-item-expanded nav-item-open',
            'show_sidebar' => 'show',
            'active_sidebarComponents' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/sidebar/v_sidebar_components');
        echo view('bo/pages/v_footer');
    }
}
