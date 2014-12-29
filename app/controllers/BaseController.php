<?php

    use Laracasts\Commander\CommanderTrait;

    class BaseController extends Controller {

    use CommanderTrait;

    function __construct()
    {
        View::share('default_lang', Config::get('app.locale'));
        View::share('languages',  DB::table('languages')->whereActive(1)->get());
        View::share('allLanguages',  DB::table('languages')->get());
    }


    /**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}



    /**
     * @return mixed
     */
    protected function redirectToIndexWithMessage($message)
    {
        return Redirect::route($this->routePrefix . '.index')->withMessage($message);
    }

    /**
     * @return mixed
     */
    protected function redirectBackWithInputsAndErrors($errors)
    {
        return Redirect::back()->withInput()->withErrors($errors);
    }

}
