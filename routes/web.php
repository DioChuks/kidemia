<?php

use App\Http\Controllers\ResultController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/take-test', function () {
    return view('taketest');
})->name('take.test');

Route::get('/loading', function () {
    return view('loading');
});

Route::get('/getting-ready', function () {
    return view('dashboard.readyScreen');
})->name('get.ready');

Route::get('/pick-subject', function () {
    return view('dashboard.pickSubject');
})->name('pick.subject');

Route::get('/pick-topic', function () {
    return view('dashboard.pickTopic');
})->name('pick.topic');

Route::post('/test/topics', [TestController::class, 'saveStudentTestTopics'])->name('test.topics');

Route::get('/test/ongoing/{subject}', [TestController::class, 'test'])->name('test.ongoing');

Route::get('/test/result', [ResultController::class, 'showTestResult'])->name('test.result');

require __DIR__.'/auth.php';
