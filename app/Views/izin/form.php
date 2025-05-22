<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>

<div class="bg-white shadow-md rounded-xl p-8 w-full max-w-2xl mx-auto border-l-4 border-[#1E5631]">
    <h2 class="text-2xl font-bold mb-4 text-[#1E5631]">Form Surat Izin Siswa</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="/izin/simpan" class="space-y-4">
        <div>
            <label class="block text-sm font-medium">Nama Siswa</label>
            <select name="nama_siswa" required class="w-full px-4 py-2 border rounded-lg">
                <option value="">Pilih Nama Siswa</option>
                <?php foreach ($siswa as $s): ?>
                    <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Kelas</label>
            <select name="kelas" required class="w-full px-4 py-2 border rounded-lg">
                <option value="">Pilih Kelas</option>
                <?php
                $kelasUnik = array_unique(array_column($siswa, 'kelas'));
                foreach ($kelasUnik as $k): ?>
                    <option value="<?= $k ?>"><?= $k ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Jurusan</label>
            <select name="jurusan" required class="w-full px-4 py-2 border rounded-lg">
                <option value="">Pilih Jurusan</option>
                <?php
                $jurusanUnik = array_unique(array_column($siswa, 'jurusan'));
                foreach ($jurusanUnik as $j): ?>
                    <option value="<?= $j ?>"><?= $j ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium">Jam Keluar</label>
            <input type="time" name="jam_keluar" required class="w-full px-4 py-2 border rounded-lg">
        </div>
        <div>
            <label class="block text-sm font-medium">Jam Masuk</label>
            <input type="time" name="jam_masuk" required class="w-full px-4 py-2 border rounded-lg">
        </div>
        <div>
            <label class="block text-sm font-medium">Alasan Izin</label>
            <textarea name="alasan" required class="w-full px-4 py-2 border rounded-lg"></textarea>
        </div>

        <button type="submit" class="bg-[#1E5631] hover:bg-[#145128] text-white w-full py-2 rounded-lg font-semibold">
            Simpan dan Cetak
        </button>
    </form>
</div>

<?= $this->endSection() ?>