<?php

class Login 
{
	public static function isLoggedIn() 
	{

		if(isset($_COOKIE['mWid'])) 
		{

			if(DB::query('SELECT uid FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['mWid'])))) 
			{

				$uid = DB::query('SELECT uid FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['mWid'])))[0]['uid'];

				if(isset($_COOKIE['mWid_'])) 
				{

					return $uid;

				}

				else 
				{

					$cstrong = true;

					$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));

					DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :uid)', array(':token' => sha1($token), ':uid' => $uid));

					DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token' => sha1($_COOKIE['mWid'])));

				}

			}

		}

		return false;


		if(isLoggedIn())
		{

			header('Location: timeline/index.php');

		}

		else 
		{

			header('Location: index.php');

		}

	}
}






