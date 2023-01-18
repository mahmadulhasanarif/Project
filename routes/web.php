<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\InstractorController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SeminerController;
use App\Http\Controllers\TraningController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
        /// User Profile and Change Password 
        Route::prefix('profile')->group(function(){

            Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
            
            Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
            
            Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
            
            Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
            
            Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
            
        }); 
        /// User Profile and Change Password 

});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified', 'role:admin'])->group(function () {

        // contact route
        Route::get('admin/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('contact-delete-{id}', [ContactController::class, 'delete'])->name('contact.delete');

        // Category Route
        Route::get('quiz-category', [CategoryController::class, 'index'])->name('quiz_category');
        Route::get('quiz-category-create', [CategoryController::class, 'create'])->name('quiz_category.create');
        Route::post('quiz-category/store', [CategoryController::class, 'store'])->name('quiz_category.store');
        Route::get('quiz-category/{category}/edit', [CategoryController::class, 'edit'])->name('quiz_category.edit');
        Route::post('quiz-category/update/{id}', [CategoryController::class, 'update'])->name('quiz_category.update');
        Route::get('quiz-category-delete-{id}', [CategoryController::class, 'delete'])->name('quiz_category.delete');
        
        // Question Route
        Route::get('quiz-question', [QuestionController::class, 'index'])->name('quiz_question');
        Route::get('quiz-question-create', [QuestionController::class, 'create'])->name('quiz_question.create');
        Route::post('quiz-question/store', [QuestionController::class, 'store'])->name('quiz_question.store');
        Route::get('quiz-{question}-edit', [QuestionController::class, 'edit'])->name('quiz_question.edit');
        Route::post('quiz-question-update-{id}', [QuestionController::class, 'update'])->name('quiz_question.update');
        Route::get('quiz-question-delete-{id}', [QuestionController::class, 'delete'])->name('quiz_question.delete');

        // Option Route
        Route::get('quiz-option', [OptionController::class, 'index'])->name('quiz_option');
        Route::get('quiz-option-create', [OptionController::class, 'create'])->name('quiz_option.create');
        Route::post('quiz-option/store', [OptionController::class, 'store'])->name('quiz_option.store');
        Route::get('quiz-option-{option}-edit', [OptionController::class, 'edit'])->name('quiz_option.edit');
        Route::post('quiz-option-update-{id}', [OptionController::class, 'update'])->name('quiz_option.update');
        Route::get('quiz-option-delete-{id}', [OptionController::class, 'delete'])->name('quiz_option.delete');
        Route::get('paginator',[OptionController::class, 'paginate']);
        
        // Result Route
        Route::get('results', [ResultController::class, 'index'])->name('admin.results.index');
        Route::post('results/store', [ResultController::class, 'store'])->name('quiz.result.store');
        Route::get('results/show/{result}', [ResultController::class, 'show'])->name('quiz.result.show');
        Route::resource('quiz/result', ResultController::class)->only('destroy','create');
        Route::delete('results_mass_destroy', [\App\Http\Controllers\ResultController::class, 'massDestroy'])->name('results.mass_destroy');

        // Blog Route  
        Route::get('admin-blog', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('admin-blog-create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('admin-blog-store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('admin/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::post('admin/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');

        // Course Category Route  
        Route::get('course-category', [CourseCategoryController::class, 'index'])->name('course.category.index');
        Route::get('course-category-create', [CourseCategoryController::class, 'create'])->name('course.category.create');
        Route::post('course-category-store', [CourseCategoryController::class, 'store'])->name('course.category.store');
        Route::get('course-category-{category}-edit', [CourseCategoryController::class, 'edit'])->name('course.category.edit');
        Route::post('course-category-update-{id}', [CourseCategoryController::class, 'update'])->name('course.category.update');
        Route::get('course-category-delete-{id}', [CourseCategoryController::class, 'delete'])->name('course.category.delete');

        // Course Route  
        Route::get('course', [CourseController::class, 'index'])->name('course.index');
        Route::get('course-create', [CourseController::class, 'create'])->name('course.create');
        Route::post('course-store', [CourseController::class, 'store'])->name('course.store');
        Route::get('course-{courses}-edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::get('course-show-{id}', [CourseController::class, 'show'])->name('course.show');
        Route::post('course-update-{id}', [CourseController::class, 'update'])->name('course.update');
        Route::get('course-delete-{id}', [CourseController::class, 'delete'])->name('course.delete');

        // Lesson Route  
        Route::get('lesson', [LessonController::class, 'index'])->name('lesson.index');
        Route::get('lesson-create', [LessonController::class, 'create'])->name('lesson.create');
        Route::post('lesson-store', [LessonController::class, 'store'])->name('lesson.store');
        Route::get('lesson-{lesson}-edit', [LessonController::class, 'edit'])->name('lesson.edit');
        Route::get('lesson-show-{id}', [LessonController::class, 'show'])->name('lesson.show');
        Route::post('lesson-update-{id}', [LessonController::class, 'update'])->name('lesson.update');
        Route::get('lesson-delete-{id}', [LessonController::class, 'delete'])->name('lesson.delete');

        // Instractor Route  
        Route::get('instractor', [InstractorController::class, 'index'])->name('instractor.index');
        Route::get('instractor-create', [InstractorController::class, 'create'])->name('instractor.create');
        Route::post('instractor-store', [InstractorController::class, 'store'])->name('instractor.store');
        Route::get('instractor-{instractor}-edit', [InstractorController::class, 'edit'])->name('instractor.edit');
        Route::post('instractor-update-{id}', [InstractorController::class, 'update'])->name('instractor.update');
        Route::get('instractor-delete-{id}', [InstractorController::class, 'delete'])->name('instractor.delete');

        // seminer Route  
        Route::get('seminer', [SeminerController::class, 'index'])->name('seminer.index');
        Route::get('seminer-delete-{id}', [LessonController::class, 'delete'])->name('seminer.delete');

            // Route certificate
        Route::get('certificate', [CertificateController::class, 'index'])->name('certificate.index');
        Route::get('certificate-create', [CertificateController::class, 'create'])->name('certificate.create');
        Route::post('certificate/store', [CertificateController::class, 'store'])->name('certificate.store');
        Route::get('certificate/{certificate}/edit', [CertificateController::class, 'edit'])->name('certificate.edit');
        Route::post('certificate/update/{id}', [CertificateController::class, 'update'])->name('certificate.update');
        Route::get('certificate/delete/{id}', [CertificateController::class, 'delete'])->name('certificate.delete');
        Route::get('certificate/verify/{id}', [CertificateController::class, 'show'])->name('certificate.show');    

});

 // seminer Route 
    Route::post('seminer-store', [SeminerController::class, 'store'])->name('seminer.store');

      
    // test route
    Route::get('test',[\App\Http\Controllers\TestController::class, 'index'])->name('client.test');
    Route::post('test',[\App\Http\Controllers\TestController::class, 'store'])->name('client.test.store');
    Route::get('results/{result}',[\App\Http\Controllers\ResultController::class, 'show'])->name('client.results.show');

    // Contact Route
    



    Route::get('certificate/search', [CertificateController::class, 'search'])->name('certificate.search');
    Route::get('certificate/verified', [CertificateController::class, 'verified'])->name('certificate.verified');



    // frontend part
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('contact-store', [HomeController::class, 'store'])->name('contact.store');
    Route::get('/software-service', [HomeController::class, 'software'])->name('software.service');
    Route::get('/it-service', [HomeController::class, 'it'])->name('it.service');
    Route::get('/service-details', [HomeController::class, 'serviceDetails'])->name('serviceDetails');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blog-details-{id}', [HomeController::class, 'blogDetails'])->name('blog.details');

    //Traning Part
    Route::get('traning-index', [TraningController::class, 'index'])->name('traning.index');
    Route::get('traning-course', [TraningController::class, 'course'])->name('traning.course');
    Route::get('traning-course-id', [TraningController::class, 'courseDetails'])->name('traning.course.details');
    Route::get('traning-event', [TraningController::class, 'event'])->name('traning.event');
