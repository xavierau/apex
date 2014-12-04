<?php

use Acme\Services\Media\MediaServices;

class MediasController extends \BaseController {

	protected $media;
	
	function __construct(MediaServices $media)
	{
		$this->media = $media;
	}

	/**
	 * Display a listing of the resource.
	 * GET /medias
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$medias = $this->media->getAllMedias();

		return View::make('system.medias.index')->withMedias($medias);


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /medias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /medias
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /medias/{id}
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
	 * GET /medias/{id}/edit
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
	 * PUT /medias/{id}
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
	 * DELETE /medias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}