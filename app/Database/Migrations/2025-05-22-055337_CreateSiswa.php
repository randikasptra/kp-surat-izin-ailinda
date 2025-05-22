<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswa extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id'         => ['type' => 'INT', 'auto_increment' => true],
        'nama'       => ['type' => 'VARCHAR', 'constraint' => 100],
        'kelas'      => ['type' => 'VARCHAR', 'constraint' => 10],
        'jurusan'    => ['type' => 'VARCHAR', 'constraint' => 50],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
        'updated_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('siswa');
}


    public function down()
    {
        //
    }
}
