<?php

namespace App\Controllers;
use App\Models\SuratIzinModel;

class SuratIzin extends BaseController
{
    public function index()
    {
        if (session()->get('role') !== 'piket') {
            return redirect()->to('/dashboard');
        }

        return view('izin/form');
    }

    public function simpan()
    {
        $model = new SuratIzinModel();

        $model->save([
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'alasan' => $this->request->getPost('alasan'),
        ]);

        return redirect()->to('/izin')->with('success', 'Surat izin berhasil disimpan.');
    }
}
