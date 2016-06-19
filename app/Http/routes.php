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

Route::get('/{clubId?}', function(Request $request, $clubId)
{
	$widgets = array();
	switch ($clubId) {
		case 'flexgym':
			array_push($widgets, 'widgets.bootstrap');
			array_push($widgets, 'widgets.foundation');
			break;
		case 'goldengym':
			array_push($widgets, 'widgets.foundation');
			break;
		default:
			array_push($widgets, 'widgets.twitter');
			break;
	}
	return view('welcome')->with('widgets', $widgets);
	/*return $widgets;*/
});