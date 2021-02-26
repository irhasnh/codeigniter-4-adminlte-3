<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'email','password',
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function doLogin($email,$password)
	{
		$user = $this->where('email',$email)->get()->getRow();

		//user exists
		if ($user) {
			if (password_verify($password,$user->password)) {
				session()->set('userId',$user->id);
				return redirect()->to('admin');
			}else{
				session()->setFlashData('error','Password salah');
				return redirect()->to('login');
			}
		}else{
			session()->setFlashData('error','Email tidak ditemukan');
			return redirect()->to('login');
		}
	}
}
