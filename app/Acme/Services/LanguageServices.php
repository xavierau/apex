<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 7:30 PM
 */

namespace Acme\Services;


use Language;

class LanguageServices {

    protected $language;

    function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function showIndexPage()
    {
        return $this->language->all();
    }


} 