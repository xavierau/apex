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

    $key = Config::get('setting.appName').'.'.'langId';
    $langKey = Config::get('setting.appName').'.'.'lang';

    if (!Session::has($key) || !Session::has($langKey)) {
        $languages = Config::get('setting.languages');
        Session::put($key,$languages[Config::get('app.locale')]);
        Session::put($langKey,Config::get('app.locale'));
    }else{
        App::setLocale(Session::get($langKey));
    }

    foreach (File::allFiles(__DIR__.'/routes') as $partial) {
        require_once($partial->getPathName());
    }



