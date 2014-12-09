<?php namespace Acme\Repositories;

use Acme\Repositories\Interfaces\PagesInterface;
use Acme\Models\Page;

/**
* 
*/
class EloquentPages implements PagesInterface
{
	protected $table = "pages";
	
	public function addPage($data)
	{
		Page::create($data);
	}

	public function deletePage($identificaton_resources)
	{
		$Page = Page::findOrFail($identificaton_resources);
		$name = $Page->name;
		$Page->delete();
		return $name;
	}

	public function updatePage($identificaton_resources, $data)
	{
		$Page = Page::findOrFail($identificaton_resources);
		$Page->update($data);
        $name = $Page->title;

		return $name;
	}

	public function getAllPages()
	{
		// return Page::orderBy('name','asc')->paginate(30);
		return Page::orderBy('parent_id', 'asc')->orderBy('order', 'asc')->get();
	}
	
	public function getPage($identificaton_resources)
	{
		return Page::findOrFail($identificaton_resources);
	}

	public function getAllPagesWhereLangIdIs($data)
	{
		return Page::where('lang_id','=',$data)->get();
	}
	public function countWhere($col, $logic, $criteria)
	{
		return Page::where($col, $logic, $criteria)->count();
	}

	public function getTable()
	{
		return $this->table;
	}
}