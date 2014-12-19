<?php

    use Acme\Services\LanguageServices;

    class LanguagesController extends \BaseController {

    protected $language;

        function __construct(LanguageServices $language )
        {
            $this->language = $language;
            $this->viewPrefix = "system.languages";
            $this->routePrefix = "admin.languages";

            View::share("viewPrefix", $this->viewPrefix);
            View::share("routePrefix", $this->routePrefix);

            parent::__construct();
        }


    /**
	 * Display a listing of the resource.
	 * GET /languages
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $languages = $this->language->showIndexPage();

        return View::make('system.languages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /languages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /languages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /languages/{id}
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
	 * GET /languages/{id}/edit
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
	 * PUT /languages/{id}
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
	 * DELETE /languages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}