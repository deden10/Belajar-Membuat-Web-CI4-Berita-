<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'category_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'category_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
		$this->forge->addKey('category_id', TRUE);
		$this->forge->createTable('categories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
