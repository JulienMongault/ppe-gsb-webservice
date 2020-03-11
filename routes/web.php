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

Route::get('/', 'HomeController@index')->name('gsb.root');



Route::middleware('auth')->group(function () {
    Route::get('/praticiens', "ControllerGsb@liste")->name("gsb.listPra");

    Route::get('/visiteurs', "ControllerGsb@listeVisiteurAvecLabo")->name("gsb.listVis");

    Route::get('/rapports', "ControllerGsb@listeRapports")->name("gsb.listRap");

    Route::get('/rapport-editer', "ControllerGsb@editerRapport")->name("gsb.editerRap");

    route::get('/rapport/editer/{id}', "ControllerGsb@editerRapport")->name('gsb.editerRap');

    route::get('/rapport/supprimer/{id}', "ControllerGsb@validerSupprimerRapport")->name('gsb.validerSupprimerRap');

    route::post('/rapport/supprimer/valide', "ControllerGsb@supprimerRapport")->name('gsb.supprimerRap');

    route::get('/rapport/creation', "ControllerGsb@creationRapport")->name('gsb.creationRap');

    route::post('/rapport/save', "ControllerGsb@saveRapport")->name('gsb.saveRap');

    route::post('/rapport/update', "ControllerGsb@updateRapport")->name('gsb.updateRap');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
