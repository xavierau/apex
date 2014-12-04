<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 18/11/14
 * Time: 10:33 AM
 */

namespace Acme\Validation;


class NewsValidator extends Validator {

    public function __construct()
    {
        $this->setRules();
    }

    public function setRules($id=null)
    {
        $this->rules =  [
            "title" => "required",
            "url" => "required",
            "order" => "numeric|required",
            "parent_id" => "numeric|required",
        ];

    }
} 