<?php namespace Acme\Repositories;

use Acme\Repositories\Interfaces\MediasInterface;
use Media;

/**
* 
*/
class EloquentMedias implements MediasInterface
{
	
	public function addMedia($data)
	{
		Media::create($data);
	}

	public function deleteMedia($identificaton_resources)
	{
		$Media = Media::findOrFail($identificaton_resources);
		$name = $Media->filename;
		$Media->delete();
		return $name;
	}

	public function updateMedia($identificaton_resources, $data)
	{
		$Media = Media::findOrFail($identificaton_resources);
		$Media->update($data);
		return $name = $Media->filename;
	}

	public function getAllMedias()
	{
		return Media::orderBy('filename','asc')->get();
		// return Media::orderBy('name', 'asc')->get();
	}
	
	public function getMedia($identificaton_resources)
	{
		return Media::findOrFail($identificaton_resources);
	}
}