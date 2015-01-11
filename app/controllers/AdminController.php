<?php

use Simpleblog\Validation\BlogPostValidator;
use Laracasts\Validation\FormValidationException;

class AdminController extends \BaseController {

	private $post;

	private $validator;

	function __construct(Post $post, BlogPostValidator $validator) {
	
		$this->post = $post;
		$this->validator = $validator;
			
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		return View::make('admin.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createPost() {

		return View::make('admin.create');
	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storePost() {

		try {

			$input = Input::only('title', 'content');

			$this->validator->validate($input);

			$this->post->createPost($input);

			Flash::success('Blog Posted!');

			return Redirect::to('admin');

		} catch (FormValidationException $e) {
		
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		
		}

		return Redirect::to('admin');

	}


}
