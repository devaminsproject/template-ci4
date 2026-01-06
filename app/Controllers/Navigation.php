<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Navigation extends BaseController
{
    public function navigation_vertical_styles()
    {
        $data = [
            'title' => 'Navigation Vertical Styles',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalStyles' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_styles');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_collapsible()
    {
        $data = [
            'title' => 'Navigation Vertical Colapsible',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalCollapsible' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_collapsible');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_accordion()
    {
        $data = [
            'title' => 'Navigation Vertical Accordion',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalAccordion' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_accordion');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_bordered()
    {
        $data = [
            'title' => 'Navigation Vertical Bordered',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalBordered' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_bordered');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_right_icons()
    {
        $data = [
            'title' => 'Navigation Vertical Right Icons',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalRightIcons' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_right_icons');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_badges()
    {
        $data = [
            'title' => 'Navigation Vertical Badges',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalBadges' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_badges');
        echo view('bo/pages/v_footer');
    }
    public function navigation_vertical_disabled()
    {
        $data = [
            'title' => 'Navigation Vertical Disabled',
            'open_navigation_vertikal' => 'nav-item-expanded nav-item-open',
            'show_navigation_vertikal' => 'show',
            'active_navigationVerticalDisabled' => 'active',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_vertical_disabled');
        echo view('bo/pages/v_footer');
    }
    public function navigation_horizontal_styles()
    {
        $data = [
            'title' => 'Navigation Horizontal Styles',
            'open_navigation_horizontal' => 'nav-item-expanded nav-item-open',
            'show_navigation_horizontal' => 'show',
            'active_navigationHorizontalStyles' => 'active',
            'sidebar' => 'sidebar-main-resized',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_horizontal_styles');
        echo view('bo/pages/v_footer');
    }
    public function navigation_horizontal_elements()
    {
        $data = [
            'title' => 'Navigation Horizontal Elements',
            'open_navigation_horizontal' => 'nav-item-expanded nav-item-open',
            'show_navigation_horizontal' => 'show',
            'active_navigationHorizontalElements' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_horizontal_elements');
        echo view('bo/pages/v_footer');
    }
    public function navigation_horizontal_tabs()
    {
        $data = [
            'title' => 'Navigation Horizontal Tabs',
            'open_navigation_horizontal' => 'nav-item-expanded nav-item-open',
            'show_navigation_horizontal' => 'show',
            'active_navigationHorizontalTabs' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_horizontal_tabs');
        echo view('bo/pages/v_footer');
    }
    public function navigation_horizontal_disabled()
    {
        $data = [
            'title' => 'Navigation Horizontal Disabled',
            'open_navigation_horizontal' => 'nav-item-expanded nav-item-open',
            'show_navigation_horizontal' => 'show',
            'active_navigationHorizontalDisabled' => 'active',
            'sidebar' => 'sidebar-main-resized align-self-start',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_horizontal_disabled');
        echo view('bo/pages/v_footer');
    }
    public function navigation_horizontal_mega()
    {
        $data = [
            'title' => 'Navigation Horizontal Mega',
            'open_navigation_horizontal' => 'nav-item-expanded nav-item-open',
            'show_navigation_horizontal' => 'show',
            'active_navigationHorizontalMega' => 'active',
            'sidebar' => '',
        ];
        echo view('bo/pages/v_header', $data);
        echo view('bo/template/navigation/v_navigation_horizontal_mega');
        echo view('bo/pages/v_footer');
    }
}
