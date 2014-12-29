<?php

	use Acme\models\Translation;
	use Acme\Services\TranslationServices;

	class TranslationsController extends \BaseController {

		/**
		 * @var Translation
		 */
		public $translation;

		function __construct(TranslationServices $translation )
	{
		$this->translation = $translation;
		$this->viewPrefix = "system.translations";
		$this->routePrefix = "admin.translations";

		View::share("viewPrefix", $this->viewPrefix);
		View::share("routePrefix", $this->routePrefix);

		parent::__construct();

	}

	/**
	 * Display a listing of the resource.
	 * GET /translations
	 *
	 * @return Response
	 */
	public function index()
	{
		$translations = $this->translation->showAll();
		return View::make($this->viewPrefix.'.index')->withTranslations($translations)->withVariables($variables);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /translations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /translations
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /translations/{id}
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
	 * GET /translations/{id}/edit
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
	 * PUT /translations/{id}
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
	 * DELETE /translations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}