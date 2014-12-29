<?php namespace Acme\Repositories\Interfaces;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface PagesInterface
{

	public function addPage($data);
	public function deletePage($identificaton_resources);
	public function updatePage($identificaton_resources, $data);
	public function getAllPages();
	public function getPage($identificaton_resources);

    public function getAllPagesWhereLangIdIs($data);

    public function getTable();

    public function countWhere($col, $logic, $criteria);

	public function getAllActiveSinglePages();

	public function getPageWithSingleContent($id);

} // END interface UsersInterface