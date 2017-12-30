<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();  

/*Route::get('/home', 'HomeController@index')->name('home');*/

/*Route::get('articulos', function () {
    echo "seccion articulos";;
}); */

//Route::group(['prefix' => 'articulos'], function(){

/*Route::get('view/{id}', [
      'uses'  => 'TestController@view',
      'as'    => 'articulovista'


	]);  */

    Route::get('/front',[

        'uses'  =>  'FrontController@index',
        'as'    =>   'front.index'
        
        ]);

	Route::group(['prefix' => 'admin'], function(){


    Route::group(['middleware' => 'admin'], function(){

        Route::resource('users','UsuariosController');
    Route::get('users/{id}/destroy',[
            'uses'  =>  'UsuariosController@destroy',
            'as'    =>   'admin.users.destroy'

        ]);

        });  

	Route::resource('categorias', 'CategoriasController');
	Route::get('categorias/{id}/destroy',[
            'uses'  =>  'CategoriasController@destroy',
            'as'    =>   'categorias.destroy' 

            ]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy',[
            'uses'  =>  'tagsController@destroy',
            'as'    =>   'tags.destroy' 

            ]);


	Route::resource('articulos', 'ArticulosController');
Route::get('articulos/{id}/destroy',[
            'uses'  =>  'articulosController@destroy',
            'as'    =>   'articulos.destroy' 

            ]);

Route::get('imagenes',[

		'uses'  =>  'ImagenesController@index',
		'as'    =>   'admin.imagenes.index'
		
		]);

Route::get('home', 'HomeController@index')->name('home');

Route::get('access', function(){

echo "hola m";

})->middleware('admin');

Auth::routes();


/*Route::get('admin/auth/login', [

    'uses' =>   'Auth/LoginController@showLoginForm',
    'as'   =>    'admin.auth.login'

    ]);  */


});



