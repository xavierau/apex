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
        try {
            $credentials = [
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ];

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
            return Redirect::route('admin.dashboard');

        } catch (Exception $e) {
            return Redirect::back()->withInput()->withErrors($e->getMessage());
        }
	}

    public function getLogout()
    {
        Sentry::logout();
        return Redirect::route("login");
    }

}