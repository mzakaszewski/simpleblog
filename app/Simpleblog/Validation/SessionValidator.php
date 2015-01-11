<?php namespace Simpleblog\Validation;

use Laracasts\Validation\FormValidator;

class SessionValidator extends FormValidator {

	protected $rules = [
		
		'username' => 'required',
		'password' => 'required'
		
	];
	
    protected $messages = [
	
        'username.required' => 'Whoops. Please enter a Username!',
		'password.required' => 'Whoops. Please enter a Password!',
		
    ];

}