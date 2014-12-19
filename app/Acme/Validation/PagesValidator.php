<?php namespace Acme\Validation;


/**
* 
*/
class PagesValidator extends Validator
{

	public function __construct()
	{
		$this->setRules();
	}

	public function setRules($id=null)
	{
		$this->rules =  [
			"title" => "required",
			"url" => "required",
		];
		
	}
}