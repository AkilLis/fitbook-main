<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return view('index');
});

/*Route::get('/test/{userId}', function($userId)
{
	return $userId;
})->middleware('throttle:3');*/

Route::get('/{clubId?}', function(Request $request, $clubId)
{
	$widgets = array();
	$directPage = 'welcome';
	switch ($clubId) {
		case 'flexgym':
			array_push($widgets, 'widgets.bootstrap');
			array_push($widgets, 'widgets.foundation');
			break;
		case 'goldengym':
			break;
		default:
			array_push($widgets, 'widgets.twitter');
			$directPage = 'user';
			break;
	}
	return view($directPage)->with('widgets', $widgets);
	/*return $widgets;*/
});