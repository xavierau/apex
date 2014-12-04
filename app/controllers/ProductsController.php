<?php

use Acme\Services\ProductServices;

class ProductsController extends \BaseController {
	protected $product;
	protected $viewPrefix, $routePrefix;
	
	function __construct(ProductServices $product)
	{
		$this->product = $product;
		$this->viewPrefix = "system.products";
		$this->routePrefix = "admin.products";

		View::share("viewPrefix", $this->viewPrefix);
		View::share("routePrefix", $this->routePrefix);
	}
	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		//


		$products = $this->product->getAllProducts();
		return View::make($this->viewPrefix.'.index',compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make($this->viewPrefix.'.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$inputs = Input::all();
		if($this->product->addProduct($inputs))
		{
			return Redirect::route($this->routePrefix.".index")->withMessage($this->product->message);
		}
		return Redirect::back()->withInput()->withErrors($this->product->validator->errors);
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
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
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$product = $this->product->getProduct($id);
		return View::make($this->viewPrefix.'.edit',compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$inputs = Input::all();
		if($this->product->updateProduct($id, $inputs))
		{
			return Redirect::route($this->routePrefix.".index")->withMessage($this->product->message);
		}
		return Redirect::back()->withInput->withErrors($this->product->validator->errors);

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$this->product->deleteProduct($id);
		return Redirect::route($this->routePrefix.".index")->withMessage($this->product->message);
	}

}