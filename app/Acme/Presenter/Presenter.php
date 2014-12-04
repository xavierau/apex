<?php namespace Acme\Presenter;

/**
* 
*/
abstract class Presenter
{
	
	protected $resource;
	
	function __construct( $resource)
	{
		$this->resource = $resource;
	}

	public function __get($property)
	{
		if (method_exists($this, $property)) {
			return $this->{$property}();
		}

		return $this->resource->{$property};
	}
}
