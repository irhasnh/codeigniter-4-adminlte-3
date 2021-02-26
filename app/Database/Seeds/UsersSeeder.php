<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$builder = \Config\Database::connect();

		$builder->table('users')->insertBatch([
			[
				'name' => 'Administrator',
				'username' => 'admin',
				'email' => 'admin@example.com',
				'password' => password_hash('password',PASSWORD_DEFAULT),
			],
			[
				'name' => 'Rahmat Hidayatullah',
				'username' => 'rahmat',
				'email' => 'rahmat@example.com',
				'password' => password_hash('password',PASSWORD_DEFAULT),
			],
			[
				'name' => 'Rikka Takanashi',
				'username' => 'rikka',
				'email' => 'rikka@example.com',
				'password' => password_hash('password',PASSWORD_DEFAULT),
			],
			[
				'name' => 'Kaede Honjou',
				'username' => 'kaede',
				'email' => 'kaede@example.com',
				'password' => password_hash('password',PASSWORD_DEFAULT),
			],
		]);
	}
}
