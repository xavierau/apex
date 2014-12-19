<?php namespace Acme\Composers\front;

use Cache;
use Config;
use Session;

/**
* 
*/
class BaseFrontEndComposer
{
    protected $key;

    function __construct()
	{
        $this->key = 'langId';
		if (!Session::has($this->key)) {
			Session::put($this->key,Cache::get('setting_default_language'));
		}
    }
}