<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

        // contact route
        Route::get('contact/delete', [ContactController::class, 'delete'])->name('contact.delete');

        // Category Route
        Route::get('quiz-category', [CategoryController::class, 'index'])->name('quiz_category');
        Route::post('quiz-category/store', [CategoryController::class, 'store'])->name('quiz_category.store');
        Route::post('quiz-category/update', [CategoryController::class, 'update'])->name('quiz_category.update');
        Route::get('quiz-category/delete', [CategoryController::class, 'delete'])->name('quiz_category.delete');
        Route::get('paginator',[CategoryController::class, 'paginate']);
        
        // Question Route
        Route::get('quiz-question', [QuestionController::class, 'index'])->name('quiz_question');
        Route::post('quiz-question/store', [QuestionController::class, 'store'])->name('quiz_question.store');
        Route::post('quiz-question/update', [QuestionController::class, 'update'])->name('quiz_question.update');
        Route::get('quiz-question/delete', [QuestionController::class, 'delete'])->name('quiz_question.delete');
        Route::get('paginator',[QuestionController::class, 'paginate']);

        // Option Route
        Route::get('quiz-option', [OptionController::class, 'index'])->name('quiz_option');
        Route::post('quiz-option/store', [OptionController::class, 'store'])->name('quiz_option.store');
        Route::post('quiz-option/update', [OptionController::class, 'update'])->name('quiz_option.update');
        Route::get('quiz-option/delete', [OptionController::class, 'delete'])->name('quiz_option.delete');
        Route::get('paginator',[OptionController::class, 'paginate']);
        
        // Result Route
        Route::get('results', [ResultController::class, 'index'])->name('admin.results.index');
        Route::post('results/store', [ResultController::class, 'store'])->name('quiz.result.store');
        Route::get('results/show/{result}', [ResultController::class, 'show'])->name('quiz.result.show');
        Route::resource('quiz/result', ResultController::class)->only('destroy','create');
        Route::delete('results_mass_destroy', [\App\Http\Controllers\ResultController::class, 'massDestroy'])->name('results.mass_destroy');

});



    
    // test route
    Route::get('test',[\App\Http\Controllers\TestController::class, 'index'])->name('client.test');
    Route::post('test',[\App\Http\Controllers\TestController::class, 'store'])->name('client.test.store');
    Route::get('results/{result}',[\App\Http\Controllers\ResultController::class, 'show'])->name('client.results.show');

    // Contact Route
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

    // Route certificate
    Route::get('certificate', [CertificateController::class, 'index'])->name('certificate.index');
    Route::post('certificate/store', [CertificateController::class, 'store'])->name('certificate.store');
    Route::get('certificate/{certificate}/edit', [CertificateController::class, 'edit'])->name('certificate.edit');
    Route::post('certificate/update/{id}', [CertificateController::class, 'update'])->name('certificate.update');
    Route::get('certificate/delete/{id}', [CertificateController::class, 'delete'])->name('certificate.delete');
    Route::get('certificate/verify/{id}', [CertificateController::class, 'show'])->name('certificate.show');
    Route::get('certificate/search', [CertificateController::class, 'search'])->name('certificate.search');
    Route::get('certificate/verified', [CertificateController::class, 'verified'])->name('certificate.verified');