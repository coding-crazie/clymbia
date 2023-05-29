<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BanksController;
use App\Http\Controllers\BtcController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ChangeEmailController;
use App\Http\Controllers\ContactController;

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
Route::get('/',function(){
    return view('home');
})->name('home');



Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [BtcController::class, 'index'])->middleware('auth'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// side Pages 

Route::view('exchange','side-pages.exchange')->middleware('auth');
Route::view('market','side-pages.market')->middleware('auth');
Route::view('ico','side-pages.ico')->middleware('auth');
Route::view('future-trade','side-pages.future-trade')->middleware('auth');
Route::view('p2p','side-pages.p2p')->middleware('auth');
Route::view('battle','side-pages.battle')->middleware('auth');
Route::view('convert-trade','side-pages.convert-trade')->middleware('auth');
Route::view('margin-trade','side-pages.margin-trade')->middleware('auth');
Route::view('cryptoloan','side-pages.cryptoloan')->middleware('auth');
Route::view('cryptoonpay','side-pages.cryptoonpay')->middleware('auth');
Route::view('wallet','side-pages.wallet')->middleware('auth');
Route::view('profile','side-pages.profile')->middleware('auth');
Route::view('identification','side-pages.identification')->middleware('auth');
Route::view('referral','side-pages.referral')->middleware('auth');
Route::view('security','side-pages.security')->middleware('auth');
Route::view('coupons','side-pages.coupons')->middleware('auth');

// UI Elements 

Route::view('password-reset','ui-elements.password-reset')->middleware('auth');
Route::view('changelog','ui-elements.changelog')->middleware('auth');
Route::view('documentation','ui-elements.documentation')->middleware('auth');
Route::view('stater-page','ui-elements.stater-page')->middleware('auth');
Route::view('ui-toasts','ui-elements.ui-toasts')->middleware('auth');
Route::view('ui-tooltips','ui-elements.ui-tooltips')->middleware('auth');
Route::view('ui-spinners','ui-elements.ui-spinners')->middleware('auth');
Route::view('ui-progress','ui-elements.ui-progress')->middleware('auth');
Route::view('ui-pagination','ui-elements.ui-pagination')->middleware('auth');

// Chnage password 
Route::get('change-password', [ChangePasswordController::class,'index']);
Route::post('change-password', [ChangePasswordController::class,'store'])->name('change.password');
// Change email
Route::get('change-email', [ChangeEmailController::class,'index']);
Route::post('change-email', [ChangeEmailController::class,'ChangeEmail'])->name('change.email');

// Admin Routes 
Route::get('admin',[AdminController::class,'index'])->middleware('can:isAdmin')->name('admin');
Route::get('admins',[AdminController::class,'users_german'])->middleware('can:isAdmin')->name('admin');
Route::get('users',[AdminController::class,'users'])->middleware('can:isAdmin');
Route::get('/admin-insert',[AdminController::class,'insertForm'])->name('admin.insert')->middleware('can:isAdmin');
Route::post('/admin-insert',[AdminController::class,'create'])->name('admin.insert')->middleware('can:isAdmin');
Route::get('/admin-edit/{id}',[AdminController::class,'edit'])->name('admin.editform')->middleware('can:isAdmin');
Route::put('/admin-edit/{id}',[AdminController::class,'update'])->name('admin.updateform')->middleware('can:isAdmin');
Route::get('/admin-delete/{id}',[AdminController::class,'destroy'])->name('admin.delete')->middleware('can:isAdmin');
Route::get('/add-balance/{id}',[AdminController::class,'balance'])->name('balance')->middleware('can:isAdmin');
Route::put('/add-balance/{id}',[AdminController::class,'updateBalance'])->name('updateBalance')->middleware('can:isAdmin');
// for german individually 
Route::get('/add-balance-german/{id}',[AdminController::class,'balanceGerman'])->name('balanceGerman')->middleware('can:isAdmin');
Route::put('/add-balance-german/{id}',[AdminController::class,'updateBalanceGerman'])->name('updateBalanceGerman')->middleware('can:isAdmin');
// Others 
Route::view('chart','admin.chart');
Route::get('update-balance',[BtcController::class,'show'])->middleware('can:isAdmin');
Route::get('update-balance-german',[BtcController::class,'showGerman'])->name('germanBalance')->middleware('can:isAdmin');
Route::put('update-balance',[BtcController::class,'UpdateBalance'])->middleware('can:isAdmin');
Route::put('update-balance-german',[BtcController::class,'UpdateBalanceGerman'])->name('germanBalance')->middleware('can:isAdmin');
Route::get('users-registered',[AdminController::class,'countRows'])->middleware('can:isAdmin');
Route::get('total-requests',[AdminController::class,'totalRequest']);
Route::get('downloadpdf',[AdminController::class,'downloadPDF'])->middleware('can:isAdmin');
Route::get('users-banks',[AdminController::class,'show_banks'])->middleware('can:isAdmin');
Route::get('users-banks-germany',[AdminController::class,'show_banks_germany'])->middleware('can:isAdmin');

Route::get('bank-admin-status/{id}',[AdminController::class,'edit_status'])->middleware('can:isAdmin');
Route::put('bank-admin-status/{id}',[AdminController::class,'update_status'])->middleware('can:isAdmin');




// Banks Routes 
Route::get('add-bank',[BanksController::class,'index'])->middleware('auth');
Route::post('add-bank',[BanksController::class,'create'])->name('add-bank')->middleware('auth');
Route::get('all-requests',[BanksController::class,'show'])->name('see-requests')->middleware('auth');






// For Contact Email
Route::post('sendEmail',[ContactController::class,'sendEmail'])->name('contact');


Route::get('export-excel',[AdminController::class,'exportIntoExcel']);
Route::get('export-csv',[AdminController::class,'exportIntoCsv']);