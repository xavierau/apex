<?php namespace Acme\Validation;

use Acme\Validation\Validator;

/**
* 
*/
class UsersValidator extends Validator
{	

	public function __construct()
	{
		$this->setRules();
	}

	public function setRules($id=null)
	{
		$this->rules =  [
			"username" => "required",
			"firstname" => "required",
			"lastname" => "required",
			"password" => "required_with:password_confirmation|confirmed",
		];
		if (!$id==null) {
			$this->rules[] =["email" => "required|email|unique:users,email,".$id];
		}else{
			$this->rules[] = ["email" => "required|email|unique:users,email"];
		}
		
	}
}