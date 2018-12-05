<?php
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

// GENERAL ROUTES TO HOME PAGE AND OVERVIEW.
Route::get('/', function () {
    return view('home');
});

Route::get('/overview', function () {
    return view('overview');
});

// AUTHENTICATION ROUTES
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// ADMINISTRATION ROUTES
Route::prefix('admin')->group(function(){
    Route::get('/logout', 'Auth\AdminLoginController@destroy')->name('admin.logout');
    Route::get('/login', 'Auth\AdminLoginController@index')->name("admin.login");
    Route::post("/login", 'Auth\AdminLoginController@post')->name('admin.login.submit');
    Route::get('/', 'Auth\AdminController@index')->name('admin');

    // Admin - User management service
    Route::get('/users', 'Auth\AdminController@users')->name('admin.users');
    Route::get('/users/delete/{id}', 'Auth\AdminController@deleteUser')->name('admin.users.delete');

    // Admin - Admin management service
    Route::get('/admins', 'Auth\AdminController@admins')->name('admin.admins');
    Route::get('/admins/delete/{id}', 'Auth\AdminController@deleteAdmin')->name('admin.admins.delete');
    Route::post('/admins/new', 'Auth\AdminController@newAdmin')->name('admin.admins.new');

    // Admin - Cloud9 Request Management
    Route::get('/admin/request/delete/{id}', 'Auth\AdminController@deleteRequest')->name('admin.request.delete');

    // Admin - Unit management services
    Route::get('/new/unit', 'UnitController@index')->name('admin.new.unit');
    Route::post('/new/unit/publish', 'UnitController@post')->name('admin.new.unit.publish');

    // Admin - Course structure management dashboard
    Route::get('/course/manage', 'Auth\AdminController@courseManager')->name('admin.manage');

    // Admin - Course deletion services
    Route::get('/course/manage/delete/lesson/{lesson}/lecture', 'DeletionController@lecture')->name('admin.manage.delete.lesson.lecture');
    Route::get('/course/manage/delete/lesson/{lesson}/recap', 'DeletionController@recap')->name('admin.manage.delete.lesson.recap');
    Route::get('/course/manage/delete/lesson/{lesson}/challenge', 'DeletionController@challenge')->name('admin.manage.delete.lesson.challenge');
    Route::get('/course/manage/delete/lesson/{lesson}', 'DeletionController@lesson')->name('admin.manage.delete.lesson');
    Route::get('/course/manage/delete/unit/{unit}', 'DeletionController@unit')->name('admin.manage.delete.unit');

    // Admin - Course edit services
    Route::post('/course/manage/edit/unit/{unit}', 'UnitController@edit')->name('admin.edit.unit');

    Route::get('/course/manage/edit/lesson/{lesson}/lecture', 'LectureController@edit')->name('admin.edit.lesson.lecture');
    Route::post('/course/manage/edit/lesson/{lesson}/lecture', 'LectureController@editPOST')->name('admin.edit.lesson.lecture.post');

    Route::get('/course/manage/edit/lesson/{lesson}/recap', 'RecapController@edit')->name('admin.edit.lesson.recap');
    Route::get('/course/manage/edit/lesson/{lesson}/challenge', 'ChallengeController@edit')->name('admin.edit.challenge');

    Route::get('/course/manage/edit/lesson/{lesson}', 'LessonController@edit')->name('admin.edit.lesson');

    // Admin - Lesson management services
    Route::get('/new/lesson', 'LessonController@index')->name('admin.new.lesson');
    Route::post('/new/lesson', 'LessonController@post')->name('admin.new.lesson.publish');

    // Admin - Lecture management services
    Route::post('/new/lecture', 'LectureController@index')->name('admin.new.lecture');
    Route::post('/new/lecture/publish', 'LectureController@post')->name('admin.new.lecture.publish');

    // Admin - Recap management services
    Route::post('/new/recap', 'RecapController@index')->name('admin.new.recap');
    Route::post('/new/recap/publish', 'RecapController@post')->name('admin.new.recap.publish');

    // Admin - Challenge management services
    Route::post('/new/challenge', 'ChallengeController@index')->name('admin.new.challenge');
    Route::post('/new/challenge/publish', 'ChallengeController@post')->name('admin.new.challenge.publish');

    // Admin - System alert management services
    Route::get('/new/notification', 'NotificationController@index')->name('admin.new.notification');
    Route::post('/new/notification/publish', 'NotificationController@post')->name('admin.new.notification.publish');
    Route::get('/notification/delete/{id}', 'NotificationController@delete')->name('admin.notification.delete');
});

// STUDENT ROUTES
Route::prefix('/student')->group(function(){

    Route::get('/', 'HomeController@index')->name('student');
    Route::get('/notifications', 'HomeController@notifications')->name('student.notifications');

    // Donation handlers
    Route::get('/donate', 'DonationController@index')->name('donate');
    Route::get('/donate/{ammount}', 'DonationController@confirm')->name('donate.confirm');
    Route::post('/donate/charge', 'DonationController@charge')->name('donate.charge');

    // Student account settings controllers
    Route::get('/settings', 'HomeController@settings')->name('student.settings');

    Route::get('/cloud9', 'HomeController@cloud9')->name('student.cloud9');
    Route::post('/cloud9', 'HomeController@cloud9Request')->name('student.cloud9.request');

    // Search handler
    Route::get('/search', 'SearchController@lesson')->name('student.search');

    // Student handler for Unit
    Route::get('/unit/{unit}', 'HomeController@unit')->name('student.unit');

    // Student handler for Lectures
    Route::get('/lecture/{lesson}', 'CourseController@lecture')->name('student.lecture');

    // Student handler for Recaps
    Route::get('/recap/{lesson}', 'CourseController@recap')->name('student.recap');

    // Student handler for Challenges
    Route::get('/challenge/{lesson}', 'CourseController@challenge')->name('student.challenge');

    // Forum
    Route::get('/forum', 'ForumController@index')->name('student.forum');
    Route::post('/forum', 'ForumController@post')->name('student.forum.post');
    Route::post('/forum/comment', 'CommentController@post')->name('student.comment.post');
});
