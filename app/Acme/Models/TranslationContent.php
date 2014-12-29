<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 20/12/14
 * Time: 6:13 PM
 */

namespace Acme\Models;


class TranslationContent extends \Eloquent {

    protected $table = "translation_contents";

    public function variable()
    {
        return $this->belongsTo('Acme\Models\Translation');
    }

}