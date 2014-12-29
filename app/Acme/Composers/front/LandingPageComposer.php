<?php

    namespace Acme\Composers\front;


    use Acme\Models\Page;
    use Cache;
    use Session;

    class LandingPageComposer extends BaseFrontEndComposer{

        public function compose($view)
        {

            $data = Cache::rememberForever('page_about', function(){
                return $this->getPageSingleContent('about');
            });

            $view->withContent($data['contents'])->withLayout($data['layout'])->withMedias($data['medias']);
        }


    }