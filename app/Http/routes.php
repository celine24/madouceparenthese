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

/*ROUTES BACK*/

Route::group(['prefix' => 'admin'], function() {

	Route::group(['middleware' => 'auth'], function () {
    /*pour l'authentification, tout se passe dans le dossier vendor/bestmomo */
    Route::get('accueil', '\Bestmomo\Scafold\Http\Controllers\HomeController@index');
	Route::resource('pages', 'back\PagesController@index');
	Route::resource('articles', 'back\ArticlesController@index');
	Route::resource('mise-en-avant', 'back\SidebarController@index');
	Route::resource('galerie', 'back\GalleryController@index');

	});

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

});



/*ROUTES FRONT*/
get('/', function () {
    return view('front.template');
});

/*Route::get('{page}', function ($page) {
	return response('Je suis la page ' . $page . ' !', 200); 
})->where('page', '[a-z]+');*/

/*pour les articles : 
Route::get('article/{n}', function ($n) {
	 return view('article')->with('numero', $n);  
	})->where('n', '[0-9]+');

	ou méthode magique :
	return view('article')->withNumero($n);

get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);
->Ici on nomme home la route vers la méthode index du contrôleur HomeController 
pour l'URL de base.*/

