<?php namespace Acme\Services;

use Acme\Repositories\Interfaces\PagesInterface;
use Acme\Validation\PagesValidator;
use Acme\Services\Ordering\OrderArrangementServices;
use Illuminate\Support\Facades\Cache;

/**
* 
*/
class PageServices
{
	
	public $Page;
	public $validator;
	public $message;
	public $ordering;


	function __construct(PagesInterface $Page, PagesValidator $validator)
	{
		$this->Page = $Page;
		$this->validator = $validator;
		$this->ordering = new OrderArrangementServices($this->Page->getTable());
	}

	public function addPage($data)
	{
		if($this->validator->isCreateValid($data))
		{
			$criteria['col'] = "parent_id";
			$criteria['logic'] = "=";
			$criteria['criteria'] = $data['parent_id'];
			$this->ordering->addANewItem($data['order'], $criteria);
			$this->Page->addPage($data);
			$this->message = "A new Page added!";
            if (Cache::has("front_main_menu")){
                Cache::forget("front_main_menu");
            }
			return true;
		}
		return false;
	}

	public function getAllPages()
	{
		return $this->Page->getAllPages();			
	}

	public function getAllPagesWhereLangIdIs($data)
	{
		return $this->Page->getAllPagesWhereLangIdIs($data);
	}

	public function getPage($id)
	{
		
		return $this->Page->getPage($id);
			
	}

	public function deletePage($id)
	{	$page = $this->Page->getPage($id);
		$criteria['col'] = "parent_id";
		$criteria['logic'] = "=";
		$criteria['criteria'] = $page->parent_id;
		$this->ordering->deleteAnItem($page->order, $criteria);
		$this->message = $this->Page->deletePage($id)." has been deleted!";
        if (Cache::has("front_main_menu")){
            Cache::forget("front_main_menu");
        }
	}

	public function updatePage($id, $inputs)
	{	
		$page = $this->Page->getPage($id);
		if ($this->validator->isUpdateValid($inputs, $id)) {
			if ($page->parent_id == $inputs['parent_id']) {
				$array = [
					"col"=> "parent_id",
					"logic"=> "=",
					"criteria"=> $page->parent_id
				];
				$this->ordering->changeOrder($inputs['order'], $page->order, $array);
                $pageTitle = $this->Page->updatePage($id, $inputs);
                $this->message = $pageTitle ." has been update!";
				return true;
			}
			$this->deletePage($id);
			$this->addPage($inputs);
			$this->message = $page->title." has been update!";
            if (Cache::has("front_main_menu")){
                Cache::forget("front_main_menu");
                Cache::put();
            }
			return true;
		}
		return false;
	}

	public function countWhere($col, $logic, $criteria)
	{
		return $this->Page->countWhere($col, $logic, $criteria);
	}

	public function getDataForForm($parent_id=0)
	{	
		$result = $this->getAllPages();
		$data['count'] = $this->Page->countWhere('parent_id','=',$parent_id);
		$data['array'] = [0=>"TOP"];
		foreach ($result as $element) {
			$data['array'][$element->id] = $element->title;
		};
		return $data;
	}
	
}