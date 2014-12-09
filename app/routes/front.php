<?php




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

Route::get('setLang/{lang?}', [ 'as' => "setLang", function ($lang=null) {
    $languages = Config::get('setting.languages');
    if ($lang && array_key_exists($lang, $languages)) {
        $key = Config::get('setting.appName').'.'.'langId';
        $langKey = Config::get('setting.appName').'.'.'lang';
        Session::forget($key);
        Session::forget($langKey);
        Session::put($key,$languages[$lang]);
        Session::put($langKey,$lang);
    }
    return Redirect::back();
}]);
