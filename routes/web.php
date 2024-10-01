<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/resumes', function () {
    return view('resume');   
})->name('resume');

Route::get('/', function () {
    return view('login');
});

Route::post('/', function (Request $request) {
    return redirect()->route('resume');
});

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

