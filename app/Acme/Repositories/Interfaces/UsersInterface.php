<?php namespace Acme\Repositories\Interfaces;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface UsersInterface
{
	public function addUser($data);
	public function deleteUser($identificaton_resources);
	public function updateUser($identificaton_resources, $data);
	public function getAllUsers();
	public function getUser($identificaton_resources);
	
} // END interface UsersInterface