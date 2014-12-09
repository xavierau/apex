<?php
Route::resource('admin/users', 'UsersController');
Route::resource('admin/pages', 'PagesController');
Route::resource('admin/news', 'NewsController');


Route::get('admin/pages', [
    "as"   => "admin.dashboard",
    "uses" => "PagesController@index",
]);

Route::get('admin/login', [
    "as"   => "login",
    "uses" => "RegisterController@getLogin"
]);

Route::post('admin/login', [
    "uses" => "RegisterController@postLogin"
]);

Route::get('admin/logout', [
	"as" => "logout",
    "uses" => "RegisterController@getLogout"
]);

Route::post('redactor/imageUplaod', ['as' => "redactorImageUpload", 'uses' => "RedactorController@ImageUpload"]);