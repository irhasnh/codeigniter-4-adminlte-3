<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
		]);

		$this->forge->addKey('id',true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
