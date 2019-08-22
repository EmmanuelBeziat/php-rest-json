<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * GET DATA
 */

 // Home redirect to web view
$router->get('/', function () use ($router) {
	return view('home');
});

// Web views data
$router->group(['prefix' => 'view'], function () use ($router) {
	$router->get('items', function () use ($router) {
		$query = app('db')->select("SELECT * from items");
		return view('items', ['items' => $query]);
	});

	$router->get('items/{id:[0-9]+}', function ($id) use ($router) {
		$query = app('db')->table('items')->where('id', $id)->first();
		return view('item', [
			'id' => $id,
			'item' => $query
		]);
	});
});

// RAW data
$router->group(['prefix' => 'api'], function () use ($router) {
	$router->get('items', function () use ($router) {
		$query = app('db')->select("SELECT * from items");
		return $query;
	});

	$router->get('items/{id:[0-9]+}', function ($id) use ($router) {
		$query = app('db')->table('items')->where('id', $id)->first();

		return json_decode(json_encode($query), true);
	});
});

/**
 * POST
 */
$router->post('add', function (\Illuminate\Http\Request $request) use ($router) {
	$query = app('db')->table('items')->insertGetId(
		['name' => $request->name]
	);

	return $query;
});
