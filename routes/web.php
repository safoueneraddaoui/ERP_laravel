<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
//Route::domain('visionerp.digital')->group(function () { 


Route::domain('localhost')->group(function () { 
// Route::domain('localhost')->group(function () {

    // Landing Page Routes
    //Route::get('/', function () {
    //    return view('welcome');
    //});
    Route::get('/', 'HomeController@index')->name('index');
    //super admin views
    // Route::get('/users', 'UserController@index')->name('super_admin.users');


    // Login Routes
    Route::get('login', 'Auth\LoginController@showDomainForm')->name('login.domain');
    Route::post('login', 'Auth\LoginController@routeToTenant');

    // Registration Routes
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Catch All Route
    /*Route::any('{any}', function () {
        abort(404);
    })->where('any', '.*');*/
});



Route::get('/plans/show', 'PlanController@index')->name('super_admin.plans.index');

Auth::routes(['verify' => true]);

// Ensure that the tenant exists with the tenant.exists middleware
Route::middleware('tenant.exists')->group(function () {
    // Not Logged In


    // Login Routes
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    // Password Reset Routes
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // Email Verification Routes
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

    // Register Routes
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
    Route::post('/register', 'Auth\RegisterController@register');

    //Plan index
    // Route::get('/plans/create', 'PlanController@create')->name('super_admin.plans.create');
    // Route::post('/plans/store', 'PlanController@store')->name('super_admin.plans.store');

    // Route::get('/plans/show', 'PlanController@index')->name('super_admin.plans.index');
    // Route::get('/plans/showAdmin', 'PlanController@indexAdmin')->name('super_admin.plans.indexAdmin');
    // Route::get('/plans/{plan}/edit', 'PlanController@edit')->name('edit.plan');
    // Route::put('/plans/{plan}/show', 'PlanController@update')->name('update.plan');
    // Route::delete('/plans/{plan}', 'PlanController@delete')->name('delete.plan');
});

//super admin views
//  Route::get('/users', 'UserController@index')->name('super_admin.users');


// Logged in
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/plans/show', 'PlanController@index')->name('super_admin.plans.index');

Route::middleware('SuperAdmin')->group(function () {

    Route::get('/', 'HomeController@dashboard')->name('home');

    Route::get('/users', 'UserController@index')->name('super_admin.users');
    Route::get('/plans/create', 'PlanController@create')->name('super_admin.plans.create');
    Route::post('/plans/store', 'PlanController@store')->name('super_admin.plans.store');
    Route::get('/plans/show', 'PlanController@index')->name('super_admin.plans.index');
    Route::get('/plans/showAdmin', 'PlanController@indexAdmin')->name('super_admin.plans.indexAdmin');
    Route::get('/plans/{plan}/edit', 'PlanController@edit')->name('edit.plan');
    Route::put('/plans/{plan}/show', 'PlanController@update')->name('update.plan');
    Route::delete('/plans/{plan}', 'PlanController@delete')->name('delete.plan');




    //Settings

    Route::group(['namespace' => 'SuperAdmin'], function () {

        
        Route::get('/settings/application', 'SettingController@application')->name('super_admin.settings.application');
        Route::post('/settings/application', 'SettingController@application_update')->name('super_admin.settings.application.update');
        
        Route::get('/settings/theme/{theme}', 'ThemeSettingController@edit')->name('super_admin.settings.theme');
        Route::post('/settings/theme/{theme}', 'ThemeSettingController@update')->name('super_admin.settings.theme.update');
        Route::get('/settings/theme/{theme}/activate', 'ThemeSettingController@activate')->name('super_admin.settings.theme.activate');
    });
});
