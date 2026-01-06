<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
$routes->set404Override(static function () {
	$data=array(
		'title'=>'Error 404 Not Found',
	);
	echo view('bo/pages/v_auth_header',$data);
    echo view('bo/pages/v_error.php');
	echo view('bo/pages/v_auth_footer');
});
*/
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// BACKEND
// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
// $routes->get('/loginbo', 'Auth::index');
// $routes->post('/prosesloginbo', 'Auth::proseslogin');
// $routes->get('/logout', 'Auth::logout');

// PASAR
// $routes->group('/pasar', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('', 'Pasar::index');
// 	$routes->get('tambah', 'Pasar::tambah');
// 	$routes->post('prosestambah', 'Pasar::prosestambah');
// 	$routes->get('lihat/(:any)', 'Pasar::lihat');
// 	$routes->get('edit/(:any)', 'Pasar::edit');
// 	$routes->post('prosesedit/(:any)', 'Pasar::prosesedit');
// 	$routes->get('hapus/(:any)', 'Pasar::hapus');
// 	$routes->get('tambahpetugas/(:any)', 'Pasar::tambahpetugas');
// 	$routes->post('prosestambahpetugas/(:any)', 'Pasar::prosestambahpetugas');
// 	$routes->get('editpetugas/(:any)', 'Pasar::editpetugas');
// 	$routes->post('proseseditpetugas/(:any)', 'Pasar::proseseditpetugas');
// 	$routes->get('edituserpetugas/(:any)', 'Pasar::edituserpetugas');
// 	$routes->post('prosesedituserpetugas/(:any)', 'Pasar::prosesedituserpetugas');
// 	$routes->get('pedagang', 'Pasar::pedagang');
// 	$routes->get('tambahpedagang', 'Pasar::tambahpedagang');
// 	$routes->post('prosestambahpedagang', 'Pasar::prosestambahpedagang');
// 	$routes->get('editpedagang/(:any)', 'Pasar::editpedagang');
// 	$routes->post('proseseditpedagang/(:any)', 'Pasar::proseseditpedagang');
// 	$routes->get('hapuspedagang/(:any)', 'Pasar::hapuspedagang');
// 	$routes->get('lihatpedagang/(:any)', 'Pasar::lihatpedagang');
// });

// // RETRIBUSI

// $routes->group('/retribusi', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('tagihan', 'Retribusi::tagihan');
// 	$routes->get('tagihanpasar/(:any)', 'Retribusi::tagihanpasar');
// 	$routes->get('tagihanbulan/(:any)', 'Retribusi::tagihanbulan');
// 	$routes->get('tagihanhari/(:any)', 'Retribusi::tagihanhari');
// 	$routes->get('tagihanlihat/(:any)', 'Retribusi::tagihanlihat');
// 	$routes->get('tagihanedit', 'Retribusi::tagihanedit');
// 	$routes->post('tagihanedit', 'Retribusi::tagihaneditproses');
// 	$routes->get('tagihancetak/(:any)', 'Retribusi::cetakskrd');
// 	$routes->get('tagihankwitansi/(:any)', 'Retribusi::cetakkwitansi');
// 	$routes->get('tagihanproses', 'Retribusi::tagihanproses');
// 	$routes->post('tagihanproses', 'Retribusi::tagihanproseslunas');
// 	$routes->get('tagihanpending', 'Retribusi::tagihanpending');
// 	$routes->get('tagihanhapus', 'Retribusi::tagihanhapus');
// 	$routes->post('tagihanhapus', 'Retribusi::tagihanhapusproses');
// 	$routes->get('tagihanexport/(:any)', 'Retribusi::tagihanexport');
// 	$routes->get('penerimaan', 'Retribusi::penerimaan');
// 	$routes->get('penerimaanpasar/(:any)', 'Retribusi::penerimaanpasar');
// 	$routes->get('penerimaandata/(:any)', 'Retribusi::penerimaandata');
// 	$routes->get('penerimaanlihat/(:any)', 'Retribusi::penerimaanlihat');
// 	$routes->get('penerimaanexport', 'Retribusi::penerimaanexport');
// 	$routes->get('penerimaanexport/(:any)', 'Retribusi::penerimaanexport');
// 	$routes->get('piutang', 'Retribusi::piutang');
// 	$routes->get('piutangpedagang/(:any)', 'Retribusi::piutangpedagang');
// 	$routes->get('piutangpedagangdata/(:any)', 'Retribusi::piutangpedagangdata');
// 	$routes->get('piutangtanggal/(:any)', 'Retribusi::piutangtanggal');
// 	$routes->get('piutangdata/(:any)', 'Retribusi::piutangdata');
// 	$routes->get('piutangdatalihat/(:any)', 'Retribusi::piutangdatalihat');
// 	$routes->get('tambahtagihan', 'Retribusi::tambahtagihan');
// 	$routes->post('prosestambahtagihan', 'Retribusi::prosestambahtagihan');


// 	$routes->post('generatetagihan(:any)', 'Retribusi::generatetagihan');

// 	$routes->get('tagihanlihat(:any)', 'Retribusi::tagihanlihat');
// 	$routes->get('tagihandetail/(:any)', 'Retribusi::tagihanlihatdetail');
// 	$routes->get('kirimulangnotifikasitagihan(:any)', 'Retribusi::kirimulangnotifikasitagihan');


// 	$routes->get('prosestagihandesa', 'Retribusi::prosestagihandesa');

// 	$routes->post('prosestagihanlunas(:any)', 'Retribusi::prosestagihanlunas');
// 	$routes->get('splittagihan(:any)', 'Retribusi::splittagihan');
// 	$routes->post('prosessplittagihan(:any)', 'Retribusi::prosessplittagihan');
// 	$routes->get('aktivasitagihan(:any)', 'Retribusi::aktivasitagihan');

// 	$routes->get('resendnotiftagihan(:any)', 'Retribusi::resendnotiftagihan');


// 	$routes->get('deletetagihan(:any)', 'Retribusi::deletetagihan');
// 	$routes->get('tagihandesa', 'Retribusi::tagihandesa');

// 	$routes->get('exportpenerimaan', 'Retribusi::exportpenerimaan');


// 	$routes->get('exportpenerimaandetail', 'Retribusi::exportpenerimaandetail');
// 	$routes->get('penerimaankoordinator', 'Retribusi::penerimaankoordinator');
// 	$routes->get('exportpenerimaankoordinator', 'Retribusi::exportpenerimaankoordinator');
// 	$routes->get('penerimaankoordinatordetail', 'Retribusi::penerimaankoordinatordetail');
// 	$routes->get('exportpenerimaankoordinatordetail', 'Retribusi::exportpenerimaankoordinatordetail');

// 	$routes->get('exportpiutang', 'Retribusi::exportpiutang');
// 	$routes->get('piutangdetail', 'Retribusi::piutangdetail');

// 	$routes->get('exportpiutangor', 'Retribusi::exportpiutangor');
// 	$routes->get('piutangdata', 'Retribusi::piutangdata');
// 	$routes->get('notifikasipiutangordetail/(:any)', 'Retribusi::notifikasipiutangordetail');
// 	$routes->get('notifikasipiutangor', 'Retribusi::notifikasipiutangor');
// 	$routes->get('piutangordetail/(:any)', 'Retribusi::piutangordetail');
// 	$routes->get('cetakteguran', 'Retribusi::cetakteguran');
// 	$routes->get('hapusteguran', 'Retribusi::hapusteguran');
// 	$routes->get('prosestagihan', 'Retribusi::prosestagihan');
// 	$routes->get('edittagihan', 'Retribusi::edittagihan');

// 	$routes->get('cetakkwitansi', 'Retribusi::cetakkwitansi');
// 	$routes->get('cetakskrd', 'Retribusi::cetakskrd');
// 	$routes->get('hapustagihan', 'Retribusi::hapustagihan');
// 	$routes->get('exportpiutangdetail', 'Retribusi::exportpiutangdetail');
// 	$routes->get('koordinator', 'Retribusi::koordinator');
// 	$routes->get('exportkoordinator', 'Retribusi::exportkoordinator');
// 	$routes->get('lihatkoordinator/(:any)', 'Retribusi::lihatkoordinator');
// 	$routes->get('exportlihatkoordinator/(:any)', 'Retribusi::exportlihatkoordinator');
// 	$routes->get('lihatkoordinatorretribusi/(:any)', 'Retribusi::lihatkoordinatorretribusi');
// 	$routes->get('tagihandasar', 'Retribusi::tagihandasar');
// 	$routes->get('tagihandesalihat', 'Retribusi::tagihandesalihat');
// 	$routes->get('prosestagihandesa', 'Retribusi::prosestagihandesa');
// 	$routes->post('proseskonfirmasitagihandesa', 'Retribusi::proseskonfirmasitagihandesa');
// 	$routes->get('tagihankonfirmasi', 'Retribusi::tagihankonfirmasi');
// 	$routes->get('tagihanpenetapan', 'Retribusi::tagihanpenetapan');
// });

// // WEBHOOK
// $routes->group('/webhook', function ($routes) {
// 	$routes->get('', 'Webhook::index');
// 	$routes->post('', 'Webhook::index');
// });

// // WA GATEWAY
// $routes->group('/wagateway', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('pesan', 'Wagateway::pesan');
// 	$routes->post('proseskirimpesan', 'Wagateway::proseskirimpesan');
// 	$routes->get('rekap', 'Wagateway::rekap');
// 	$routes->post('get_tablerekap', 'Wagateway::get_tablerekap');
// 	$routes->get('hapuspesan/(:any)', 'Wagateway::hapuspesan');
// });

// // MASTER
// $routes->group('/master', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('targetretribusi', 'Master::targetretribusi');
// 	$routes->post('tambahtargetretribusi', 'Master::tambahtargetretribusi');
// 	$routes->post('edittargetretribusi/(:any)', 'Master::edittargetretribusi');
// 	$routes->get('hapustargetretribusi/(:any)', 'Master::hapustargetretribusi');

// 	$routes->get('tarifretribusi', 'Master::tarifretribusi');
// 	$routes->post('tambahtarifretribusi', 'Master::tambahtarifretribusi');
// 	$routes->post('edittarifretribusi/(:any)', 'Master::edittarifretribusi');
// 	$routes->get('hapustarifretribusi/(:any)', 'Master::hapustarifretribusi');

// 	$routes->get('administrator', 'Master::administrator');
// 	$routes->post('tambahadmin', 'Master::tambahadmin');
// 	$routes->post('editadmin/(:any)', 'Master::editadmin');
// 	$routes->get('hapusadmin/(:any)', 'Master::hapusadmin');

// 	$routes->get('operator', 'Master::operator');
// 	$routes->get('tambahoperator', 'Master::tambahoperator');
// 	$routes->post('prosestambahoperator', 'Master::prosestambahoperator');
// 	$routes->get('editoperator/(:any)', 'Master::editoperator');
// 	$routes->post('proseseditoperator/(:any)', 'Master::proseseditoperator');
// 	$routes->get('hapusoperator/(:any)', 'Master::hapusoperator');

// 	$routes->get('pengguna', 'Master::pengguna');

// 	$routes->get('negara', 'Master::negara');
// 	$routes->post('tambahnegara', 'Master::tambahnegara');
// 	$routes->post('editnegara/(:any)', 'Master::editnegara');
// 	$routes->get('hapusnegara/(:any)', 'Master::hapusnegara');

// 	$routes->get('provinsi', 'Master::provinsi');
// 	$routes->post('tambahprovinsi', 'Master::tambahprovinsi');
// 	$routes->post('editprovinsi/(:any)', 'Master::editprovinsi');
// 	$routes->get('hapusprovinsi/(:any)', 'Master::hapusprovinsi');

// 	$routes->get('kabupaten', 'Master::kabupaten');
// 	$routes->post('tambahkabupaten', 'Master::tambahkabupaten');
// 	$routes->post('editkabupaten/(:any)', 'Master::editkabupaten');
// 	$routes->get('hapuskabupaten/(:any)', 'Master::hapuskabupaten');

// 	$routes->get('kecamatan', 'Master::kecamatan');
// 	$routes->post('tambahkecamatan', 'Master::tambahkecamatan');
// 	$routes->post('editkecamatan/(:any)', 'Master::editkecamatan');
// 	$routes->get('hapuskecamatan/(:any)', 'Master::hapuskecamatan');

// 	$routes->get('desa', 'Master::desa');
// 	$routes->post('tambahdesa', 'Master::tambahdesa');
// 	$routes->post('editdesa/(:any)', 'Master::editdesa');
// 	$routes->get('hapusdesa/(:any)', 'Master::hapusdesa');

// 	$routes->get('jenisor', 'Master::jenisor');
// 	$routes->post('tambahjenisor', 'Master::tambahjenisor');
// 	$routes->post('editjenisor/(:any)', 'Master::editjenisor');
// 	$routes->get('hapusjenisor/(:any)', 'Master::hapusjenisor');

// 	$routes->get('keteranganhapus', 'Master::keteranganhapus');
// 	$routes->post('tambahketeranganhapus', 'Master::tambahketeranganhapus');
// 	$routes->post('editketeranganhapus/(:any)', 'Master::editketeranganhapus');
// 	$routes->get('hapusketeranganhapus/(:any)', 'Master::hapusketeranganhapus');

// 	$routes->get('pejabat', 'Master::pejabat');
// 	$routes->post('tambahpejabat', 'Master::tambahpejabat');
// 	$routes->post('editpejabat/(:any)', 'Master::editpejabat');
// 	$routes->get('hapuspejabat/(:any)', 'Master::hapuspejabat');
// 	$routes->get('filettd/(:any)', 'Master::filettd');

// 	$routes->get('waserver', 'Master::waserver');
// 	$routes->post('tambahwaserver', 'Master::tambahwaserver');
// 	$routes->post('editwaserver/(:any)', 'Master::editwaserver');
// 	$routes->get('hapuswaserver/(:any)', 'Master::hapuswaserver');

// 	$routes->get('get_desa', 'Master::get_desa');
// 	$routes->get('get_jenis', 'Master::get_jenis');
// 	$routes->get('get_tarif', 'Master::get_tarif');
// 	$routes->get('get_cekusername', 'Master::get_cekusername');
// 	$routes->get('get_pedagang', 'Master::get_pedagang');
// 	$routes->get('get_datapedagang', 'Master::get_datapedagang');
// 	$routes->get('get_sisatagihanpedagang', 'Master::get_sisatagihanpedagang');
// });

// // SETTING

// $routes->group('/setting', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('', 'Setting::index');
// 	$routes->post('update/(:any)', 'Setting::update');
// });

// // USER
// $routes->group('/user', ['filter' => 'authGuard'], function ($routes) {
// 	$routes->get('', 'User::index');
// 	$routes->get('profile', 'User::profile');
// 	$routes->post('editprofile/(:any)', 'User::editprofile');
// 	$routes->post('editkeamanan/(:any)', 'User::editkeamanan');
// });

// // APP
// $routes->group('/apps', ['filter' => 'authGuardApp'], function ($routes) {
// 	$routes->get('', 'Apps::index');
// 	$routes->get('carabayar', 'Apps::carabayar');
// 	$routes->get('invoice', 'Apps::invoice');
// 	$routes->get('transaksi', 'Apps::transaksi');
// 	$routes->get('transaksidetail/(:any)', 'Apps::transaksidetail');
// 	$routes->get('profile', 'Apps::profile');
// 	$routes->post('prosesubahprofile', 'Apps::prosesubahprofile');
// 	$routes->post('prosesubahkeamanan', 'Apps::prosesubahkeamanan');
// 	$routes->get('cek_nowhatsapp', 'Apps::cek_nowhatsapp');
// });

// // APP ADMIN
// $routes->group('/appadmin', ['filter' => 'authGuardApp'], function ($routes) {
// 	$routes->get('', 'Appadmin::index');
// 	$routes->get('splashscreen', 'Appadmin::splashscreen');
// 	$routes->get('tentang', 'Appadmin::tentang');
// 	$routes->get('otp', 'Appadmin::otp');
// 	$routes->get('rekap', 'Appadmin::rekap');
// 	$routes->get('tagihan', 'Appadmin::tagihan');
// 	$routes->get('tagihanpedagang', 'Appadmin::tagihanpedagang');
// 	$routes->get('get_tagihanpedagang', 'Appadmin::get_tagihanpedagang');
// 	$routes->get('metodepembayaran/(:any)', 'Appadmin::metodepembayaran');
// 	$routes->get('detailpembayaranqris/(:any)', 'Appadmin::detailpembayaranqris');
// 	$routes->get('detailpembayarantunai/(:any)', 'Appadmin::detailpembayarantunai');
// 	$routes->get('statuspembayaran/(:any)', 'Appadmin::statuspembayaran');
// 	$routes->get('prosesbayartunai/(:any)', 'Appadmin::prosesbayartunai');
// 	$routes->get('cetakkwitansi/(:any)', 'Appadmin::cetakkwitansi');
// 	$routes->get('detailpembayaransebagian/(:any)', 'Appadmin::detailpembayaransebagian');
// 	$routes->post('prosespembayaransebagian/(:any)', 'Appadmin::prosespembayaransebagian');
// 	$routes->get('pembayaran', 'Appadmin::pembayaran');
// 	$routes->get('get_pembayaran', 'Appadmin::get_pembayaran');
// 	$routes->get('tambahtagihan', 'Appadmin::tambahtagihan');
// 	$routes->post('prosestambahtagihan', 'Appadmin::prosestambahtagihan');
// 	$routes->get('tagihantanggal', 'Appadmin::tagihantanggal');
// 	$routes->get('tagihanpending', 'Appadmin::tagihanpending');
// 	$routes->get('get_tagihanpending', 'Appadmin::get_tagihanpending');
// 	$routes->get('pendingpembayaran/(:any)', 'Appadmin::pendingpembayaran');
// 	$routes->get('aktivasitagihan/(:any)', 'Appadmin::aktivasitagihan');

// 	$routes->get('rekaptagihan/(:any)', 'Appadmin::rekaptagihan');
// 	$routes->post('prosesrekaptagihan', 'Appadmin::prosesrekaptagihan');
// 	$routes->get('cetak/(:any)', 'Appadmin::cetak');
// 	$routes->get('pasar', 'Appadmin::pasar');
// 	$routes->get('get_caripasar', 'Appadmin::get_caripasar');
// 	$routes->get('pedagang/(:any)', 'Appadmin::pedagang');
// 	$routes->get('get_caripedagang', 'Appadmin::get_caripedagang');
// 	$routes->get('lihatpedagang/(:any)', 'Appadmin::lihatpedagang');

// 	$routes->get('detailpembayaran', 'Appadmin::detailpembayaran');
// 	$routes->get('statuspembayaran', 'Appadmin::statuspembayaran');

// 	$routes->get('get_pedagang', 'Master::get_pedagang');
// 	$routes->get('get_datapedagang', 'Master::get_datapedagang');
// 	$routes->get('get_sisatagihanpedagang', 'Master::get_sisatagihanpedagang');
// });

// $routes->group('/cetak', ['filter' => 'authGuardApp'], function ($routes) {
// 	$routes->get('kwitansitunai/(:any)', 'Cetak::kwitansitunai');
// });


// // HOME APP
// $routes->group('/homeapp', function ($routes) {
// 	$routes->get('', 'Homeapp::index');
// 	$routes->get('splashscreen', 'Homeapp::splashscreen');
// 	$routes->get('login', 'Homeapp::login');
// 	$routes->post('loginapp', 'Homeapp::loginapp');
// 	$routes->get('logout', 'Homeapp::logout');
// });

// LANDING PAGE (HOME)
$routes->get('/', 'Dashboard::index');
$routes->get('/other_changelog', 'Dashboard::other_changelog');

// LAYOUT
$routes->group('/layout', function ($routes) {
	$routes->get('fixed_navbar', 'Layout::fixed_navbar');
	$routes->get('hideable_navbar', 'Layout::hideable_navbar');
	$routes->get('noHeader_navbar', 'Layout::noHeader_navbar');
	$routes->get('noFooter_navbar', 'Layout::noFooter_navbar');
	$routes->get('fixed_footer', 'Layout::fixed_footer');
	$routes->get('2sidebar_1side', 'Layout::twosidebar_oneside');
	$routes->get('2sidebar_2side', 'Layout::twosidebar_twoside');
	$routes->get('3sidebar', 'Layout::thresidebar');
	$routes->get('boxed_page', 'Layout::boxed_page');
	$routes->get('boxed_content', 'Layout::boxed_content');
});

// SIDEBAR
$routes->group('/sidebar', function ($routes) {
	$routes->get('sidebar_default_resizable', 'Sidebar::sidebar_default_resizable');
	$routes->get('sidebar_default_resized', 'Sidebar::sidebar_default_resized');
	$routes->get('sidebar_default_hideable', 'Sidebar::sidebar_default_hideable');
	$routes->get('sidebar_default_hidden', 'Sidebar::sidebar_default_hidden');
	$routes->get('sidebar_default_stretched', 'Sidebar::sidebar_default_stretched');
	$routes->get('sidebar_default_color_dark', 'Sidebar::sidebar_default_color_dark');

	$routes->get('sidebar_secondary_hideable', 'Sidebar::sidebar_secondary_hideable');
	$routes->get('sidebar_secondary_hidden', 'Sidebar::sidebar_secondary_hidden');
	$routes->get('sidebar_secondary_stretched', 'Sidebar::sidebar_secondary_stretched');
	$routes->get('sidebar_secondary_color_dark', 'Sidebar::sidebar_secondary_color_dark');

	$routes->get('sidebar_right_hideable', 'Sidebar::sidebar_right_hideable');
	$routes->get('sidebar_right_hidden', 'Sidebar::sidebar_right_hidden');
	$routes->get('sidebar_right_stretched', 'Sidebar::sidebar_right_stretched');
	$routes->get('sidebar_right_color_dark', 'Sidebar::sidebar_right_color_dark');

	$routes->get('sidebar_components', 'Sidebar::sidebar_components');
});

// NAVBAR
$routes->group('/navbar', function ($routes) {
	$routes->get('navbar_single_top_static', 'Navbar::navbar_single_top_static');
	$routes->get('navbar_single_top_fixed', 'Navbar::navbar_single_top_fixed');
	$routes->get('navbar_single_bottom_static', 'Navbar::navbar_single_bottom_static');
	$routes->get('navbar_single_bottom_fixed', 'Navbar::navbar_single_bottom_fixed');

	$routes->get('navbar_multiple_top_static', 'Navbar::navbar_multiple_top_static');
	$routes->get('navbar_multiple_top_fixed', 'Navbar::navbar_multiple_top_fixed');
	$routes->get('navbar_multiple_bottom_static', 'Navbar::navbar_multiple_bottom_static');
	$routes->get('navbar_multiple_bottom_fixed', 'Navbar::navbar_multiple_bottom_fixed');
	$routes->get('navbar_multiple_top_bottom_fixed', 'Navbar::navbar_multiple_top_bottom_fixed');
	$routes->get('navbar_multiple_secondary_sticky', 'Navbar::navbar_multiple_secondary_sticky');

	$routes->get('navbar_component_single', 'Navbar::navbar_component_single');
	$routes->get('navbar_component_multiple', 'Navbar::navbar_component_multiple');

	$routes->get('navbar_colors', 'Navbar::navbar_colors');
	$routes->get('navbar_sizes', 'Navbar::navbar_sizes');
	$routes->get('navbar_components', 'Navbar::navbar_components');
});

// NAVIGATION
$routes->group('/navigation', function ($routes) {
	$routes->get('navigation_vertical_styles', 'Navigation::navigation_vertical_styles');
	$routes->get('navigation_vertical_collapsible', 'Navigation::navigation_vertical_collapsible');
	$routes->get('navigation_vertical_accordion', 'Navigation::navigation_vertical_accordion');
	$routes->get('navigation_vertical_bordered', 'Navigation::navigation_vertical_bordered');
	$routes->get('navigation_vertical_right_icons', 'Navigation::navigation_vertical_right_icons');
	$routes->get('navigation_vertical_badges', 'Navigation::navigation_vertical_badges');
	$routes->get('navigation_vertical_disabled', 'Navigation::navigation_vertical_disabled');

	$routes->get('navigation_horizontal_styles', 'Navigation::navigation_horizontal_styles');
	$routes->get('navigation_horizontal_elements', 'Navigation::navigation_horizontal_elements');
	$routes->get('navigation_horizontal_tabs', 'Navigation::navigation_horizontal_tabs');
	$routes->get('navigation_horizontal_disabled', 'Navigation::navigation_horizontal_disabled');
	$routes->get('navigation_horizontal_mega', 'Navigation::navigation_horizontal_mega');
});

// //CRONJOB
// $routes->group('/cronjob', function ($routes) {
// 	$routes->get('cekwhatsappmassal', 'Cronjob::cekwhatsappmassal');
// 	$routes->get('cekwhatsapp', 'Cronjob::cekwhatsapp');
// 	$routes->get('kirimpesanblast', 'Cronjob::kirimpesanblast');
// });

// //PETA

// $routes->get('/peta', 'Peta::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
