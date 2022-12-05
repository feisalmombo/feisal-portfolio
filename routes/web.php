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

            # welcome view
            Route::get('/', function () {
                return view('welcome');
            });

            # Login by showloginform
            Route::get('login', [
                'as' => 'login',
                'uses' => 'Auth\LoginController@showLoginForm'
            ]);

            # Login
            Route::post('login', [
                'as' => '',
                'uses' => 'Auth\LoginController@login'
            ]);

            # Logout
            Route::post('logout', [
                'as' => 'logout',
                'uses' => 'Auth\LoginController@logout'
            ]);

            # Reset password by send via email
            Route::post('password/email', [
                'as' => 'password.email',
                'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
            ]);

            # Reset password request
            Route::get('password/reset', [
                'as' => 'password.request',
                'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
            ]);

            # Reset Password request
            Route::post('password/reset', [
                'as' => 'password.update',
                'uses' => 'Auth\ResetPasswordController@reset'
            ]);

            # Reset password capture token
            Route::get('password/reset/{token}', [
                'as' => 'password.reset',
                'uses' => 'Auth\ResetPasswordController@showResetForm'
            ]);

            # New view for change password
            Route::get('/change_password', function () {
                return view('auth.passwords.new_user_change_pwd');
            });

            # change password
            Route::post('/change_password', 'ChangePasswordController@updateNewuser');
            Route::resource('/change-password', 'ChangePasswordController');
            Route::post('/change-password', 'ChangePasswordController@update');

            # Checkuserstatus Middleware
            Route::group(['middleware' => 'CheckUserStatus'], function () {

            # Validatebuttonhistory Middleware
            Route::group(['middleware' => 'ValidateButtonHistory'], function () {

            # Auth Middleware
            Route::group(['middleware' => 'auth'], function () {

            # Home
            Route::get('/home', 'HomeController@index')->name('home');

            # User
            Route::get('admin/user/index', 'Admin\UsersController@index')->name('admin.user.index');
            Route::get('admin/user/create', 'Admin\UsersController@create')->name('admin.user.create');
            Route::post('admin/user/create', 'Admin\UsersController@store')->name('admin.user.store');
            Route::get('admin/user/edit/{id}', 'Admin\UsersController@edit')->name('admin.user.edit');
            Route::post('admin/user/edit/{id}', 'Admin\UsersController@update')->name('admin.user.update');
            Route::get('admin/user/show/{id}', 'Admin\UsersController@show')->name('admin.user.show');
            Route::get('admin/user/{id}/destroy', 'Admin\UsersController@destroy')->name('admin.user.destroy');
            Route::get('admin/user/disabled/{id}/{user}', 'Admin\UsersController@disabled')->name('admin.user.disabled');

            # Project
            Route::get('admin/project/index', 'Admin\ProjectsController@index')->name('admin.project.index');
            Route::get('admin/project/create', 'Admin\ProjectsController@create')->name('admin.project.create');
            Route::post('admin/project/create', 'Admin\ProjectsController@store')->name('admin.project.store');
            Route::get('admin/project/show/{id}', 'Admin\ProjectsController@show')->name('admin.project.show');
            Route::get('admin/project/destroy', 'Admin\ProjectsController@destroy')->name('admin.project.destroy');

            # Latest news
            Route::get('admin/skills/index', 'Admin\SkillsContoller@index')->name('admin.skills.index');
            Route::get('admin/skills/create', 'Admin\SkillsContoller@create')->name('admin.skills.create');
            Route::post('admin/skills/create', 'Admin\SkillsContoller@store')->name('admin.skills.store');
            Route::get('admin/skills/show/{id}', 'Admin\SkillsContoller@show')->name('admin.skills.show');
            Route::get('admin/skills/destroy', 'Admin\SkillsContoller@destroy')->name('admin.skills.destroy');

            # Skills
            Route::get('admin/latestnews/index', 'Admin\LatestNewsController@index')->name('admin.latestnews.index');
            Route::get('admin/latestnews/create', 'Admin\LatestNewsController@create')->name('admin.latestnews.create');
            Route::post('admin/latestnews/create', 'Admin\LatestNewsController@store')->name('admin.latestnews.store');
            Route::get('admin/latestnews/show/{id}', 'Admin\LatestNewsController@show')->name('admin.latestnews.show');
            Route::get('admin/latestnews/destroy', 'Admin\LatestNewsController@destroy')->name('admin.latestnews.destroy');

            # Testimonials
            Route::get('admin/testimonials/index', 'Admin\TestimonialsController@index')->name('admin.testimonials.index');
            Route::get('admin/testimonials/create', 'Admin\TestimonialsController@create')->name('admin.testimonials.create');
            Route::post('admin/testimonials/create', 'Admin\TestimonialsController@store')->name('admin.testimonials.store');
            Route::get('admin/testimonials/show/{id}', 'Admin\TestimonialsController@show')->name('admin.testimonials.show');
            Route::get('admin/testimonials/destroy', 'Admin\TestimonialsController@destroy')->name('admin.testimonials.destroy');

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
            Route::get('setting/contact/index', 'Setting\ContactMeController@index')->name('setting.contact.index');
            Route::get('setting/contact/create', 'Setting\ContactMeController@create')->name('setting.contact.create');
            Route::post('setting/contact/create', 'Setting\ContactMeController@store')->name('setting.contact.store');
            Route::get('setting/contact/edit/{id}', 'Setting\ContactMeController@edit')->name('setting.contact.edit');
            Route::post('setting/contact/edit/{id}', 'Setting\ContactMeController@update')->name('setting.contact.update');
            Route::get('setting/contact/show/{id}', 'Setting\ContactMeController@show')->name('setting.contact.show');
            Route::get('setting/contact/{id}/destroy', 'Setting\ContactMeController@destroy')->name('setting.contact.destroy');

