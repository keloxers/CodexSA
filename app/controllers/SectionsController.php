<?php

class SectionsController extends BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($section)
	{


						return View::make("sections." . $section);


	}




}
