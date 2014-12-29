<?php

    if(!Cache::has('languages') || !Session::has('langId') || !Session::has('lang')){
        $languages=Cache::rememberForever('languages',function(){
            $data=[];
            $result = DB::table('languages')->whereActive(1)->get();
            foreach ($result as $element){
                $data[] = [
                    'id'=>$element->id,
                    'language'=>$element->language,
                    'iso_code'=>$element->iso_code,
                ];
            }
            return $data;
        });
        Session::put('langId',Cache::get('setting_default_language'));
        foreach($languages as $language)
        {
            if($language['id'] == Cache::get('setting_default_language'))
            {
                Session::put('lang',$language['language']);
                Session::put('langISO',$language['iso_code']);
            }
        }
    }

    App::setLocale(Session::get('langISO'));

