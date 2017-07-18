<?php
require_once 'core/init.php';

if (Input::exists()) {

	if (Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
				'First Name' => array(
					'required' => true,
					'max' => 40
					),
				'last_name' => array(
					'name' => 'Last Name',
					'required' => true,
					'max' => 40
					),
				'email' => array(
					'name' => 'Email',
					'required' => true,
					'max' => 30,
					'unique' => 'users'
					),
				'password' => array(
					'name' => 'Password',
					'required' => true,
					'min' => 8
					),
				'c_psw' => array(
					'required' => true,
					'matches' => 'password'
					)
			));

		if ($validation->passed()) {

			//register user
			Session::flash('success', 'You have registered successfully. Please check your email inbox for the activation email. Please also check your Junk email folder just in case the activation email was sent there instead of your inbox.');

		}

		else {

			//output errors
			foreach($validation->errors() as $error) {

				echo $error, '<br>';

			}

		}

	}
