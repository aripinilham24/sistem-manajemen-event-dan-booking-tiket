<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummySeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk tabel users
        $this->db->table('users')->insertBatch([
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'password' => password_hash('password123', PASSWORD_DEFAULT)],
            ['id' => 2, 'name' => 'Alice Smith', 'email' => 'alice@example.com', 'password' => password_hash('password123', PASSWORD_DEFAULT)],
            ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'password' => password_hash('password123', PASSWORD_DEFAULT)],
            ['id' => 4, 'name' => 'Emma Watson', 'email' => 'emma@example.com', 'password' => password_hash('password123', PASSWORD_DEFAULT)],
            ['id' => 5, 'name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'password' => password_hash('password123', PASSWORD_DEFAULT)],
        ]);

        // Seeder untuk tabel events
        $this->db->table('events')->insertBatch([
            ['id' => 1, 'title' => 'Tech Conference', 'date' => '2025-04-10', 'location' => 'Jakarta'],
            ['id' => 2, 'title' => 'Music Festival', 'date' => '2025-05-20', 'location' => 'Bandung'],
            ['id' => 3, 'title' => 'Startup Meetup', 'date' => '2025-06-15', 'location' => 'Surabaya'],
            ['id' => 4, 'title' => 'Webinar AI', 'date' => '2025-07-01', 'location' => 'Online'],
            ['id' => 5, 'title' => 'Coding Bootcamp', 'date' => '2025-08-05', 'location' => 'Yogyakarta'],
        ]);

        // Seeder untuk tabel bookings
        $this->db->table('bookings')->insertBatch([
            ['id' => 1, 'user_id' => 1, 'event_id' => 2, 'status' => 'confirmed'],
            ['id' => 2, 'user_id' => 2, 'event_id' => 1, 'status' => 'pending'],
            ['id' => 3, 'user_id' => 3, 'event_id' => 5, 'status' => 'confirmed'],
            ['id' => 4, 'user_id' => 4, 'event_id' => 3, 'status' => 'cancelled'],
            ['id' => 5, 'user_id' => 5, 'event_id' => 4, 'status' => 'confirmed'],
        ]);

        // Seeder untuk tabel payments (pastikan booking_id dan user_id sesuai)
        $this->db->table('payments')->insertBatch([
            ['id' => 1, 'booking_id' => 1, 'user_id' => 1, 'amount' => 500000, 'payment_status' => 'completed', 'payment_method' => 'bank_transfer'],
            ['id' => 2, 'booking_id' => 2, 'user_id' => 2, 'amount' => 250000, 'payment_status' => 'pending', 'payment_method' => 'e-wallet'],
            ['id' => 3, 'booking_id' => 3, 'user_id' => 3, 'amount' => 300000, 'payment_status' => 'completed', 'payment_method' => 'credit_card'],
            ['id' => 4, 'booking_id' => 4, 'user_id' => 4, 'amount' => 450000, 'payment_status' => 'failed', 'payment_method' => 'debit_card'],
            ['id' => 5, 'booking_id' => 5, 'user_id' => 5, 'amount' => 600000, 'payment_status' => 'completed', 'payment_method' => 'bank_transfer'],
        ]);
    }
}
