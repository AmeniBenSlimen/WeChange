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

//la page d'acceuil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viewArticle','\App\Http\Controllers\ArticleController@viewArticle')->name('viewArticle');
//afficher la vue organization
Route::get('/organization','\App\Http\Controllers\ArticleController@organization')->name('organization');



//retourne tous les article
Route::get('/AllArticles','\App\Http\Controllers\ArticleController@getAllArticle')->name('AllArticles');
Route::get('/','\App\Http\Controllers\ArticleController@index')->name('index');
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

//ajouter allbum au niveau de la base de donnee
Route::post('/AddAllbumBD','\App\Http\Controllers\ArticleController@AddAllbumBD')->name('AddAllbumBD');

//ajouter images au niveau de la base de donnee
Route::post('/AddImagesBD','\App\Http\Controllers\ArticleController@AddImagesBD')->name('AddImagesBD');


//afficher le formulaire de contact
Route::get('/contact', '\App\Http\Controllers\ContactController@contact')->name('contact');
//Ajouter le contact a la base de donnéé
Route::post('/contactBD', '\App\Http\Controllers\ContactController@contactBD')->name('contactBD');


//Route localization
Route::get('locale/{lange}','\App\Http\Controllers\LocalizationController@setLang')->name('setLang');


//afficher liste des Equipe
Route::get('/equipe','\App\Http\Controllers\EquipeController@interface')->name('equipe');

//afficher le formulaire d'ajouter membre
Route::get('/addMembre', '\App\Http\Controllers\EquipeController@addMembre')
		->name('addMembre');

//afficher liste de membre 
Route::get('/Allmembre','\App\Http\Controllers\EquipeController@Allmembre')->name('Allmembre');

//ajouter membre au  niveau de base de donnéés
Route::Post('/membreBD', '\App\Http\Controllers\EquipeController@MembreBD')
		->name('MembreBD');
//formulaire de Modifier membre
Route::get('/modifierMembre/{id}', '\App\Http\Controllers\EquipeController@modifierMembre')->name('modifierMembre');

//modification membre au niveau de la base de donnee
Route::Post('/editMembreBD', '\App\Http\Controllers\EquipeController@editMembreBD')->name('editMembreBD');

//supprimar membre
Route::get('/deleteMembreBD/{id}', '\App\Http\Controllers\EquipeController@deleteMembreBD')->name('deleteMembreBD');








