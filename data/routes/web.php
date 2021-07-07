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
Route::get('/', 'AccueilController@index')->name('accueil');



Route::post('/loginUser', 'Auth\LoginController@Login')->name('userLogin');

Route::group(['prefix' => 'admin7x'], function () {

    Auth::routes();

});
/*Auth::routes();*/

Route::get('/home', 'HomeController@index')
    ->name('home')
->middleware('auth');


/*Gestion du contenu*/
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/remerciement', 'RemerciementController@index')->name('remerciement'); //
Route::get('/remerciement_newsletter', 'RemerciementController@index2')->name('remerciement_newsletter'); //





/*ROutes admin*/
Route::get('/admin/index', 'AdminController@index')->name('accueil.index')->middleware('auth');
Route::get('/admin/messages/{id}', 'AdminController@messages')->name('accueil.messages')->middleware('auth');
Route::post('/contact/formulaire', 'MessageController@servicesPatisserie')->name('contact.patisseries');
/*Route::get('/admin/messages_2', 'AdminController@messages_2')->name('accueil.messages2')->middleware('auth');
Route::get('/admin/messages_3', 'AdminController@messages_3')->name('accueil.messages3')->middleware('auth');
Route::get('/admin/messages_4', 'AdminController@messages_4')->name('accueil.messages4')->middleware('auth');
Route::get('/admin/messages_5', 'AdminController@messages_5')->name('accueil.messages5')->middleware('auth');*/

Route::get('/admin/messages_5', 'AdminController@messages_5')->name('accueil.messages5')->middleware('auth');
Route::get('/statistiques/{page}', 'AccueilController@statistiques')->name('accueil.statistiques')->middleware('auth');
Route::get('/contact/statistiques', 'ContactController@statistiques')->name('contact.statistiques')->middleware('auth');
Route::get('/locations/{page}/date/{date}', 'AdminController@users_ip')->name('location_infos')->middleware('auth');

//lien des formulaires
Route::get('/message/{id}', 'AdminController@show')->name('message');

//newsletter
Route::post('/newsletter', 'MessageController@newsletter')->name('newsletter');
Route::get('/newsletter', 'MessageController@getNewsletter')->name('newsletter');


