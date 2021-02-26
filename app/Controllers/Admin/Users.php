<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Users extends BaseController
{
	private $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function index()
	{
		$data = [
			'users' => $this->userModel->getAllData(),
		];

		return view('admin/users/index',$data);
	}

	public function new()
	{
		return view('admin/users/create');
	}

	public function create()
	{
		$data = [
			'name' => $this->request->getVar('name'), 
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'), 
			'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT), 
		];

		$this->userModel->insertData($data);

		return redirect()->to('/admin/users')->with('success','Data berhasil ditambah');
	}

	public function edit($id)
	{
		$data = [
			'user' => $this->userModel->getFirstData($id),
		];

		return view('admin/users/edit',$data);
	}

	public function update($id)
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

		$this->userModel->updateData($data,$id);

		return redirect()->to('/admin/users')->with('success','Data berhasil diupdate');
	}

	public function delete($id)
	{
		$this->userModel->deleteData($id);
		return redirect()->to('/admin/users')->with('success','Data berhasil dihapus');
	}
}
