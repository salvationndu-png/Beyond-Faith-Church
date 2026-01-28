<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\EbookPaymentController;

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
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/donatepage', [HomeController::class, 'donatepage']);

Route::get('/paypage', [HomeController::class, 'paypage']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/photogallery', [HomeController::class, 'photogallery']);
Route::get('/messege', [HomeController::class, 'messege']);
Route::get('/ebooks_user', [HomeController::class, 'ebooks_user']);

// ADMIN ROUTES
Route::get('/events', [AdminController::class, 'events']);
Route::get('/ebooks', [AdminController::class, 'ebooks']);
Route::get('/ebooksource', [AdminController::class, 'ebooksource']);
Route::get('/messages', [AdminController::class, 'messages']);
Route::post('/messageupload', [AdminController::class, 'messageupload']);
Route::post('/contact_upload', [AdminController::class, 'contact_upload']);
Route::get('/admingallery', [AdminController::class, 'admingallery']);
Route::post('/events_upload', [AdminController::class, 'events_upload']);
Route::post('/ebookupload', [AdminController::class, 'ebookupload']);
Route::get('/contacts', [AdminController::class, 'contacts']);
Route::get('/delete_event/{id}', [AdminController::class, 'delete_event']);
Route::get('/delete_ebook/{id}', [AdminController::class, 'delete_ebook']);
Route::get('/delete_message/{id}', [AdminController::class, 'delete_message']);
Route::get('/event_id/{id}', [AdminController::class, 'event_id']);
Route::get('/message_id/{id}', [AdminController::class, 'message_id']);
Route::get('/audio_id/{id}', [AdminController::class, 'audio_id']);

Route::get('/getEbook/{id}', [AdminController::class, 'getEbook'])->name('ebooks.show');

Route::post('/events_id_upload/{id}', [AdminController::class, 'events_id_upload']);
Route::post('/gallery_id_upload/{id}', [AdminController::class, 'gallery_id_upload']);
Route::post('/message_id_upload/{id}', [AdminController::class, 'message_id_upload']); 
Route::post('/ebooks_id_upload/{id}', [AdminController::class, 'ebooks_id_upload']); 




Route::get('/gallery_id/{id}', [AdminController::class, 'gallery_id'])->name('gallery_id');
Route::get('/ebook_delete/{id}', [AdminController::class, 'ebook_delete']);
Route::get('/gallery_delete/{id}', [AdminController::class, 'gallery_delete']);
Route::get('/ebook_edit/{id}', [AdminController::class, 'ebook_edit']);
Route::get('/eventid/{id}', [HomeController::class, 'eventid']);






Route::get('/ebooks/pay/{ebook}', [EbookPaymentController::class, 'pay'])
    ->name('ebooks.pay');

Route::get('/ebooks/callback/{ebook}', [EbookPaymentController::class, 'callback'])
    ->name('ebooks.callback');

Route::post('/paystack/webhook', [EbookPaymentController::class, 'handle']);

Route::get('/ebooks/download/{ebook}', [EbookPaymentController::class, 'download'])
    ->name('ebooks.download');





// Route::post('/gallery/upload', [AdminController::class, 'uploadGallery'])->name('gallery.upload');
Route::post('/gallery_upload', [AdminController::class, 'uploadGallery'])->name('uploadGallery');
// Route::post('/messageupload', [AdminController::class, 'messageupload'])

// Route::view('/{any}', 'welcome')->where('any', '.*');


// Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

// Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
