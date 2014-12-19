<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 12/12/14
 * Time: 8:18 PM
 */

namespace Acme\Page;


class ANewPageWasAdded {

    public $page;

    function __construct($page)
    {
        $this->page = $page;
    }


} 