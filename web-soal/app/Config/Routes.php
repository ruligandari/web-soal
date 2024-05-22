<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\AuthController::index');

$routes->group('admin', function ($routes) {
    $routes->get('soal', 'Admin\SoalController::index');
    $routes->post('soal/store', 'Admin\SoalController::store');
    $routes->post('soal/update/(:num)', 'Admin\SoalController::update/$1');
    $routes->get('soal/delete/(:num)', 'Admin\SoalController::delete/$1');

    $routes->get('siswa', 'Admin\SiswaController::index');
});

// routes group api
$routes->group('api', function ($routes) {
    $routes->get('readsoal', 'Api\ApiController::index');
    $routes->get('readsoal-by-id/(:num)', 'Api\ApiController::readSoalById/$1');
    $routes->get('readsoal-by-id/', 'Api\ApiController::readSoal');

    $routes->post('readnilai', 'Api\ApiController::readNilai');
});
