<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('error', function () {
        return view('errors.503');
    });

    Route::get('foo/bar', function () {
        return view('foo.bar');
    });

    Route::get('foo', function () {
        return "Este método é GET";
    });

    Route::post('foo', function () {
        return "Este método é POST";
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', function () {
            return "Listagem de usuários";
        });

        Route::get('add', function () {
            return "Adicionar usuário";
        });

        Route::get('{id}', function ($id) {
            return "Este é o usuário {$id}";
        });
    });
});
