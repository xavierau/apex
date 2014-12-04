<?php namespace Acme\Services;

use Acme\Repositories\Interfaces\UsersInterface;
use Acme\Validation\UsersValidator;
use Cache;
/**
* 
*/
class UsersServices
{
	
	public $user;
	public $validator;
	public $message;
	public $cacheTime = 60;
	
	function __construct(UsersInterface $user, UsersValidator $validator)
	{
		$this->user = $user;
		$this->validator = $validator;
	}

	public function addUser($data)
	{
		if($this->validator->isCreateValid($data))
		{
			$this->user->addUser($data);
			$this->message = "A new user added!";
			return true;
		}
		return false;
	}

	public function getAllUsers()
	{
		return $this->user->getAllUsers();			
	}

	public function getUser($id)
	{
		
		return $this->user->getUser($id);
			
	}

	public function deleteUser($id)
	{	
		$user = $this->user->deleteUser($id);
		$this->message = $user." has been deleted!";			
	}

	public function updateUser($id, $inputs)
	{	
		if ($this->validator->isUpdateValid($inputs, $id)) {
			$user = $this->user->updateUser($id, $inputs);
			$this->message = $user." has been update!";			
			return true;
		}
		return false;
	}
	
}