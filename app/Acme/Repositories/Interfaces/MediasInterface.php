<?php namespace Acme\Repositories\Interfaces;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface MediasInterface
{
	public function addMedia($data);
	public function deleteMedia($identificaton_resources);
	public function updateMedia($identificaton_resources, $data);
	public function getAllMedias();
	public function getMedia($identificaton_resources);
	
} // END interface UsersInterface