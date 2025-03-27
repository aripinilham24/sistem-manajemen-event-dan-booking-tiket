<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('events', ['controller'=>'EventController']);
$routes->resource('bookings', ['controller'=>'BookingController']);
$routes->resource('payments', ['controller'=>'PaymentController']);


