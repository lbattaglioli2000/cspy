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

    // Admin - Unit management services
    Route::get('/new/unit', 'UnitController@index')->name('admin.new.unit');
    Route::post('/new/unit/publish', 'UnitController@post')->name('admin.new.unit.publish');

    // Admin - Lesson management services
    Route::get('/new/lesson', 'LessonController@index')->name('admin.new.lesson');
    Route::post('/new/lesson', 'LessonController@post')->name('admin.new.lesson.publish');
    // Admin - Component management services
    Route::post('/new/lecture', 'LectureController@index')->name('admin.new.lecture');
    Route::post('/new/lecture/publish', 'LectureController@post')->name('admin.new.lecture.publish');
    Route::post('/new/recap', 'RecapController@index')->name('admin.new.recap');
    Route::post('/new/recap/publish', 'RecapController@post')->name('admin.new.recap.publish');
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
    Route::get('/chat', 'HomeController@chat')->name('student.chat');
    Route::get('/notifications', 'HomeController@notifications')->name('student.notifications');
    Route::get('/settings', 'HomeController@settings')->name('student.settings');
    Route::get('/cloud9', 'HomeController@cloud9')->name('student.settings');

    // Search handler
    Route::get('/search', 'SearchController@lesson')->name('student.search');

    // Student handler for Lectures
    Route::get('/unit/{unit}/lesson/{lesson}/lecture', 'CourseController@lecture')->name('student.lecture');
    // Student handler for Recaps
    Route::get('/unit/{unit}/lesson/{lesson}/recap', 'CourseController@recap')->name('student.recap');
    // Student handler for Challenges
    Route::get('/unit/{unit}/lesson/{lesson}/challenge', 'CourseController@challenge')->name('student.challenge');
});
