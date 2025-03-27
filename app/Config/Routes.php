<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('gaji', 'GajiController::index');
$routes->get('hitung-gaji-form', 'GajiController::hitungForm'); // Menampilkan form perhitungan gaji
$routes->post('hitung-gaji', 'GajiController::hitungGaji'); // Menghitung gaji setelah form dikirim
