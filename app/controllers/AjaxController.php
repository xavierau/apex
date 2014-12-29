<?php

	use Acme\Models\Setting;

	class AjaxController extends \BaseController {

	public function postLanguageActivation(){
		if(Request::ajax())
		{
			return $this->changeLanguageStatus(Input::get('id'),1);
		}
	}

	public function postLanguageDeactivation(){
		if(Request::ajax())
		{
			return $this->changeLanguageStatus(Input::get('id'),0);
		}
	}

	public function postLanguageSetDefault()
	{
		$languages = Language::all();
		Cache::forget('setting_default_language');
		Cache::forget('languages');
		foreach($languages as $language)
		{
			if($language->default)
			{
				$language->default = null;
				$language->save();
			}
		}
		foreach($languages as $language)
		{
			if($language->id == Input::get('id'))
			{
				$language->default = 1;
				$setting = Setting::whereMeta_key('default_language')->first();
				$setting->meta_value = $language->id;
				$setting->save();
				Cache::forever('setting_default_language', $language->id);
				$language->save();
			}
		}
		return Response::json(['response'=>true]);
	}

	private function changeLanguageStatus($id,$value)
	{
		Cache::forget('languages');
		Cache::forget('setting_active_language_ids');
		$language = Language::findOrFail($id);
		if($language->default == 1 && $value == 0)
		{
			return Response::json(['response'=>"testing"]);
		}
		$language->active = $value;
		$language->save();
		$languages = Language::whereActive(1)->get();
		$temp = [];
		foreach($languages as $language)
		{
			$temp[] = $language->id;
		}

		$setting = Setting::whereMeta_key('default_language')->first();

		return Response::json(['response'=>true, 'data'=>$setting->meta_value]);
	}

}