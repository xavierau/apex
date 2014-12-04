<?php namespace Acme\Repositories\Interfaces;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface ProductsInterface
{
	public function addProduct($data);
	public function deleteProduct($identificaton_resources);
	public function updateProduct($identificaton_resources, $data);
	public function getAllProducts();
	public function getProduct($identificaton_resources);
	
} // END interface UsersInterface