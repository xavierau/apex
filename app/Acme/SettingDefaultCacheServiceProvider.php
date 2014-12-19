<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 1:05 PM
 */

namespace Acme;


use Acme\Models\Setting;
use Cache;
use Illuminate\Support\ServiceProvider;
use Session;

class SettingDefaultCacheServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    public function boot()
    {
        if(!Cache::has('setting_loaded'))
        {
            $settings = Setting::all();

            foreach($settings as $setting)
            {
                Cache::forever("setting_$setting->meta_key", $setting->meta_value);
            }
            Cache::forever("setting_loaded", true);
        }
    }
}
