<?php

    Route::get('/', function(){
        return View::make("front.pages.index-temp");
    });

    Route::get('home', ["as" => "home", function () {
        return View::make("front.pages.index-temp");
    }]);

    Route::get('contact', ["as" => "contact", function () {
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

    Route::get('immigration/{country?}', ["as" => "immigration", function ($country=null) {
        return View::make("front.pages.immigration")->withCountry($country);
    }]);

    Route::post('sendMessage', [
        "as" => "send message",
        "uses" => "MessagesController@sendMessage"
    ])->before("csrf_Ajax");