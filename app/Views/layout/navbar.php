<aside class="w-64 bg-white border-r min-h-screen shadow-md flex flex-col">
    <div class="p-6 border-b">
        <h1 class="text-2xl font-bold text-[#1E5631] tracking-wide">MAN 1 KOTA</h1>
        <p class="text-sm text-gray-500">Surat Izin Siswa</p>
    </div>

    <nav class="flex-1 p-4 space-y-2 text-gray-700 text-sm">
        <a href="/izin" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-[#A4DE02] hover:text-white <?= url_is('izin') ? 'bg-[#A4DE02] text-white' : '' ?>">
            <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
        </a>
        <a href="/history" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-[#A4DE02] hover:text-white <?= url_is('history') ? 'bg-[#A4DE02] text-white' : '' ?>">
            <i data-lucide="clipboard-list" class="w-5 h-5"></i> History Izin
        </a>
        <a href="/pelanggaran" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-[#A4DE02] hover:text-white <?= url_is('pelanggaran') ? 'bg-[#A4DE02] text-white' : '' ?>">
            <i data-lucide="shield-alert" class="w-5 h-5"></i> Pelanggaran
        </a>
        <a href="/siswa" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-[#A4DE02] hover:text-white <?= url_is('siswa') ? 'bg-[#A4DE02] text-white' : '' ?>">
            <i data-lucide="users" class="w-5 h-5"></i> Data Siswa
        </a>
        <a href="/logout" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-red-500 hover:text-white">
            <i data-lucide="log-out" class="w-5 h-5"></i> Logout
        </a>
    </nav>
</aside>
