<?php namespace Acme\Validation;

use Acme\Validation\Validator;

/**
* 
*/
class ProductsValidator extends Validator
{	

	public function __construct()
	{
		$this->setRules();
	}

	public function setRules($id=null)
	{
		$this->rules =  [
			"name" => "required",
			"description" => "required",
			"price" => "numeric|required",
		];
		
	}
}