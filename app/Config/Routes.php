<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');

//ketika ada akses yang metode req get.
//alamatnya adalah "/"=root
//jika ada yang mengkases root arahkan ke controller Home yang methodenya index

// $routes->add('/coba', 'Coba::index');
//cara membuat routes
// $routes->get('/coba', 'Coba::about');

//bisa juga tidak memanggil controller dan method
//tapi anonynous function=closure
// $routes->get('/coba', function () {
// 	echo "Hello Word";
// });

// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');
//$1 apapun yang dituliskan di placeholder
//$2 angka yang dimasukan di place holder
//Adapun nilai place holder bermacam2
//(:alpha) alfabet
//(:num) Angka
//(:segment) apapun kecuali slash
//(:alphanum) alfabet&angka
// $routes->get('/users', 'Admin\users::index');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
