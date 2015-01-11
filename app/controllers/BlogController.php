<?php

class BlogController extends \BaseController {

	private $post;

	function __construct(Post $post) {
	
		$this->post = $post;
			
	}

	public function index() {

		$posts = $this->post->get();

		dd($posts);
		return View::make('blog.index');
	}

}
