<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 12/12/14
 * Time: 6:52 PM
 */

namespace Acme\Page;


class DeleteThePageCommand {

    public $pageId;

    function __construct($pageId)
    {
        $this->pageId = $pageId;
    }


} 