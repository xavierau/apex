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
    if(!Cache::has('languages'))
    {
        Cache::rememberForever('languages',function(){
            $result = DB::table('languages')->get();
            foreach ($result as $element){
                $data[$element->iso_code] = $element->id;
            }
            return $data;
        });
    }
    if (!Session::has('langId') || !Session::has('lang')) {
        $languages = Cache::get('languages');
        Session::put('langId',$languages[Config::get('app.locale')]);
        Session::put('lang',Config::get('app.locale'));

    }else{
        App::setLocale(Session::get('lang'));
    }

    foreach (File::allFiles(__DIR__.'/routes') as $partial) {
        require_once($partial->getPathName());
    }



