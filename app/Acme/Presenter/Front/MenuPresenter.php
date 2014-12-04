<?php namespace Acme\Presenter\Front;

use Acme\Presenter\Presenter;
use Acme\Services\PageServices;
/**
* 
*/
class MenuPresenter extends Presenter
{
	protected $page;
	
	function __construct(PageServices $page)
	{
		$this->page = $page;
	}
	
	public function testing()
	{
		return "testing is okay!";
	}

	
}