<?php namespace Acme\Repositories;

use Acme\Repositories\Interfaces\ProductsInterface;
use Product;

/**
* 
*/
class EloquentProducts implements ProductsInterface
{
	
	public function addProduct($data)
	{
		Product::create($data);
	}

	public function deleteProduct($identificaton_resources)
	{
		$product = Product::findOrFail($identificaton_resources);
		$name = $product->name;
		$product->delete();
		return $name;
	}

	public function updateProduct($identificaton_resources, $data)
	{
		$product = Product::findOrFail($identificaton_resources);
		$product->update($data);
		return $name = $product->name;
	}

	public function getAllProducts()
	{
		return Product::orderBy('name','asc')->paginate(30);
		// return Product::orderBy('name', 'asc')->get();
	}
	
	public function getProduct($identificaton_resources)
	{
		return Product::findOrFail($identificaton_resources);
	}
}