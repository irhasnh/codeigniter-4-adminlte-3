<?php 

if(!function_exists('db')){
	function db()
	{
		$db = \Config\Database::connect();
		return $db;
	}
}

// example call : user()->name
if(!function_exists('user')){
	function user()
	{
		$user = db()->table('users')->where('id',session('userId'))->get()->getRow();
		return $user;	
	}
}

if(!function_exists('auth')){
	function auth()
	{
		if (session('userId')) {
			return true;
		}	
	}
}

if(!function_exists('guest')){
	function guest()
	{
		if (!session('userId')) {
			return true;
		}	
	}
}

if(!function_exists('countRow')){
	function countRow($table)
	{
		return db()->table($table)->get()->getNumRows();	
	}
}

