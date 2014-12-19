<?php


    use Acme\Page\DeleteThePageCommand;
    use Acme\Services\PageServices;

class PagesController extends \BaseController {

    /**
     * @var PageServices
     */
    private $page;
    public $message;

    function __construct(PageServices $page )
    {
        $this->page = $page;
        $this->viewPrefix = "system.pages";
        $this->routePrefix = "admin.pages";

        View::share("viewPrefix", $this->viewPrefix);
        View::share("routePrefix", $this->routePrefix);

        parent::__construct();
    }

    /**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pages = $this->page->showAllPages();


		return View::make($this->viewPrefix.'.index',compact('pages'));
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if (Request::ajax()) {
			return $this->page->countWhere("parent_id", "=", Input::get('parent_id'));
		}

//        $this->page->addPage()
//		$data = $this->page->getDataForForm();
        dd('here');
		return View::make($this->viewPrefix.'.create',compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        if($this->page->addpage(Input::all()))
		{
            return $this->redirectToIndexWithMessage($this->page->message);
        }
        return $this->redirectBackWithInputsAndErrors($this->page->validator->errors);
    }

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
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
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		if (Request::ajax()) {
			return $this->page->countWhere("parent_id", "=", Input::get('parent_id'));
		}
        $page = $this->page->showEditPage($id);
		return View::make($this->viewPrefix.'.edit',compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$inputs = Input::all();
		if($this->page->updatepage($id, $inputs))
		{
            return $this->redirectToIndexWithMessage($this->page->message);
		}
        return $this->redirectBackWithInputsAndErrors($this->page->validator->errors);

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($pageId)
    {
        $this->execute(DeleteThePageCommand::class, ['pageId'=>$pageId]);

        return $this->redirectToIndexWithMessage($this->page->message);

	}


}