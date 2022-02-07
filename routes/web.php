<?php

use App\Exports\QuestionExport;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\profileController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\WorkshopController;
use App\Http\Controllers\backend\IntroductionController;
use App\Http\Controllers\backend\QuestionController;
use App\Http\Controllers\backend\SurveyController;
use App\Http\Controllers\backend\UserSurveyController;
use App\Http\Controllers\RegisterController;
use App\Models\backend\Question;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//frontend controller
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about-us', [homeController::class, 'about'])->name('about');
Route::get('/contact-us', [homeController::class, 'contact'])->name('contact');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('blog_details');

Route::get('/search', [homeController::class, 'search'])->name('search');
// start login & registration routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login-info', [AuthController::class, 'customLogin'])->name('login-info');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('custom-registration', [RegisterController::class, 'register'])->name('register.custom');
// end login & registration routes

// RegisterController@register
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


// User routes / frontend url
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/deshboard', [homeController::class, 'userDashboard'])->name('user-deshboard');
    Route::get('workshop',[homeController::class,'workShop'])->name('workshop');
    Route::get('introduction',[homeController::class,'introduction'])->name('introduction');
    Route::get('survey',[homeController::class,'survey'])->name('survey');
    Route::get('survey-answer',[homeController::class,'surveyAnswer'])->name('survey-answer');

    // start_quiz_one_set
    Route::get('set-One', [homeController::class, 'setOne'])->name('setOne');
    Route::get('start-quiz-one-set', [homeController::class, 'start_quiz_one_set'])->name('start_quiz_one_set');
    Route::get('start_quiz_one_set/list', [homeController::class, 'start_quiz_one_set_list'])->name('start_quiz_one_set.list');
    Route::get('start_quiz_one_set-rone/submit', [homeController::class, 'start_quiz_one_set_rone_submit'])->name('start_quiz_one_set.rone.submit');

    //start_quiz_one_set//
    Route::get('start-quiz-two-set', [homeController::class, 'start_quiz_two_set'])->name('start_quiz_two_set');
    Route::get('start-quiz-two-set/list', [homeController::class, 'start_quiz_two_set_list'])->name('start_quiz_two_set.list');
    Route::get('start-quiz-two-set-rtwo/submit', [homeController::class, 'start_quiz_two_set_rtwo_submit'])->name('start_quiz_two_set.rtwo.submit');
    Route::get('set-Two', [homeController::class, 'setTwo'])->name('setTwo');

    // question-answer-verify
    Route::Post('question-answer', [homeController::class, 'answer'])->name('question-answer');
    Route::Post('question-answer-two', [homeController::class, 'answer_2'])->name('question-answer-two');

});



//Admin routes / balckend url
Route::group(['prefix' => 'admin','as' => 'admin.' ,'middleware' => ['is_admin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    // start profile routes
    Route::get('profile', [profileController::class, 'index'])->name('profile');
    Route::post('profile-update', [profileController::class, 'profileUpdate'])->name('profile-update');
    Route::post('password-update', [profileController::class, 'passwordUpdate'])->name('password-update');
    // end profile routes
    // start setting routes
    Route::get('store-setting', [profileController::class, 'storeSetting'])->name('store-setting');
    Route::post('update-store-setting', [profileController::class, 'updateStoreSetting'])->name('update-store-setting');
    // end setting routes

    // banner route start
    Route::get('banner-list', [BannerController::class, 'index'])->name('banner-list');
    Route::get('add-banner', [BannerController::class, 'addBanner'])->name('add-banner');
    Route::post('store-banner', [BannerController::class, 'storeBanner'])->name('store-banner');
    Route::get('edit-banner/{id}', [BannerController::class, 'editBanner'])->name('edit-banner');
    Route::post('update-banner/{id}', [BannerController::class, 'updateBanner'])->name('update-banner');
    Route::post('delete-banner/{id}', [BannerController::class, 'deleteBanner'])->name('delete-banner');
    // banner route end

    //workshop
    Route::get('workshop', [WorkshopController::class, 'WorkShop'])->name('workshop');
    Route::post('store-workshop', [WorkshopController::class, 'storeWorkShop'])->name('store-workshop');

    // introduction
    Route::get('introduction', [IntroductionController::class, 'Introduction'])->name('introduction');
    Route::post('store-introduction', [IntroductionController::class, 'storeIntroduction'])->name('store-introduction');

    //admin.user.servery

    route::get('user-servery', [UserSurveyController::class, 'index'])->name('user.survey');
    route::get('user-servery-summary/{id}', [UserSurveyController::class, 'summary'])->name('survey.summary');
    route::get('user-servery-answer/{id}', [UserSurveyController::class, 'answer'])->name('survey.answer');

    //question
    Route::get('question-list', [QuestionController::class, 'index'])->name('list-question');
    Route::get('question-add', [QuestionController::class, 'create'])->name('add-question');
    Route::post('question-store', [QuestionController::class, 'store'])->name('store-question');
    Route::get('question-edit/{question}', [QuestionController::class, 'edit'])->name('edit-question');
    Route::post('question-update/{question}', [QuestionController::class, 'update'])->name('update-question');
    Route::get('importExportView',[QuestionController::class, 'importExportView'] )->name('question-import');
    Route::post('import', [QuestionController::class, 'import'])->name('import');


    // survey//
    Route::get('survey-list', [SurveyController::class, 'index'])->name('list-survey');
    Route::get('survey-add', [SurveyController::class, 'create'])->name('add-survey');
    Route::post('survey-store', [SurveyController::class, 'store'])->name('store-survey');
    Route::get('survey-edit/{survey}', [SurveyController::class, 'edit'])->name('edit-survey');
    Route::post('survey-update/{survey}', [SurveyController::class, 'update'])->name('update-survey');
    Route::Post('survey-delete/{survey}', [SurveyController::class, 'delete'])->name('delete-survey');

    //user management//
    Route::get('user-management', [DashboardController::class, 'userIndex'])->name('user-management');
    Route::get('user-changeStatus/{id}', [DashboardController::class, 'changeStatus'])->name('user-changeStatus');
    Route::get('user-delete/{id}', [DashboardController::class, 'delete'])->name('delete-user');



});


Route::get('/data-clear', function(){
    Artisan::call('optimize:clear');
    Artisan::call('key:generate');
    dd('done');
    // $data = Question::take(100)->skip(18)->get(['id', 'answer_key']);
    // foreach($data as $item){
    //     $key= json_decode($item->answer_key);
    //     $key = str_replace(',', '","', $key);
    //     $key = '["'.$key.'"]';
    //     $item->update(['answer_key' => $key ]);
    //     // dd($item);
    // }
    // $key = explode(",",$data[2]->answer_key);
    // dd(json_encode($key));
    // $data = $data[2]->update(['answer_key' => json_encode($key)]);
    // dd($data);

    // dd(json_decode($data->answer_key));

    // foreach($data as $key=>$item){
    //     // dd($item);
    //     $key = '5'+ $key;

    //     DB::Statement("UPDATE `questions` SET `id` = '$key' WHERE `questions`.`id` =".$item->id.";");
    //     // $item->update(['set_no' =>2]);
    // }
    // dd($data);
    // return Excel::download(new QuestionExport, 'questions.xlsx');
});

// Route::get('export', 'MyController@export')->name('export');
// Route::get('importExportView', 'MyController@importExportView');
// Route::post('import', 'MyController@import')->name('import');
