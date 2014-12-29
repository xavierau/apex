<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 4:14 PM
 */

namespace Acme\Composers\front;


use Cache;

class AboutComposer extends BaseFrontEndComposer{

    public function compose($view)
    {
        $data = $this->getPageSingleContent('about');

        $view->withContent($data['contents'])->withLayout($data['layout'])->withMedias($data['medias']);
    }


} 