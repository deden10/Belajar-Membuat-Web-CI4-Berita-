<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
				$this->forge->addField([
			'post_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'category_id'       => [
					'type'           => 'INT',
			],
			'content'       => [
					'type'           => 'TEXT',
			],
			'date'       => [
					'type'           => 'DATE'
			],
		]);
		$this->forge->addKey('post_id', TRUE);
		$this->forge->createTable('posts');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
