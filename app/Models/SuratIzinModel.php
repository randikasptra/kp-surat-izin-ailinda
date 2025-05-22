<?php

namespace App\Models;
use CodeIgniter\Model;

class SuratIzinModel extends Model
{
    protected $table = 'surat_izin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_siswa', 'kelas', 'jurusan', 'alasan', 'status_kembali', 'poin_pelanggaran'];
}
