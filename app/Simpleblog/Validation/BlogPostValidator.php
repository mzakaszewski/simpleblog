<?php namespace Simpleblog\Validation;

use Laracasts\Validation\FormValidator;

class BlogPostValidator extends FormValidator {

	protected $rules = [
		
		'title' => 'required',
		'content' => 'required',
		
	];
	
    protected $messages = [
	
        'title.required' => 'You need a title for your blog!',
		'content.required' => 'Your blog post needs some content!',
		
    ];

}