<?php namespace Acme\Services;

use Acme\Repositories\Interfaces\PagesInterface;
use Acme\Validation\PagesValidator;
use Acme\Services\Ordering\OrderArrangementServices;
use Illuminate\Support\Facades\Cache;
use PageContent;

/**
* 
*/
class PageServices
{
	
	public $Page;
	public $validator;
	public $message;
	public $ordering;
    /**
     * @var PageContent
     */
    private $pageContent;


    function __construct(PagesInterface $Page, PagesValidator $validator, PageContent $pageContent)
	{
		$this->Page = $Page;
		$this->validator = $validator;
		$this->ordering = new OrderArrangementServices($this->Page->getTable());
        $this->pageContent = $pageContent;
    }

	public function addPage($data)
	{
		if($this->validator->isCreateValid($data))
		{
			$criteria['col'] = "parent_id";
			$criteria['logic'] = "=";
			$criteria['criteria'] = $data['parent_id'];

            // Rearrange the order of the list
			$this->ordering->addANewItem($data['order'], $criteria);

            // Create a new page
			$newPage = $this->Page->addPage($data);

            // Create the page content
            $this->pageContent->addNewContent($newPage, $data);

			$this->message = "A new Page added!";


            Cache::flush();

			return true;
		}
		return false;
	}

	public function getAllPages()
	{
		return $this->Page->getAllPages();
	}

	public function getAllPagesWhereLangIdIs($lang_id)
	{
		return $this->Page->getAllPagesWhereLangIdIs($lang_id);
	}

	public function getPage($id)
	{
        // Get the page url and order etc
        $data['page'] = $this->Page->getPage($id);

        // Get the title of the url
        $temp = $data['page']->title;

        // prepare the title array for from to fetch
        foreach($temp as $element){
            $data['title'][$element->lang_id] = $element->title;
        }

		return $data;
	}

	public function deletePage($id)
	{
        $page = $this->Page->getPage($id);

		$criteria['col'] = "parent_id";
		$criteria['logic'] = "=";
		$criteria['criteria'] = $page->parent_id;

        // Delete the page and reorder the list
		$this->ordering->deleteAnItem($page->order, $criteria);

        // Delete the page content
		$this->pageContent->deleteContent($page);
		$this->message = $this->Page->deletePage($id)." has been deleted!";
        Cache::flush();
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
                $this->Page->updatePage($id, $inputs);
                $this->pageContent->updateContent($id, $inputs);
                $this->message = $page->url ." has been update!";
                Cache::flush();
				return true;
			}
			$this->deletePage($id);
			$this->addPage($inputs);
			$this->message = $page->title." has been update!";
            Cache::flush();
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
		foreach ($result['page'] as $element) {
			$data['array'][$element->id] = $element->url;
		};
		return $data;
	}
	
}