<?php

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
        Session::put('langId',Cache::get('setting_default_language'));
        foreach($languages as $language =>$lang_id)
        {
            if($lang_id == Cache::get('setting_default_language'))
            {
                Session::put('lang',$language);
            }
        }
    }else{
        App::setLocale(Session::get('lang'));
    }