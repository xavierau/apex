<?php namespace Acme\Services;

use Acme\Repositories\Interfaces\ProductsInterface;
use Acme\Validation\ProductsValidator;
use Cache;
/**
* 
*/
class ProductServices
{
	
	public $product;
	public $validator;
	public $message;
	public $cacheTime = 60;
	
	function __construct(ProductsInterface $product, ProductsValidator $validator)
	{
		$this->product = $product;
		$this->validator = $validator;
	}

	public function addProduct($data)
	{
		if($this->validator->isCreateValid($data))
		{
			$this->product->addProduct($data);
			$this->message = "A new Product added!";
			return true;
		}
		return false;
	}

	public function getAllProducts()
	{
		return $this->product->getAllProducts();			
	}

	public function getProduct($id)
	{
		
		return $this->product->getProduct($id);
			
	}

	public function deleteProduct($id)
	{	
		$product = $this->product->deleteProduct($id);
		$this->message = $product." has been deleted!";			
	}

	public function updateProduct($id, $inputs)
	{	
		if ($this->validator->isUpdateValid($inputs, $id)) {
			$product = $this->product->updateProduct($id, $inputs);
			$this->message = $product." has been update!";			
			return true;
		}
		return false;
	}
	
}