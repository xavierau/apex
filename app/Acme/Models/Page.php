<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 18/11/14
 * Time: 2:38 PM
 */

namespace Acme\Models;

class Page extends \Eloquent {
    protected $fillable = [
        'title', 'url', 'order', 'parent_id'
    ];
}