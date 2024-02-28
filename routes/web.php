<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\aproposController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\voitureController;
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

// Route::get('/', function () {
//     return view('home.home');
// });

Route::get('/',[voitureController::class,'listPromo'] )->name('home.home');






Route::get('/vehicule',[voitureController::class,'list_user'] )->name('vehicule');

Route::get('/apropos',[aproposController::class,'index'] )->name('apropos');
Route::get('/contact',[contactController::class,'index'] )->name('contact');
Route::post('/contact',[MailController::class,'send'] )->name('contact.send');
Route::get('/faq',[faqController::class,'index'] )->name('faq');

Route::get('/logout',[signinController::class,'logout'] )->name('logout');




Route::get('/listevoiture/{voiture}',[reservationController::class,'index'] )->name('reservation');
Route::post('/listevoiture/{voiture}/store',[reservationController::class,'store'] )->name('reservation.store');

Route::get('/listevoiture/{voiture}/store/confirmed',[reservationController::class,'index2'] )->name('reservation.confirmed');


 
// Route::get('/listevoiture/{voiture}',[reservationController::class,'index'] )->name('reservation');
Route::get('/listevoiture_filter',[reservationController::class,'filter'] )->name('listevoiture.filter');
Route::get('/listevoiture_filteree',[voitureController::class,'filter'] )->name('listevoiture.filteree');




//partie adminnnnnnnnnnnnnnnnnnnnnn


Route::middleware('guest')->group(function() {
    Route::get('/signIn',[signinController::class,'index'] )->name('signin');
    Route::post('/signIn/store',[signinController::class,'store'] )->name('signinstore');
});

//reservation admin

Route::middleware('auth')->group(function() {

Route::get('/dash_admin',[reservationController::class,'reservationShow'] )->name('dash_admin');
Route::get('/deleteReservation/{id}',[reservationController::class,'deleteReservation'] )->name('deleteReservation');

Route::get('/admin',[signUpController::class,'index'] )->name('admin');
Route::post('/admin/store',[signUpController::class,'store'] )->name('signupstore');
//client admin

Route::get('/listeClientAdmin',[clientController::class,'index'] )->name('listeClientAdmin');
Route::get('/deleteClient/{id}',[clientController::class,'deleteClient'] )->name('deleteClient');

Route::get('/updateclient/{id}',[clientController::class,'updateclient'] )->name('updateclient');
Route::post('/updateclient/traitement',[clientController::class,'updateclient_traitement'] );



// Route::get('/dash_admin',[adminController::class,'index'] )->name('dash_admin')->middleware('auth');
Route::get('/addVoiture',[voitureController::class,'index2'] )->name('addVoiture');
Route::post('/addVoiture/store',[voitureController::class,'store'] )->name('addVoiture.store');

Route::get('/listevoiture',[voitureController::class,'index3'] )->name('listevoiture');

Route::get('/deletevoiture/{id}',[voitureController::class,'deletevoiture'] )->name('deletevoiture');

Route::get('/updatevoiture/{id}',[voitureController::class,'updatevoiture'] )->name('updatevoiture');
Route::post('/updatevoiture/traitement',[voitureController::class,'updatevoiture_traitement'] );
});