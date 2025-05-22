<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratIzinTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'nama_siswa'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'kelas'          => ['type' => 'VARCHAR', 'constraint' => 10],
            'jurusan'        => ['type' => 'VARCHAR', 'constraint' => 50],
            'alasan'         => ['type' => 'TEXT'],
            'jam_keluar'     => ['type' => 'TIME', 'null' => true],
            'jam_masuk'      => ['type' => 'TIME', 'null' => true],
            'status_kembali' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'poin_pelanggaran' => ['type' => 'INT', 'null' => true],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_izin');
    }


    public function down()
    {
        $this->forge->dropTable('surat_izin');
    }
}
