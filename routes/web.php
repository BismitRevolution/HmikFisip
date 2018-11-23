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

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/', 'PageController@index')->name('index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@getContact')->name('contact.get');
Route::post('/contact', 'ContactController@postContact')->name('contact.post');

//this is resource controller, if you want to make a CRUD system, just look at it
Route::resource('/template', 'TemplateController');

//posts routes
Route::resource('/posts', 'PostController');
Route::get('/article/{id}', 'PageController@showarticle')->name('article.show');
Route::get('/articles/{category}', 'PageController@showcategory')->name('article.category');

Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/bph', 'ProfileController@indexPI')->name('show.bph');
    Route::get('/adkesma', 'ProfileController@indexAdkesma')->name('show.adkesma');
    Route::get('/sosmas', 'ProfileController@indexSosmas')->name('show.sosmas');
    Route::get('/humas', 'ProfileController@indexHumas')->name('show.humas');
    Route::get('/keilmuan', 'ProfileController@indexKeilmuan')->name('show.keilmuan');
    Route::get('/depor', 'ProfileController@indexDepor')->name('show.depor');
    Route::get('/senbud', 'ProfileController@indexSenbud')->name('show.senbud');
    Route::get('/psdm', 'ProfileController@indexPSDM')->name('show.psdm');
    Route::get('/keuangan', 'ProfileController@indexKeuangan')->name('show.keuangan');
    Route::post('/update', 'ProfileController@update')->name('update');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
	Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'AdminAuth\LoginController@login');
	Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

	// Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
	// Route::post('/register', 'AdminAuth\RegisterController@register');

	Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
	Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
	Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  	//article routes
    Route::get('/article', 'PageController@article')->name('article');
	Route::resource('/articles', 'ArticleController');
});
?>
