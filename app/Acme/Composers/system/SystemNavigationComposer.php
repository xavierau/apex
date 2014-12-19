<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 2:05 PM
 */

namespace Acme\Composers\system;


use Acme\Models\Page;
use Cache;

class SystemNavigationComposer {
    protected $pages;

    function __construct(Page $pages)
    {
        $this->pages = $pages;
    }


    public function compose($view){
//        $allPages = $this->pages->all();
//        foreach($allPages as $page)
//        {
//            $title[$page->id] = $page->title()->whereLang_id(1)->first()->title;
//        }
//        $view->with('pages', $allPages)->with('title',$title);
    }

}

