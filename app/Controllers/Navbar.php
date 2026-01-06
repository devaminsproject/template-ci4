<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Navbar extends BaseController
{
    public function navbar_single_top_static()
    {
        $data = [
            'title' => 'Navbar Single Top Static',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondSingle' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondSingle' => 'show',
            'active_navbarSingleTopStatic' => 'active',
            'navbar' => '',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_single_top_static');
        echo view('bo/pages/v_footer');
    }
    public function navbar_single_top_fixed()
    {
        $data = [
            'title' => 'Navbar Single Top Fixed',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondSingle' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondSingle' => 'show',
            'active_navbarSingleTopFixed' => 'active',
            'navbar' => 'fixed-top',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_single_top_fixed');
        echo view('bo/pages/v_footer');
    }
    public function navbar_single_bottom_static()
    {
        $data = [
            'title' => 'Navbar Single Bottom Static',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondSingle' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondSingle' => 'show',
            'active_navbarSingleBottomStatic' => 'active',
            'navbar' => '',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_single_bottom_static');
        echo view('bo/pages/v_footer');
    }
    public function navbar_single_bottom_fixed()
    {
        $data = [
            'title' => 'Navbar Single Bottom Fixed',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondSingle' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondSingle' => 'show',
            'active_navbarSingleBottomFixed' => 'active',
            'navbar' => '',
            'footer' => 'fixed-bottom',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_single_bottom_fixed');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_top_static()
    {
        $data = [
            'title' => 'Navbar Multiple Top Static',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleTopStatic' => 'active',
            'navbar' => '',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 0,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_top_static');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_top_fixed()
    {
        $data = [
            'title' => 'Navbar Multiple Top Fixed',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleTopFixed' => 'active',
            'navbar' => 'fixed-top',
            'footer' => '',
            'multipleNavbar' => 0,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_top_fixed');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_bottom_static()
    {
        $data = [
            'title' => 'Navbar Multiple Bottom Static',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleBottomStatic' => 'active',
            'navbar' => '',
            'footer' => '',
            'multipleNavbar' => 1,
            'multipleFooter' => 0,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_bottom_static');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_bottom_fixed()
    {
        $data = [
            'title' => 'Navbar Multiple Bottom Fixed',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleBottomFixed' => 'active',
            'navbar' => '',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 1,
            'multipleFooter' => 0,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_bottom_fixed');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_top_bottom_fixed()
    {
        $data = [
            'title' => 'Navbar Multiple Top Bottom Fixed',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleTopBottomFixed' => 'active',
            'navbar' => 'fixed-top',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_top_bottom_fixed');
        echo view('bo/pages/v_footer');
    }
    public function navbar_multiple_secondary_sticky()
    {
        $data = [
            'title' => 'Navbar Multiple Secondary Sticky',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondMultiple' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondMultiple' => 'show',
            'active_navbarMultipleSecondarySticky' => 'active',
            'navbar' => 'fixed-top',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_multiple_secondary_sticky');
        echo view('bo/pages/v_footer');
    }
    public function navbar_component_single()
    {
        $data = [
            'title' => 'Navbar Component Single',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondContent' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondContent' => 'show',
            'active_navbarComponentSingle' => 'active',
            'navbar' => 'fixed-top',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_component_single');
        echo view('bo/pages/v_footer');
    }
    public function navbar_component_multiple()
    {
        $data = [
            'title' => 'Navbar Component Multiple',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'open_navbar_secondContent' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'show_navbar_secondContent' => 'show',
            'active_navbarComponentMultiple' => 'active',
            'navbar' => 'fixed-top',
            'footer' => 'fixed-bottom',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_component_multiple');
        echo view('bo/pages/v_footer');
    }
    public function navbar_colors()
    {
        $data = [
            'title' => 'Navbar Colors',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'active_navbarColors' => 'active',
            'navbar' => '',
            'footer' => '',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_colors');
        echo view('bo/pages/v_footer');
    }
    public function navbar_sizes()
    {
        $data = [
            'title' => 'Navbar Sizes',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'active_navbarSizes' => 'active',
            'navbar' => '',
            'footer' => '',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_sizes');
        echo view('bo/pages/v_footer');
    }
    public function navbar_components()
    {
        $data = [
            'title' => 'Navbar Components',
            'open_navbar' => 'nav-item-expanded nav-item-open',
            'show_navbar' => 'show',
            'active_navbarComponents' => 'active',
            'navbar' => '',
            'footer' => '',
            'multipleNavbar' => 1,
            'multipleFooter' => 1,
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navbar/v_navbar_components');
        echo view('bo/pages/v_footer');
    }
}
