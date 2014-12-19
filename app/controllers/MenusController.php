<?php

class MenusController extends \BaseController {

    function __construct()
    {
        parent::__construct();
        $this->viewPrefix = "system.menus";
        $this->routePrefix = "admin.menus";
        View::share("viewPrefix", $this->viewPrefix);
        View::share("routePrefix", $this->routePrefix);
    }


    /**
	 * Display a listing of the resource.
	 * GET /menus
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make($this->viewPrefix.'.index',compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /menus/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /menus
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /menus/{id}
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
	 * GET /menus/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /menus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /menus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}