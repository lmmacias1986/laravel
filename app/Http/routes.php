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

/*podemos tener diferentes tipos de rutas como por ejemplo
/GET, POST, PUT, DELETE, RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function(){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
		]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
		]);	
	Route::get('/', function () {
    	return view('admin.templates.main');
	});

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
		]);	

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy',[
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
		]);	
});


/*Las rutas permiten indicar por medio de una palabra despues de la url a donde quiero ir, y tambien les puedo colocar variables
/sin variable Route::get('articles', function (){   ejemplo= localhost/articles
/con variable Route::get('articles/{nombre?}', function ($nombre = "empty"){   ejemplo= localhost/articles/crear
*/

route::get('admin/auth/login',[
	'uses' 	=> 'Auth\AuthController@getLogin',
	'as' 	=> 'admin.auth.login'
]);
route::post('admin/auth/login',[
	'uses' 	=> 'Auth\AuthController@postLogin',
	'as' 	=> 'admin.auth.login'
]);
route::get('admin/auth/logout',[
	'uses' 	=> 'Auth\AuthController@getLogout',
	'as' 	=> 'admin.auth.logout'
]);

Route::auth();

Route::get('/home', 'HomeController@index');

