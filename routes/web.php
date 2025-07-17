<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Mail\SendQuickMSG;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [HomeController::class, 'home'])->name('Home');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', [HomeController::class, 'aboutUs'])->name('about us');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact us');
Route::post('/submit-message', [HomeController::class, 'submitMessage'])->name('submit message');

Route::get('/email-testing', function () {
    $data = (object)[
        'firstname' => 'Praise',
        'lastname' => 'Ebuka',
        'email' => 'test@example.com',
        'business_name' => 'checkers ltd',
        'type_of_staff' => 'One solid strengthed guy',
        'start_date' => '3rd of July 2025',
        'message' => 'Hello, I am testing the view.'
    ];

    if (request()->query('send') == 'true') {
        Mail::to('praise.njoga@gmail.com')->send(new SendQuickMSG($data));
    }

    return (new SendQuickMSG($data))->render();
});

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/terms', [HomeController::class, 'termsAndCondition'])->name('terms and conditions');
Route::get('/privacy', [HomeController::class, 'privacyAndPolicy'])->name('privacy and policy');
Route::get('/partners', [HomeController::class, 'partners'])->name('become a partner');

Route::get('/pricing', [HomeController::class, 'pricing'])->name('plans and pricing');


require __DIR__.'/auth.php';
