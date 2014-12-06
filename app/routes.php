<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the Closure to execute when that URI is requested.
    |
    */


    Route::get('/',  function () {
        return View::make("front.pages.index");
    });

    Route::get('home', ["as" => "home", function () {
        return View::make("front.pages.index");
    }]);

    Route::get('contactus', ["as" => "contact", function () {
        return View::make("front.pages.contact");
    }]);

    Route::get('about', ["as" => "about", function () {
        return View::make("front.pages.about");
    }]);

    Route::get('education', ["as" => "education", function () {
        return View::make("front.pages.education");
    }]);

    Route::get('property_investment', ["as" => "property_investment", function () {
        return View::make("front.pages.property");
    }]);

    Route::get('rental_management', ["as" => "rental_management", function () {
        return View::make("front.pages.property");
    }]);
    Route::get('news', ["as" => "news", function () {
        return View::make("front.pages.news");
    }]);
    Route::get('partners', ["as" => "partners", function () {
        return View::make("front.pages.partners");
    }]);
    Route::get('immigration', ["as" => "immigration", function () {
        return View::make("front.pages.immigration");
    }]);

// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });

    Route::resource('admin/users', 'UsersController');
    Route::resource('admin/products', 'ProductsController');
    Route::resource('admin/orders', 'OrdersController');
    Route::resource('admin/carts', 'CartsController');
    Route::resource('admin/medias', 'MediasController');
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

    Route::get('admin/login', [
        "as"   => "register",
        "uses" => "RegisterController@getLogin"
    ]);

    Route::post('admin/login', [
        "uses" => "RegisterController@postLogin"
    ]);

    Route::post('redactor/imageUplaod', ['as' => "redactorImageUpload", 'uses' => "RedactorController@ImageUpload"]);



