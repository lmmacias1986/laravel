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

/*Las rutas permiten indicar por medio de una palabra despues de la url a donde quiero ir, y tambien les puedo colocar variables
/sin variable Route::get('articles', function (){   ejemplo= localhost/articles
/con variable Route::get('articles/{nombre?}', function ($nombre = "empty"){   ejemplo= localhost/articles/crear
*/

Route::get('articles/{nombre?}', function ($nombre = "empty"){   
	echo "Esta es la funcion de articulos" . $nombre;
});


/*se pueden crear grupos de rutas de la siguiente manera*/

Route::group(['prefix'=>'articles'],function(){
	Route::get('view/{id}',[
		'uses'=>'TestController@view',    /*El arroba indica el metodo que se utiliza de ese controlador*/
		'as'=>'articlesView'
	]);
});

