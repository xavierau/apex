<?php namespace Acme\Services\Media;

/**
*  Services to all medias
*/

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Acme\Repositories\EloquentMedias;

class MediaServices
{
	protected $media;
	
	function __construct(EloquentMedias $media)
	{
		$this->media = $media;
	}

	public function addmedia($data)
	{
		if($this->validator->isCreateValid($data))
		{
			$this->media->addmedia($data);
			$this->message = "A new media added!";
			return true;
		}
		return false;
	}

	public function getAllmedias()
	{
		return $this->media->getAllmedias();			
	}

	public function getmedia($id)
	{
		
		return $this->media->getmedia($id);
			
	}

	public function deletemedia($id)
	{	
		$media = $this->media->deletemedia($id);
		$this->message = $media." has been deleted!";			
	}

	public function updatemedia($id, $inputs)
	{	
		if ($this->validator->isUpdateValid($inputs, $id)) {
			$media = $this->media->updatemedia($id, $inputs);
			$this->message = $media." has been update!";			
			return true;
		}
		return false;
	}
}
