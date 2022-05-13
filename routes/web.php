<?php

use App\Http\Controllers\PagesController as PageDirectory;
use App\Http\Controllers\ContactController;
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
    return view('index');
});

Route::get('/company', [PageDirectory::class, 'companyPage'])->name('company');
Route::get('/founders', [PageDirectory::class, 'foundersPage'])->name('founders');
Route::get('/services', [PageDirectory::class, 'servicesPage'])->name('services');
Route::get('/partners', [PageDirectory::class, 'partnersPage'])->name('partners');
Route::get('/careers', [PageDirectory::class, 'careersPage'])->name('careers');
Route::get('/support', [PageDirectory::class, 'supportPage'])->name('support');
Route::get('/contactus', [PageDirectory::class, 'contactusPage'])->name('contactus');

Route::post('/send-contact', [ContactController::class, 'sendContact'])->name('send.contact');
Route::post('/send-support', [ContactController::class, 'sendSupport'])->name('send.support');
Route::post('/send-career', [ContactController::class, 'sendCareer'])->name('send.career');

Route::get('/template', function () {
    return view('supportemail');
}); // for testing only

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
