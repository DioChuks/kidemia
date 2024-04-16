<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\Profile\UserController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubjectController;
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
})->name('home');

Route::get('/take-test', [TestController::class, 'index'])->name('take.test');

Route::get('/take-exam', [ExamController::class, 'index'])->name('take.exam');

Route::get('/loading', function () {
    return view('loading');
});

// authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/register', 'showRegister')->name('show.register');
        Route::post('/register/onboard-user', 'register')->name('register');
        Route::get('/login', 'showLogin')->name('show.login');
        Route::post('/login', 'login')->name('login');
        Route::get('/forgot-password', 'showForgot')->name('show.forgot');
        Route::post('/forgot-password', 'forgotPassword')->name('forgot.password');
        Route::get('/change-password', 'showChangePassword')->name('show.change-password');
        Route::post('/change-password', 'changePassword')->name('change.password');

    });
});

Route::get('/getting/{id}/ready/{view?}/for/{readyId}', [TestController::class, 'showReadyScreen'])->name('get.ready');

Route::get('/pick/{type}/subject', [SubjectController::class, 'index'])->name('pick.subject');

Route::get('/pick/{subject}/topic/{type}', [TopicController::class, 'index'])->name('pick.topic');

Route::post('/test/create/questions', [TestController::class, 'startNewTest'])->name('test.topics');

Route::get('/test/ongoing/{test}', [TestController::class, 'test'])->name('test.ongoing');

Route::post('/assessment/submit', function() {
    return redirect()->route('test.result');
})->name('assessment.submit');

Route::get('/test/result', [ResultController::class, 'showTestResult'])->name('test.result');

Route::get('/test/result/corrections', [ResultController::class, 'showTestCorrection'])->name('test.corrections');

// terminate test or exam status
Route::post('/terminate-test-exam', [ResultController::class, 'toggleTestOrExamStatus'])->name('terminate.test-exam');

// user details
// Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::prefix('account')->group(function () {
            Route::get('/user/dashboard', 'showUserDashboard')->name('show.user-dashboard');
            Route::get('/user/profile', 'showUserProfile')->name('show.user-profile');
        });
    });
// });

// admin routes
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');

// require __DIR__.'/auth.php';
