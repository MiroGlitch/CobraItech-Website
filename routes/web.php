<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
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

Route::get('/career-summary', [AdminController::class, 'careerSummaryPage'])->name('career.summary');
Route::get('/support-summary', [AdminController::class, 'supportSummaryPage'])->name('support.summary');
Route::get('/contact-summary', [AdminController::class, 'contactSummaryPage'])->name('contact.summary');
Route::get('/users-summary', [AdminController::class, 'usersPage'])->name('users.summary');

Route::post('/activate-career', [AdminController::class, 'activateCareer'])->name('activate.career');
Route::post('/deactivate-career', [AdminController::class, 'deactivateCareer'])->name('deactivate.career');

Route::post('/activate-application/{id}', [AdminController::class, 'activateApplication']);

Route::post('/activate-contact', [AdminController::class, 'activateContact'])->name('activate.contact');
Route::post('/deactivate-contact', [AdminController::class, 'deactivateContact'])->name('deactivate.contact');

Route::post('/activate-support', [AdminController::class, 'activateSupport'])->name('activate.support');
Route::post('/deactivate-support', [AdminController::class, 'deactivateSupport'])->name('deactivate.support');

Route::post('/add-user', [AdminController::class, 'addUser'])->name('users.add');
Route::post('/delete-user', [AdminController::class, 'deleteUser'])->name('users.delete');

Route::get('/template', function () {
    return view('mails.admincareeremail');
}); // for testing only

//Auth::routes();

Route::get('admin-panel', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin-panel', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
