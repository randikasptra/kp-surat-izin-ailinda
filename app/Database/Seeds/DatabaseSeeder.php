<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder lain
        $this->call('UserSeeder');
        $this->call('SiswaSeeder');
    }
}
