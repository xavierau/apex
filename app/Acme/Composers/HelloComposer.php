<?php namespace Acme\Composers;

use Acme\Services\ProductServices;
/**
* 
*/
class HelloComposer
{
	protected $product;

	function __construct(ProductServices $product)
	{
		$this->product = $product;
	}

	public function compose($view)
	{
		// $view->with('products', $this->product->getAllProducts());
	}
}