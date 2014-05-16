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

Route::get('/', array('as'=>'home', 'uses' => 'HomeController@index'));


Route::group(array('prefix'=>'events'), function () {
	Route::get('/add', array('as'=>'evenements_add', 'uses' => 'EvenementsController@add'));
	Route::post('/add', array('as'=>'evenements_create', 'uses' => 'EvenementsController@create'));
	Route::get('/edit/{slug}', array('as'=>'evenements_edit', 'uses' => 'EvenementsController@edit'));
	Route::post('/edit/{slug}', array('as'=>'evenements_update', 'uses' => 'EvenementsController@update'));
	Route::post('/view/{slug}', array('as'=>'evenements_view', 'uses' => 'EvenementsController@view'));
});
