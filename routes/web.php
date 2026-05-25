<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactSubmissionController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function (): void {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/technologies', 'technologies')->name('technologies');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/testimonials', 'testimonials')->name('testimonials');
    Route::get('/history', 'history')->name('history');
    Route::get('/industries', 'industries')->name('industries');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/mission-vision', 'missionVision')->name('mission-vision');
    Route::get('/case-studies', 'caseStudies')->name('case-studies');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/privacy', fn() => view('privacy'))->name('privacy');
Route::get('/terms', fn() => view('terms'))->name('terms');
