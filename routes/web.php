<?php

use Illuminate\Support\Facades\Route;

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

Route::view('services', 'services/service')->name('servicegt');

Route::view('team', 'team/team')->name('team');

Route::view('a-propos', 'a propos/a-propos');

//Route::view('contact', 'contact/contact');


// contact
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

// news letter
// Route::get('news-letter', 'NewsletterController@create');
// Route::post('news-letter', 'NewsletterController@store');
Route::delete('news-letter/{newsletter}', 'NewsletterController@destroy');
Route::get('news-letter/{newsletter}', 'NewsletterController@show');
Route::resource('news-letter', 'NewsletterController');

// news letter mail
Route::view('newsletter-mail', 'dashboard/envoie mail/formulaire');

//Authentification
Auth::routes(['register' => false]); // le tableau en param permet de désactiver certaines routes

Route::get('/home', 'HomeController@index')->name('home');

//dashboard
Route::view('dashboard', 'dashboard/dashboard')->middleware('auth');
Route::view('message', 'dashboard/message/message-list');
Route::resource('message', 'ClientMessageController');
