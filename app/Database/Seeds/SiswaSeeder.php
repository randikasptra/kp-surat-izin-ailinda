<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'Ahmad Fauzi',
                'kelas'   => 'XII IPA 1',
                'jurusan' => 'IPA'
            ],
            [
                'nama'    => 'Dina Lestari',
                'kelas'   => 'XI IPS 2',
                'jurusan' => 'IPS'
            ],
            [
                'nama'    => 'Budi Santoso',
                'kelas'   => 'X TKJ 1',
                'jurusan' => 'TKJ'
            ],
            [
                'nama'    => 'Siti Rahmawati',
                'kelas'   => 'XI IPA 3',
                'jurusan' => 'IPA'
            ],
            [
                'nama'    => 'Rizki Maulana',
                'kelas'   => 'XII IPS 1',
                'jurusan' => 'IPS'
            ],
            [
                'nama'    => 'Nina Kartika',
                'kelas'   => 'XI TKJ 2',
                'jurusan' => 'TKJ'
            ],
            [
                'nama'    => 'Agus Wijaya',
                'kelas'   => 'X IPA 2',
                'jurusan' => 'IPA'
            ],
            [
                'nama'    => 'Putri Aisyah',
                'kelas'   => 'X IPS 1',
                'jurusan' => 'IPS'
            ],
            [
                'nama'    => 'Doni Prasetyo',
                'kelas'   => 'X TKJ 3',
                'jurusan' => 'TKJ'
            ],
            [
                'nama'    => 'Lina Sari',
                'kelas'   => 'XII IPA 2',
                'jurusan' => 'IPA'
            ],
        ];

        // Insert semua data
        $this->db->table('siswa')->insertBatch($data);
    }
}
