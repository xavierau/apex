<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 4:14 PM
 */

namespace Acme\Composers\front;


use Acme\Models\Page;
use Session;

class AboutComposer extends BaseFrontEndComposer{

    public function compose($view)
    {

        $page = Page::whereUrl('about')->first();
        $content = $page->content()->whereLang_id(Session::get($this->key))->first();

//        dd(Session::get($this->key));
        $view->with(compact('content'));
    }
} 