<?php
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EnquiryDetailsController;

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
Route::get('/enquiries', [PostController::class, 'create'])->name('enquiry');
Route::get('/enquiries-details', [EnquiryDetailsController::class, 'index'])->name('enquiry-details');
Route::post('/enquires-submit', [EnquiryDetailsController::class, 'enquiry']);
Route::post('/post', [PostController::class, 'enquiry']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/thank-you', function () {
    return view('thankyou');
});
Route::get('/enquiry-details', function () {
    return view('enquiry-details');
});
Route::get('/sendmail', function(){
   
});



