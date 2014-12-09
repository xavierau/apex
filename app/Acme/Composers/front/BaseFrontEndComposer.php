<?php namespace Acme\Composers\front;

use Config;
use Session;

/**
* 
*/
class BaseFrontEndComposer
{
	
	function __construct()
	{
		$key = Config::get('setting.appName').'.'.'langId';
		if (!Session::has($key)) {
			$lang = Config::get('setting.languages');
			Session::put($key,$lang[Config::get('app.locale')]);
		}
	}
}