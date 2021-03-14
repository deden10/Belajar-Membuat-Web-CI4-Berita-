<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '70',
			],
			'no_telp'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '15',
			],
			'address'       => [
					'type'           => 'TEXT'
			],
			'username'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '15',
			],
			'password'       => [
					'type'           => 'TEXT'
			],
		]);
		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
