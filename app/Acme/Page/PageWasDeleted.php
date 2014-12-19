<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 12/12/14
 * Time: 7:25 PM
 */

namespace Acme\Page;


use Acme\Models\Page;

class PageWasDeleted {

    public $page;

    function __construct(Page $page)
    {
        $this->page = $page;
    }

} 