<?php

namespace App\Controllers;

use App\Models\SiswaModel;        // <-- Tambahkan ini
use App\Models\SuratIzinModel;    // <-- Dan ini

class SuratIzin extends BaseController
{
    public function index()
    {
        if (session()->get('role') !== 'piket') {
            return redirect()->to('/dashboard');
        }

        // Ambil semua data siswa untuk dropdown
        $siswaModel = new SiswaModel();
        $data['siswa'] = $siswaModel->findAll();

        return view('izin/form', $data);
    }

    public function simpan()
    {
        $siswaModel = new SiswaModel();
        $izinModel  = new SuratIzinModel();

        $siswaId = $this->request->getPost('siswa_id');
        $siswa = $siswaModel->find($siswaId);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        $izinModel->save([
            'nama_siswa'       => $siswa['nama'],
            'kelas'            => $siswa['kelas'],
            'jurusan'          => $siswa['jurusan'],
            'alasan'           => $this->request->getPost('alasan'),
            'jam_keluar'       => $this->request->getPost('jam_keluar'),
            'jam_masuk'        => $this->request->getPost('jam_masuk'),
            'status_kembali'   => 'belum kembali',
            'poin_pelanggaran' => 0,
        ]);

        return redirect()->to('/izin')->with('success', 'Surat izin berhasil disimpan!');
    }
}
