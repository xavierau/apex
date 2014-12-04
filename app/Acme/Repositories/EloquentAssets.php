<?php

namespace Acme\Repositories;

use Acme\Repositories\Interfaces\AssetsInterface;
use Asset;
/**
* 
*/
class EloquentAssests implements AssetsInterface
{
	public function addAssets($inputs)
	{
		return true;
		// Asset::create($inputs);
	}

	public function showAssets($id)
	{
		Asset::findOrFail($id)
	}

	public function updateAssets($id, $inputs)
	{
		$asset = Asset::findOrFail($id);
		$asset->update($inputs);
	}

	public function deleteAssets($id)
	{
		Asset::delete($id);
	}
}