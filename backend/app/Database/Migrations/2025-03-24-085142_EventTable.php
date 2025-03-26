<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EventTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'description' => ['type' => 'TEXT', 'null' => false],
            'date' => ['type' => 'DATE', 'null' => false],
            'location' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'price' => ['type' => 'DECIMAL', 'constraint'=>'10,2', 'default'=>0.00],
            'quota' => ['type' => 'INT', 'null'=>false],
            'created_at'    => ['type' => 'DATETIME', 'null' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
