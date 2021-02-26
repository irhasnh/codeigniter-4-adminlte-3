<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\LoginModel;

class Login extends BaseController
{
	private $loginModel;

	public function __construct()
	{
		$this->loginModel = new LoginModel;
	}

	public function authenticated()
	{
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		return $this->loginModel->doLogin($email,$password);
	}
}
