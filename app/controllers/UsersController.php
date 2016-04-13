<?php

use Acme\Services\UsersServices;

class UsersController extends \BaseController {

	protected $user;
	
	function __construct()
	{
		$this->user = new User();

		View::share("path", "system.users");
		View::share("URL", route('admin.users.index'));
		View::share("routePrefix", route('admin.users.index'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// dd(Session::get('errors'));
		if (Request::ajax()) {
			return $this->user->getUser(Input::get("id"));
		}

		$users = $this->user->getAllUsers();
		return View::make('system.users.index',compact("users"));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('system.users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$inputs = Input::all();
		if($this->user->addUser($inputs))
		{
			return Redirect::route("home")->withMessage($this->user->message);
		}
		return Redirect::back()->withInput()->withErrors($this->user->validator->errors);		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
//		$user = $this->user->getUser($id);
		$user = User::find($id);
		return View::make('system.users.edit', compact("user"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$inputs = Input::all();
		if($this->user->updateUser($id, $inputs))
		{
			return Redirect::route("home")->withMessage($this->user->message);
		}
		return Redirect::back()->withInput()->withErrors($this->user->validator->errors);		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		// dd('right place with id '.$id);
		$result = $this->user->deleteUser($id);
		return Redirect::route("users.index")->withMessage($this->user->message);
	}


}
