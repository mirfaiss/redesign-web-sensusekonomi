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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Beranda::index');

$routes->get('/perbandingan-wilayah', 'Beranda::perbandinganWilayah');
$routes->get('/tentang-se2016/metadata', 'Tentang::index/Metadata');
$routes->get('/tentang-se2016/metadata/(:any)', 'Tentang::metadata/$1');
$routes->get('/tentang-se2016/media', 'Tentang::index/Media');
$routes->get('/tentang-se2016/timeline', 'tentang::index/Timeline');



/* --------------------------------------------------------------------
* Produk Statistik 
* --------------------------------------------------------------------
*/
$routes->get('/produk-statistik/publikasi', 'ProdukStatistik::index/publikasi');
$routes->get('/produk-statistik/dokumen', 'ProdukStatistik::index/dokumen');
$routes->get('/produk-statistik/dokumen/(:any)', 'ProdukStatistik::dokumen/$1');
$routes->get('/produk-statistik/infografis', 'ProdukStatistik::index/infografis');


/* --------------------------------------------------------------------
* Layanan data
* --------------------------------------------------------------------
*/
$routes->get('/layanan-data/tabel-topik', 'LayananData::index/tabelTopik');
$routes->get('/layanan-data/tabel-topik/jumlah-usaha-tenaga-kerja-dan-balas-jasa', 'LayananData::index/jumlahUsahaBalasJasa');
$routes->get('/layanan-data/tabel-topik/jumlah-usaha', 'LayananData::index/jumlahUsaha');
$routes->get('/layanan-data/tabel-topik/jumlah-tenaga-kerja', 'LayananData::index/jumlahTenagaKerja');
$routes->get('/layanan-data/tabel-topik/balas-jasa-dan-upah-pekerja', 'LayananData::index/balasJasaUpahPekerja');
$routes->get('/layanan-data/tabel-topik/jumlah-usaha-pendapatan-dan-pengeluaran', 'LayananData::index/jumlahUsahaPengeluaran');
$routes->get('/layanan-data/tabel-topik/se2016/1/1', 'LayananData::index/tabel1');
$routes->get('/layanan-data/tabel-topik/se2016/1/metadata', 'LayananData::index/metadata');
$routes->get('/layanan-data/tabel-topik/se2016/1/chart', 'LayananData::index/chart');
$routes->get('/layanan-data/tabel-topik/se2016/1/peta', 'LayananData::index/peta');

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
