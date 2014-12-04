<?php namespace Acme\Validation;

use Validator as V;
/**
* 
*/
abstract class Validator
{
	public $errors;
	protected $rules = null;
	protected $updateRules = null;

	public function isCreateValid($data, $rules=null)
	{
		if (!$rules) {
			$rules = $this->rules;
		}
		return $this->validation($data, $rules);
	}

	public function isUpdateValid($data, $id=null, $rules=null)
	{
		$this->setRules($id);
		if (!$rules) {
			if (!$this->updateRules) {
				$rules = $this->rules;
			}else{
				$rules = $this->updateRules;
			}
		}
		return $this->validation($data, $rules);
	}

	public function validation($data, $rules)
	{
		
		$validation = V::make($data, $rules);
		if($validation->fails())
		{
			
			$this->errors = $validation->messages();			
			return false;
			
		}
		return true;
	}
}