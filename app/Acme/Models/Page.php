<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 18/11/14
 * Time: 2:38 PM
 */

namespace Acme\Models;

use PageContent;

class Page extends \Eloquent {
    protected $fillable = [
        'url', 'order', 'parent_id'
    ];

    public function title()
    {
        return $this->hasMany('PageContent');
    }
}