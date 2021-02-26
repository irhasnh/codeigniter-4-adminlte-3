<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Admin extends BaseController
{
	private $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function index()
	{
		return view('admin/index');
	}

	public function blank()
	{
		return view('admin/blank');
	}

	public function profile()
	{
		return view('admin/profile');
	}

	public function updateProfile($id)
	{
		if (!empty($this->request->getVar('password'))) {
			$password = password_hash($this->request->getVar('password'),PASSWORD_DEFAULT);
		}else{
			$password = $this->request->getVar('old_password');
		}

		$data = [
			'name' => $this->request->getVar('name'),
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'password' => $password,
		];

		$this->userModel->where('id',$id)->set($data)->update();

		return redirect()->to('/admin/profile')->with('success','Profil berhasil di update');
	}
}
