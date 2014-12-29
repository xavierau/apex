<?php

class PageContentsController extends \BaseController {

	/**
	 * @var PageContent
	 */
	private $pageContent;
	public $message;

	function __construct(PageContent $pageContent )
	{
		$this->pageContent = $pageContent;
		$this->viewPrefix = "system.pageContent";
		$this->routePrefix = "admin.pageContent";

		View::share("viewPrefix", $this->viewPrefix);
		View::share("routePrefix", $this->routePrefix);

		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 * GET /pagecontents
	 *
	 * @return Response
	 */
	public function index()
	{
		//
//		dd(Input::get('page'));
		$contents = $this->pageContent->where('content_type','!=','single')->with('page')->get();
		$temp=[];
		foreach($contents as $content)
		{
			if($content->page->url == Input::get('page'))
			{
				$temp[$content->identifier][] = $content;
			}
		}
		$contents = $temp;
		return View::make($this->viewPrefix.'.index')->withContents($contents);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pagecontents/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pagecontents
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pagecontents/{id}
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
	 * GET /pagecontents/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($identifier)
	{
		//

		$pageContent = $this->pageContent->with('page')->whereIdentifier($identifier)->get();

		$diff = Language::count()-count($pageContent);

		if($diff>0)
		{
			for($i = 0; $i<$diff;$i++)
			{
				$pageContent->push("");
			}
		}
		return View::make($this->viewPrefix.'.edit')->with(compact('pageContent'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pagecontents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($pageId)
	{
		//
		$inputs = Input::all();

		$page = Acme\Models\Page::with(['content'=>function($query)use($inputs){
			$query->whereIdentifier($inputs['identifier']);
		}])->whereId($pageId)->first();

		$pageContent = $page->content;

		$allLanguagesId = Language::whereActive(1)->lists('id');
		$languages = Language::whereActive(1)->all();

		foreach($languages as $language)
		{
			foreach($pageContent as $result) {
				if ($language->id == $result->lang_id) {
					$this->updatePageContent($inputs, $language->id, $result);
					unset($allLanguagesId[array_search($language->id, $allLanguagesId)]);
				}
			}
		}

		if(count($allLanguagesId)>0)
		{
			foreach($allLanguagesId as $key=>$language_id)
			{
				$result = new PageContent();

				$this->updatePageContent($inputs, $language_id, $result, $page);
			}
		}

		$this->message = $page->url ." has been update!";
		Cache::flush();
		return Redirect::route('admin.pages.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pagecontents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function updatePageContent($inputs, $lang_id, $content, $page=null){

		if($page == null)
		{
			$content->content = $inputs['content'][$lang_id];
			$content->status = $inputs['status'][$lang_id];
			$content->title = $inputs['title'][$lang_id];
			$content->save();
		}else{
			$content->page_id = $page->id;
			$content->identifier = $inputs['identifier'];
			$content->lang_id = $lang_id;
			$content->content_type = $page->metadata()->whereMeta_key('page_type')->first()->meta_value;
			$content->content = $inputs['content'][$lang_id];
			$content->title = $inputs['title'][$lang_id];
			$content->status = $inputs['status'][$lang_id];
			$content->save();

		}



	}

}