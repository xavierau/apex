<?php namespace Acme\Repositories\Interfaces;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface PagesInterface
{
	public function addPage($data);
	public function deletePage($identificaton_resources);
	public function updatePage($identificaton_resources, $data);
	public function getAllPages();
	public function getPage($identificaton_resources);
	
} // END interface UsersInterface