<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('api/v1', ['namespace' => 'App\Controllers\API\V1'], static function (RouteCollection $routes) {
	$routes->get('/', 'ConverterController::index');
});
