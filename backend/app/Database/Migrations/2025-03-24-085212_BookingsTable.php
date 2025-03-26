<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BookingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
                'user_id' => ['type' => 'INT', 'unsigned' => true, 'null' => false],
                'event_id' => ['type' => 'INT', 'unsigned' => true, 'null' => false],
                'ticket_count' => ['type' => 'INT', 'null' => false],
                'status' => ['type' => 'ENUM', 'constraint' => ['pending', 'paid', 'canceled'], 'default' => 'pending'],
                'created_at'    => ['type' => 'DATETIME', 'null' => true]
            ]
        );
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('event_id', 'events', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('bookings');

    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
