<?php

use Simpleblog\Validation\SessionValidator;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {

	private $validator;

	function __construct(SessionValidator $validator) {
	
		$this->validator = $validator;
			
	}

	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		try {

			$input = Input::only('username', 'password');

			$this->validator->validate($input);

			if( Auth::attempt($input)) {
				
				return Redirect::to('admin');
			}
			
			return Redirect::back()->withInput()->withErrors(['Couldn\'t find a User with that Username/Password']);

		} catch (FormValidationException $e) {
		
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		
		}
			
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy() {

		Auth::logout();
		
		return Redirect::to('/');

	}


}
