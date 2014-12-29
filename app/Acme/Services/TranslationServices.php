<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 20/12/14
 * Time: 6:03 PM
 */

namespace Acme\Services;


use Acme\Models\Translation;
use Acme\Models\TranslationContent;
use Cache;

class TranslationServices {

    public $variables;
    public $content;

    function __construct(Translation $variables,TranslationContent $content)
    {
        $this->variables = $variables;
        $this->content = $content;
    }

    public function showAll()
    {
        return $this->variables->with(['content'=>function($query){
            return $query->whereIn('lang_id',[Cache::get('setting_active_languages')]);
        }])->get();
    }
}