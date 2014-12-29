<?php
    Route::get('setLang/{lang?}', [ 'as' => "setLang", function ($lang=null) {
        $languages = Cache::get('languages');
        foreach($languages as $language)
        {
         if($lang == $language['iso_code'])
         {
             Session::forget('langId');
             Session::forget('lang');
             Session::forget('langISO');
             Session::put('langISO', $language['iso_code']);
             Session::put('langId',$language['id']);
             Session::put('lang',$lang);
         }
        }
        return Redirect::back();
    }]);