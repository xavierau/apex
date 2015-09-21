<?php

	use Acme\Models\Message;

	class MessagesController extends \BaseController {

	protected $message;
		public $viewPrefix;
		public $routePrefix;


	function __construct(Message $message)
	{
		$this->message = $message;
		$this->viewPrefix = "system.messages";
		$this->routePrefix = "admin.messages";

		View::share("viewPrefix", $this->viewPrefix);
		View::share("routePrefix", $this->routePrefix);
	}


	/**
	 * Display a listing of the resource.
	 * GET /messages
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$messages = $this->message->select(DB::raw('
			cast(content as char(100)) as content,
			cast(status as char(25)) as status,
			cast(id as char(25)) as id,
			cast(name as char(255)) as name
			'))->orderBy('created_at',"desc")->get();
		return View::make($this->viewPrefix.".index")->with(compact('messages'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /messages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /messages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Send a message from front end and store in the DB
	 * POST /messages
	 *
	 * @return Response
	 */
	public function sendMessage()
	{
		//
		$message = new Message();
		$message->name = Input::get('name');
		$message->content = Input::get('message');
		$message->email = Input::get('email');
		$message->tel = Input::get('tel');
		$message->status = "NEW";
		$message->type = "Inbox";
		if(Input::get("contactme"))
		{
			$message->newsletter = Input::get("contactme");
		}else{
			$message->newsletter = 0;
		}
		$message->save();

		$data = Input::all();

		$data['enquiry'] = Input::get("message");

		Mail::send('emails.contact', $data, function($message)
		{
			$message->to('xavier.au@anacreation.com', 'Apex')->subject('Website Enquiry!');
		});

		return Response::json(['response'=>"done",'contactme'=>Input::get('contactme')]);
	}

	/**
	 * Display the specified resource.
	 * GET /messages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$message = $this->message->findOrFail($id);
		$message->status ="READ";
		$message->save();

		return View::make($this->viewPrefix.".show")->withMessage($message);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /messages/{id}/edit
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
	 * PUT /messages/{id}
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
	 * DELETE /messages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}