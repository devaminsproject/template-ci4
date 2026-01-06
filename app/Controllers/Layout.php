<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Layout extends BaseController
{
    public function fixed_navbar()
    {
        $data = [
            'title' => 'Fixed Navbar',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_fixedNavbar' => 'active',
            'navbar' => 'fixed-top'
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_fixed_navbar');
        echo view('bo/pages/v_footer');
    }
    public function hideable_navbar()
    {
        $data = [
            'title' => 'Hideable Navbar',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_hideableNavbar' => 'active',
            'navbar' => 'navbar-slide-top fixed-top'
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_hideable_navbar');
        echo view('bo/pages/v_footer');
    }
    public function noHeader_navbar()
    {
        $data = [
            'title' => 'No Header Navbar',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_noHeaderNavbar' => 'active',
            'navbar' => ''
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_noHeader_navbar');
        echo view('bo/pages/v_footer');
    }
    public function noFooter_navbar()
    {
        $data = [
            'title' => 'No Footer Navbar',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_noFooterNavbar' => 'active',
            'navbar' => ''
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_noFooter_navbar');
        echo view('bo/pages/v_footer');
    }
    public function fixed_footer()
    {
        $data = [
            'title' => 'Fixed Footer',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_fixedFooter' => 'active',
            'navbar' => '',
            'footer' => 'fixed-bottom',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_fixed_footer');
        echo view('bo/pages/v_footer');
    }
    public function twosidebar_oneside()
    {
        $data = [
            'title' => 'Two Sidebar One Side',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_2sidebar1side' => 'active',
            'navbar' => '',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_2sidebar_1side');
        echo view('bo/pages/v_footer');
    }
    public function twosidebar_twoside()
    {
        $data = [
            'title' => 'Two Sidebar Two Side',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_2sidebar2side' => 'active',
            'navbar' => '',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_2sidebar_2side');
        echo view('bo/pages/v_footer');
    }
    public function thresidebar()
    {
        $data = [
            'title' => 'Thre Sidebar',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_3sidebar' => 'active',
            'navbar' => '',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_3sidebar');
        echo view('bo/pages/v_footer');
    }
    public function boxed_page()
    {
        $data = [
            'title' => 'Boxed Page',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_boxedPage' => 'active',
            'navbar' => ''
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_boxed_page');
        echo view('bo/pages/v_footer');
    }
    public function boxed_content()
    {
        $data = [
            'title' => 'Boxed Content',
            'open_layout' => 'nav-item-expanded nav-item-open',
            'show_layout' => 'show',
            'active_boxedContent' => 'active',
            // 'navbar' => ''
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/layout/v_boxed_content');
        echo view('bo/pages/v_footer');
    }
}
