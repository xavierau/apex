<?php

    Route::group(array('prefix' => 'admin'), function()
    {

        Route::group(array('before' => 'auth'), function()
        {
            Route::resource('users', 'UsersController');
            Route::resource('pages', 'PagesController');
            Route::resource('news', 'NewsController');
            Route::resource('pageContents', 'PageContentsController');
            Route::resource('menus', 'MenusController');
            Route::resource('languages', 'LanguagesController');
            Route::resource('translations', 'TranslationsController');
            Route::resource('pageContent', 'PageContentsController');
            Route::resource('messages', 'MessagesController');

            Route::get('pages', [
                "as"   => "admin.dashboard",
                "uses" => "PagesController@index",
            ]);

            Route::get('logout', [
                "as" => "logout",
                "uses" => "RegisterController@getLogout"
            ]);

            Route::get('user/profile', function()
            {
                // Has Auth Filter
            });
        });

        Route::get('login', [
            "as"   => "login",
            "uses" => "RegisterController@getLogin"
        ]);

        Route::post('login', [
            "uses" => "RegisterController@postLogin"
        ]);




         // Ajax request
        Route::post('languageActivation',[
            'as'=>'language activation',
            'uses' => 'AjaxController@postLanguageActivation'
        ]);

        Route::post('languageDeactivation',[
            'as'=>'language deactivation',
            'uses' => 'AjaxController@postLanguageDeactivation'
        ]);

        Route::post('languageSetDefault',[
            'as'=>'language setdefault',
            'uses' => 'AjaxController@postLanguageSetDefault'
        ]);

    });

Route::post('redactor/imageUplaod', ['as' => "redactorImageUpload", 'uses' => "RedactorController@ImageUpload"]);