<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'App\Controllers\Admin\ArticlesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
});


Route::get('test1',function(){
        return Config::get('app.timezone');
});

Route::get('test2',function(){
        return $_ENV['TEST_STRIPE_KEY'];
    }
);

Route::get('test3',function(){
        return $_SERVER;
    }
);

Route::get('test4',function(){
    echo App::environment('local');
});

Route::get('test5',function(){
    return Config::get('mail.host');
});

Route::get('test6',function(){
    try {
        $response = RestClient::get('hostname:port/endpoint');
        return '1212';
    } catch (Exception $ex) {
        print "Error: " . $ex->getMessage(); // Error: COULDNT_RESOLVE_HOST
    }
});


