<?php


class RedactorController extends \BaseController {
	
	public function ImageUpload()
	{

			$file = Input::file('file');

			$move = $file->move(public_path().'/assets/upload/images/',$file->getClientOriginalName());

			if ($move) {
				return Response::json(['filelink'=>asset('assets/upload/images/'.$file->getClientOriginalName())]);
			}else{
				return Response::json(['error'=>true]);
			}
		
	}


}