<?php

if(!Session::has("apex.langId"))
{
    Route::get('/{lang?}/{page?}/{param?}',  function ($lang=null, $page=null, $param=null) {
    $languages = Config::get('app.languages');
    // var_dump($languages);
    if (array_key_exists($lang, $languages)) {
        $langId = $languages[$lang];
        Session::put('apex.langId', $langId);
        // var_dump($langId);
    }else{
        if (!Session::has("apex.langId")) {
            $langId = $languages[Config::get("app.locale")];
            Session::put('apex.langId', $langId);
        }
        $param = $page;
        $page = $lang;
    }
    
    // var_dump("page is ".$page);
    // var_dump("param is ".$param);
    // var_dump("Session stored langId is ".Session::get('apex.langId'));
    return Redirect::to($page)->with($param);
    // return View::make('front.pages.'.$page);
    
    });
}

Route::get('/',  function () {
    return View::make("front.pages.index");
});

Route::get('home', ["as" => "home", function () {
    return View::make("front.pages.index");
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
