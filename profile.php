<?php 
include('./classes/DB.php');
include('./classes/Login.php');

$username = "";

if(isset($GET['username']))
{
	if(DB::query('')) 
	{
		$username = DB::query('SELECT f_n AND l_n FROM users WHERE f_n=:f_n, l_n=:l_n')
	}
}