<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 30/12/14
 * Time: 6:21 AM
 */

namespace Acme\Composers\front;


use Session;

class IndexComposer extends BaseFrontEndComposer {

    public function compose($view)
    {
        $data = $this->getPageSingleContent('about');
        $immigrations = \PageContent::whereLang_id(Session::get('langId'))->whereIn('identifier',['italy', 'spain', 'ireland', 'malaysia'])->get();
//        dd(Session::get('langId'));
//        dd($immigrations);

//        dd($immigrations);
        $view->withContent($data['contents'])->withLayout($data['layout'])->withMedias($data['medias'])->withImmigrations($immigrations);
    }
}