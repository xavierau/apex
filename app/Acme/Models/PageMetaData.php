<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 15/12/14
 * Time: 6:51 PM
 */

namespace Acme\Models;


class PageMetaData extends \Eloquent {

    protected $table = "page_metadata";

    public function page()
    {
        return $this->belongsTo('Page');
    }
} 