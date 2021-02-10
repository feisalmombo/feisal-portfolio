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

// Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

# Authentication
Route::get('login', [
	'as' => 'login',
	'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('login', [
	'as' => '',
	'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
  ]);
  Route::post('password/email', [
	'as' => 'password.email',
	'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
  ]);
  Route::get('password/reset', [
	'as' => 'password.request',
	'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
  ]);
  Route::post('password/reset', [
	'as' => 'password.update',
	'uses' => 'Auth\ResetPasswordController@reset'
  ]);
  Route::get('password/reset/{token}', [
	'as' => 'password.reset',
	'uses' => 'Auth\ResetPasswordController@showResetForm'
  ]);

# New view for change password
// Route::get('/change_password', function () {
//     return view('auth.passwords.new_user_change_pwd');
// });

# change password
// Route::post('/change_password', 'ChangePasswordController@updateNewuser');
// Route::resource('/change-password', 'ChangePasswordController');
// Route::post('/change-password', 'ChangePasswordController@update');

# Checkuserstatus Middleware
Route::group(['middleware' => 'CheckUserStatus'], function () {

    # Validatebuttonhistory Middleware
    Route::group(['middleware' => 'ValidateButtonHistory'], function () {

        # Auth Middleware
        Route::group(['middleware' => 'auth'], function () {

            # Home
            Route::get('/home', 'HomeController@index')->name('home');

            # Permissions
            Route::get('/settings/manage_users/permissions/entrust_user', 'PermissionsController@entrust_user');
            Route::get('/settings/manage_users/permissions/entrust', 'PermissionsController@entrust');
            Route::post('/settings/manage_users/permissions/entrust_usr', 'PermissionsController@entrust_user_permissions');
            Route::get('/settings/manage_users/permissions/entrustRole', 'PermissionsController@entrust_roles');
            Route::post('/settings/manage_users/permissions/entrust_role_permissions', 'PermissionsController@entrust_role_permissions');
            Route::get('/settings/manage_users/permissions/entrust_role', 'PermissionsController@entrust_role');
            Route::resource('/settings/manage_users/permissions/', 'PermissionsController');

            # Roles
            Route::get('/settings/manage_users/roles/entrust', 'RolesController@get_roles');
            Route::post('/settings/manage_users/roles/entrust', 'RolesController@post_roles');
            Route::get('/settings/manage_users/roles/add', 'RolesController@add');
            Route::resource('/settings/manage_users/roles', 'RolesController');
        });
    });
});

# Contact
// Route::resource('setting/contact/create', 'Setting\ContactMeController');
// Route::get('setting/contact/create', 'Setting\ContactMeController@create')->name('setting.contact.create');
// Route::post('setting/contact/create', 'Setting\ContactMeController@store')->name('setting.contact.store');

# Contact
  Route::get('setting/contact/create', 'Setting\ContactMeController@create')->name('setting.contact.create');
  Route::post('setting/contact/create', 'Setting\ContactMeController@store')->name('setting.contact.store');
  Route::get('setting/contact/index', 'Setting\ContactMeController@index')->name('setting.contact.index');
  Route::get('setting/contact/create', 'Setting\ContactMeController@create')->name('setting.contact.create');
  Route::post('setting/contact/create', 'Setting\ContactMeController@store')->name('setting.contact.store');
  Route::get('setting/contact/edit/{id}', 'Setting\ContactMeController@edit')->name('setting.contact.edit');
  Route::post('setting/contact/edit/{id}', 'Setting\ContactMeController@update')->name('setting.contact.update');
  Route::get('setting/contact/show/{id}', 'Setting\ContactMeController@show')->name('setting.contact.show');
  Route::get('setting/contact/{id}/destroy', 'Setting\ContactMeController@destroy')->name('setting.contact.destroy');

