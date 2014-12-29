<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 20/12/14
 * Time: 5:26 PM
 */

namespace Acme\Models;


class Translation extends \Eloquent{

    protected $table = 'translation_variables';

    public function content()
    {
        return $this->hasMany('Acme\Models\TranslationContent');
    }



}