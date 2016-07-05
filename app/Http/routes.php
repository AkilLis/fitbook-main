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

Route::get('/create-club', function(Request $request) 
{
    return view('create-club');
});

Route::get('/{clubId?}', function(Request $request, $clubId)
{
	$widget_header = "widgets.header.default";
	$widget_footer = "widgets.footer.default";
	$widget_content = array();

	switch ($clubId) {
		case 'flexgym':
			array_push($widget_content, 'widgets.content.default');
			break;
		case 'goldengym':
			array_push($widget_content, 'widgets.content.default');
			break;
		default:
			array_push($widget_content, 'widgets.content.default');
			break;
	}
	return view('user')->with('widgets_content', $widget_content)
						    ->with('header_widget', $widget_header)
						    ->with('footer_widget', $widget_footer);
});

Route::get('auth/login', function(){
	return view('auth.login');
});