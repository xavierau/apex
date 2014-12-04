<?php namespace Acme;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class BackendServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			'Acme\Repositories\Interfaces\UsersInterface', 
			'Acme\Repositories\EloquentUsers'
		);

		$this->app->bind(
			'Acme\Repositories\Interfaces\ProductsInterface', 
			'Acme\Repositories\EloquentProducts'
		);

		$this->app->bind(
			'Acme\Repositories\Interfaces\MediasInterface', 
			'Acme\Repositories\EloquentMedias'
		);

		$this->app->bind(
			'Acme\Repositories\Interfaces\PagesInterface', 
			'Acme\Repositories\EloquentPages'
		);

        $this->app->bind(
            'Acme\Repositories\Interfaces\NewsInterface',
            'Acme\Repositories\EloquentNews'
        );



	}
}