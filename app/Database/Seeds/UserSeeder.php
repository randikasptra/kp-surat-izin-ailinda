<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'piket1',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'piket'
            ],
            [
                'username' => 'bp1',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'bp'
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
