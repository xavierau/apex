<?php namespace Acme\Repositories;

use Acme\Repositories\Interfaces\PagesInterface;
use Acme\Models\Page;

/**
* 
*/
class EloquentPages implements PagesInterface
{
	protected $table = "pages";
	
//	public function addPage($data)
//	{
//		$page = Page::create($data);
//        return $page;
//	}
//
//	public function deletePage($identificaton_resources)
//	{
//		$Page = Page::findOrFail($identificaton_resources);
//		$name = $Page->url;
//		$Page->delete();
//		return $name;
//	}
//
//	public function updatePage($identificaton_resources, $data)
//	{
//		$Page = Page::findOrFail($identificaton_resources);
//		$Page->update($data);
//		return true;
//	}
//
//	public function getAllPages()
//    {
//        return Page::all();
//	}
//
//	public function getPage($identificaton_resources)
//	{
//		return Page::findOrFail($identificaton_resources);
//	}
//
//	public function getAllPagesWhereLangIdIs($data)
//	{
//		return Page::all();
//	}
//
//	public function countWhere($col, $logic, $criteria)
//	{
//		return Page::where($col, $logic, $criteria)->count();
//	}
//
//	public function getTable()
//	{
//		return $this->table;
//	}
	public function addPage($data)
	{
		return Page::create($data);
	}

	public function deletePage($id)
	{
		$page = Page::findOrFail($id);
		$name = $page->url;
		$page->delete();
		return $name;
	}

	public function updatePage($identificaton_resources, $data)
	{
		$page = Page::findOrFail($identificaton_resources);
		$page->update($data);
		return true;
	}

	public function getAllPages()
	{
		return Page::with(['content'=>function($query){
			$query->whereContent_type('single');
		}, 'metadata'])->get();
	}

	public function getAllActiveSinglePages()
	{
		return Page::whereActive(1)->with(['content'=>function($query){
			$query->whereContent_type('single');
		},'metadata'])->get();
	}

	public function getPage($identificaton_resources, $activeLangId=null)
	{
		if($activeLangId){
			return Page::with(['content'=>function($query)use($activeLangId){
				$query->whereIn('lang_id', $activeLangId)->orderBy('identifier');
			}, 'metadata'])->findOrFail($identificaton_resources);
		}
		return Page::with(['content'=>function($query)use($activeLangId){
			$query->orderBy('identifier');
		}, 'metadata'])->findOrFail($identificaton_resources);

	}

	public function getPageWithSingleContent($identificaton_resources)
	{
		return Page::with(['content'=>function($query){
			$query->whereContent_type('single');
		}, 'metadata'])->findOrFail($identificaton_resources);
	}

	public function getAllPagesWhereLangIdIs($data)
	{
		return	Page::with(array('content'=> function($query)
				{
					$query->whereLang_id($data);
				}))->get();
	}

	public function getTable()
	{
		return $this->table;
	}

	public function countWhere($col, $logic, $criteria)
	{
		return Page::where($col, $logic, $criteria)->count();
	}
}