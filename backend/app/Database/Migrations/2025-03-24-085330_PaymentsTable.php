<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
            'booking_id' => ['type' => 'INT', 'unsigned' => true, 'null' => false],
            'user_id' => ['type' => 'INT', 'unsigned' => true, 'null' => false],
            'amount' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => false],
            'payment_status' => ['type' => 'ENUM', 'constraint' => ['pending', 'completed', 'failed'], 'default' => 'pending'],
            'payment_method' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => false],
            'transaction_id' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'created_at'    => ['type' => 'DATETIME', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('booking_id', 'bookings', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
