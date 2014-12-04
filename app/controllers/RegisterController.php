<?php

class RegisterController extends \BaseController {
    function __construct()
    {
        $this->routePrefix="admin.pages";
        $this->viewPrefix="system.pages";

        View::share('routePrefix', $this->routePrefix);
        View::share('viewPrefix', $this->viewPrefix);
    }

    /**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
    public function getLogin()
    {
        return View::make('system.login');
	}

    public function postLogin()
    {
        return Redirect::route('admin.dashboard');
	}

}