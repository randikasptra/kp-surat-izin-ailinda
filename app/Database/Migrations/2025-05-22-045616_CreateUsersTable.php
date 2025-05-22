<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
        public function up()
    {

        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'nama_siswa' => ['type' => 'VARCHAR', 'constraint' => 100],
            'kelas' => ['type' => 'VARCHAR', 'constraint' => 10],
            'jurusan' => ['type' => 'VARCHAR', 'constraint' => 50],
            'alasan' => ['type' => 'TEXT'],
            'status_kembali' => ['type' => 'ENUM', 'constraint' => ['belum', 'sudah'], 'default' => 'belum'],
            'poin_pelanggaran' => ['type' => 'INT', 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_izin');
        
    }
    public function down()
    {
        $this->forge->dropTable('surat_izin');
    }



}