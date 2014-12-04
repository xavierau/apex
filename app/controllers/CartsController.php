<?php

class CartsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /carts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if (Request::ajax()) {

			
			$id = Input::get("product_id");
			$key = "product_{$id}";
			$data = [
				"qty" => Input::get('qty'),
				"price" => Input::get('price'),
			];
						
			if (Session::has("{$key}")) {

				$item = Session::pull('{$key}');
				// $item->qty += Input::get('qty');
				// Session::put('{$key}', $item);
			}else{
				Session::put("{$key}", $data);
				$result = "not the same";
			}

			// $result = "product_{$id}";
			// $result = Session::get("cart");
			return Session::all();
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /carts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /carts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /carts/{id}
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
	 * GET /carts/{id}/edit
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
	 * PUT /carts/{id}
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
	 * DELETE /carts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}