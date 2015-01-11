<?php

class Post extends \Eloquent {

	protected $fillable = ['title', 'slug', 'content'];

	public static function createPost($input) {

		$post = array(
			'title' 	=> $input['title'],
			'slug' 		=> str_replace(" ", "-", strtolower($input['title'])),
			'content' 	=> $input['content']
		);

		static::create($post);

	}

}