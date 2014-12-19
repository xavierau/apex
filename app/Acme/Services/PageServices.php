<?php namespace Acme\Services;

use Acme\Models\Page;
use Acme\Models\PageMetaData;
use Acme\Repositories\Interfaces\PagesInterface;
use Acme\Validation\PagesValidator;
use Acme\Services\Ordering\OrderArrangementServices;
use Illuminate\Support\Facades\Cache;
use Language;
use PageContent;

/**
* 
*/
class PageServices
{
	
	public $pageOperator;
    private $pageContentOperator;
	public $validator;
	public $message;
	public $ordering;

    function __construct(PagesInterface $Page, PagesValidator $validator, PageContent $pageContent)
	{
		$this->pageOperator = $Page;
		$this->validator = $validator;
		$this->ordering = new OrderArrangementServices($this->pageOperator->getTable());
        $this->pageContentOperator = $pageContent;
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
			$newPage = $this->pageOperator->addPage($data);

            // Create the page content
            $this->pageContentOperator->addNewContent($newPage, $data);

			$this->message = "A new Page added!";


            Cache::flush();

			return true;
		}
		return false;
	}

	public function getAllPages()
    {
		return $this->pageOperator->getAllPages();
	}

    public function getAllActiveSinglePages()
    {
        return $this->pageOperator->getAllActiveSinglePages();
    }

	public function getAllPagesWhereLangIdIs($lang_id)
	{
		return $this->pageOperator->getAllPagesWhereLangIdIs($lang_id);
	}

	public function getPage($id)
	{
        // Get the page url and order etc
        $data['page'] = $this->pageOperator->getPage($id);

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
        $page = $this->pageOperator->getPage($id);

		$criteria['col'] = "parent_id";
		$criteria['logic'] = "=";
		$criteria['criteria'] = $page->parent_id;

        // Delete the page and reorder the list
		$this->ordering->deleteAnItem($page->order, $criteria);

        // Delete the page content
		$this->pageContentOperator->deleteContent($page);
		$this->message = $this->pageOperator->deletePage($id)." has been deleted!";
        Cache::flush();
	}

	public function updatePage($id, $inputs)
	{
		$page = $this->pageOperator->getPage($id);

		if ($this->validator->isUpdateValid($inputs, $id))
        {
            $page->url = $inputs['url'];
            $page->save();

            $allLanguagesId = Language::lists('id');
            $languages = Language::all();
            foreach($languages as $language)
            {
                foreach($page->content as $result) {
                    if ($language->id == $result->lang_id) {
                        $this->updatePageContent($inputs, $language->id, $result, $page);
                        unset($allLanguagesId[array_search($language->id, $allLanguagesId)]);
                    }
                }
            }
            if(count($allLanguagesId)>0)
            {
                foreach($allLanguagesId as $key=>$language_id)
                {
                    $result = new PageContent();

                    $this->updatePageContent($inputs, $language_id, $result, $page);
                }
            }

            $this->message = $page->url ." has been update!";
            Cache::flush();
            return true;
		}
		return false;
	}

    public function showAllPages()
    {
        $pages = $this->pageOperator->getAllPages();
        return $pages;
    }

    public function showEditPage($id)
    {
        $page = $this->pageOperator->getPage($id);
        $diff = Language::count()-count($page->content);
        if($diff>0)
        {
            for($i = 0; $i<$diff;$i++)
            {
                $page->content->push("");

            }
        }
        return $page;
    }

    /**
     * @param $inputs
     * @param $language
     * @param $result
     * @return array
     */
    protected function updatePageContent($inputs, $language_id, PageContent $result, $page)
    {
        foreach ($inputs['title'] as $lang_id => $title) {
            if ($lang_id == $language_id) {
                $result->title = $title;
            }
        }

        foreach ($inputs['content'] as $lang_id => $content) {
            if ($lang_id == $language_id) {
                $result->content = $content;
            }
        }

        foreach ($inputs['status'] as $lang_id => $status) {
            if ($lang_id == $language_id) {
                $result->status = $status;
            }
        }
        $result->content_type = "single";
        $result->page_id = $page->id;
        $result->lang_id = $language_id;
        $result->save();

//        return [$lang_id, $title, $content, $status];
        return true;
    }
}