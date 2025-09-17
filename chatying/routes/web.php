<?php

use Illuminate\Support\Facades\Route;
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

// Home page - index.blade.php as homepage
Route::get('/', function () {
    return view('index');
})->name('home');

// Static pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/safety', function () {
    return view('safety');
})->name('safety');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Hide registration - commenting out register routes
// Route::get('/register', function () {
//     return view('registration');
// })->name('register');

Route::get('/chat', function () {
    return view('userlogin');
})->name('chat.room');

// Form submission routes
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Hide registration form submission
// Route::post('/register', function () {
//     // Handle registration form submission
//     return back()->with('success', 'Registration successful! Please log in.');
// })->name('register.submit');

Route::post('/chat/enter', function () {
    // Handle chat entry form submission
    return redirect()->route('chat.room');
})->name('chat.enter');

// Keep existing auth routes but disable registration
// Auth::routes();
Auth::routes(['register' => false]);

// Redirect old /home route to homepage
Route::get('/home', function () {
    return redirect()->route('home');
});

// Redirect any attempts to access register routes to homepage
Route::get('/register', function () {
    return redirect()->route('home');
});

Route::post('/register', function () {
    return redirect()->route('home');
});
