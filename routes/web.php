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





//Route::get('/organization','\App\Http\Controllers\ArticleController@organization')->name('organization');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//retourne tous les article
Route::get('/AllArticles','\App\Http\Controllers\ArticleController@getAllArticle')->name('AllArticles');

//retourne le formulaire d'ajout articla
Route::get('/addArticle', '\App\Http\Controllers\ArticleController@addArticle')
		->name('addArticle');

//ajout article au base de donnee 		
Route::Post('/addArticleBD', '\App\Http\Controllers\ArticleController@addArticleBD')
		->name('addArticleBD');

//retourne le formulaire de modifier article
Route::get('/editArticle/{id}', '\App\Http\Controllers\ArticleController@editArticle')
		->name('editArticle');

//modifier article au base de donnee 		
Route::Post('/editArticleBD', '\App\Http\Controllers\ArticleController@editArticleBD')->name('editArticleBD');

//supprimer un article dans la base de donnee
Route::get('/deleteArticleBD/{id}', '\App\Http\Controllers\ArticleController@deleteArticleBD')
		->name('deleteArticleBD');

Route::get('/welcome','\App\Http\Controllers\ArticleController@getAllArticle')->name('AllArticles');

//afficher le formulaire de contact
Route::get('/contact', '\App\Http\Controllers\ContactController@contact')->name('contact');
//Ajouter le contact a la base de donnéé
Route::post('/contactBD', '\App\Http\Controllers\ContactController@contactBD')->name('contactBD');

Route::Post('/searchArticlePost', 'App\Http\Controllers\ArticleController@searchArticlePost')
		->name('searchArticlePost');

//Route localization
Route::get('locale/{lange}','\App\Http\Controllers\LocalizationController@setLang')->name('setLang');


//Equipe
Route::get('/equipe','\App\Http\Controllers\EquipeController@interface')->name('equipe');

//afficher le formulaire d'ajouter membre
Route::get('/addMembre', '\App\Http\Controllers\EquipeController@addMembre')
		->name('addMembre');

//ajouter membre au  iveau de base de donnéés
Route::Post('/membreBD', '\App\Http\Controllers\EquipeController@MembreBD')
		->name('MembreBD');

Route::post('/AddAllbumBD','\App\Http\Controllers\ArticleController@AddAllbumBD')->name('AddAllbumBD');

Route::post('/AddImagesBD','\App\Http\Controllers\ArticleController@AddImagesBD')->name('AddImagesBD');

Route::get('/Allmembre','\App\Http\Controllers\EquipeController@Allmembre')->name('Allmembre');



Route::get('/editMembre/{id}', '\App\Http\Controllers\EquipeController@editMembre')->name('editMembre');
Route::Post('/editMembreBD', '\App\Http\Controllers\EquipeController@editMembreBD')->name('editMembreBD');