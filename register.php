<?php
require_once 'classes/DB.php';

if(isset($_POST['register'])) {
	$fn = $_POST['f_n'];
	$ln = $_POST['l_n'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!DB::query('SELECT email FROM users WHERE email = :email', array(':email' => $email))) 
	{

		if(strlen($fn) >= 2 && strlen($fn) <= 32)
		{

			if(strlen($ln) >= 2 && strlen($ln) <= 32)
			{

				if(preg_match('/[a-zA-Z]+/', $fn)) 
				{

					if(preg_match('/[a-zA-Z]+/', $ln))
					{

						if(strlen($password) >= 8 && strlen($password) <= 64)
						{

							if(filter_var($email, FILTER_VALIDATE_EMAIL))
							{
							DB::query('INSERT INTO users VALUES (\'\', :f_n, :l_n, :email, :password)', array(':f_n' => $fn, ':l_n' => $ln, ':email' => $email, ':password'=> password_hash($password, PASSWORD_BCRYPT)));
							echo "Success";
							}

							else
							{
								echo "Invalid email address";
							}
						}

						else
						{
							echo "Password is less than 8 characters";
						}
					}
				}
			}
			else
			{
			echo "Invalid last name";
			}
			
		}

		else
		{
			echo "Invalid first name";
		}

	}

	else 
	{
		echo "Email is already associated with an existing account";
	}

}