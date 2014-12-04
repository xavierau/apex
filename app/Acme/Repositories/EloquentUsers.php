<?php namespace Acme\Repositories;

use Acme\Repositories\Interfaces\UsersInterface;
use User;

/**
* 
*/
class EloquentUsers implements UsersInterface
{
	
	public function addUser($data)
	{
		User::create($data);
	}

	public function deleteUser($identificaton_resources)
	{
		$user = User::findOrFail($identificaton_resources);
		$name = $user->firstname." ".$user->lastname;
		$user->delete();
		return $name;
	}

	public function updateUser($identificaton_resources, $data)
	{
		$user = User::findOrFail($identificaton_resources);
		$user->update($data);
		return $name = $user->firstname." ".$user->lastname;
	}

	public function getAllUsers()
	{
		return User::orderBy('firstname','asc')->paginate(30);
		// return User::orderBy('firstname', 'asc')->get();
	}
	
	public function getUser($identificaton_resources)
	{
		return User::findOrFail($identificaton_resources);
	}
}