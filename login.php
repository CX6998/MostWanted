<?php
require_once 'classes/DB.php';

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(DB::query('SELECT email FROM users WHERE email=:email', array(':email' => $email)))
	{
		if(password_verify($password, DB::query('SELECT password FROM users WHERE email=:email', array(':email'=>$email))[0]['password']))
		{
			header('Location: intelfeed/index.php');

			$cstrong = true;

			$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));

			$uid = DB::query('SELECT uid FROM users WHERE email=:email', array(':email' => $email))[0]['uid'];

			DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :uid)', array(':token' => sha1($token), ':uid' => $uid));

			setcookie("mWid", $token, time() + 60 * 60 * 24 * 31, '/', NULL, NULL, TRUE);

			setcookie("mWid_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

			return $uid;
		}
		else
		{
			echo "Invalid email or password";
		}
	}
	else
	{
		echo "Invalid email or password";
	}
}