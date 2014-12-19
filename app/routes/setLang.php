<?php
    Route::get('setLang/{lang?}', [ 'as' => "setLang", function ($lang=null) {
        $languages = Cache::get('languages');
        if ($lang && array_key_exists($lang, $languages)) {
            Session::forget('langId');
            Session::forget('lang');

            Session::put('langId',$languages[$lang]);
            Session::put('lang',$lang);
        }
        return Redirect::back();
    }]);