<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

//roles
Route::resource('roles', 'RolesController');
Route::get('delete-role/{id}', ['as' => 'roles.delete', 'uses' => 'RolesController@delete'])->where('id', '[0-9]+');
//attache  role to a user
Route::get('attach-role/{id}', ['as' => 'roles.attach', 'uses' => 'RolesController@attach'])->where('id', '[0-9]+');
Route::post('attach-role-action/{id}', ['as' => 'roles.attacherole', 'uses' => 'RolesController@attacherole'])->where('id', '[0-9]+');
//attache role to a permission
Route::get('attach-permission/{id}', ['as' => 'roles.attachpermission', 'uses' => 'RolesController@attach_permission'])->where('id', '[0-9]+');
Route::post('attach-permission-action/{id}', ['as' => 'roles.attachrolepermission', 'uses' => 'RolesController@attachrole_permission'])->where('id', '[0-9]+');
//detach  role to a user
Route::get('detach-role/{id}', ['as' => 'roles.detach', 'uses' => 'RolesController@detach'])->where('id', '[0-9]+');
Route::post('detach-role-action/{id}', ['as' => 'roles.detachrole', 'uses' => 'RolesController@detachrole'])->where('id', '[0-9]+');
//detach  role to a permission
Route::get('detach-permission/{id}', ['as' => 'roles.detachpermission', 'uses' => 'RolesController@detachpermission'])->where('id', '[0-9]+');
Route::post('detach-permission-action/{id}', ['as' => 'roles.detachrolepermission', 'uses' => 'RolesController@detachrolepermission'])->where('id', '[0-9]+');


//permissions
Route::resource('permissions', 'PermissionsController');
Route::get('delete-permission/{id}', ['as' => 'permissions.delete', 'uses' => 'PermissionsController@delete'])->where('id', '[0-9]+');
