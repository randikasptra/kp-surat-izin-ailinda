<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Surat Izin MAN 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #E8F5E9; /* Ijo pucat */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md border-t-4 border-[#1E5631]">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-[#1E5631]">SISTEM SURAT IZIN</h1>
            <p class="text-sm text-gray-600">MAN 1 Kota Tasikmalaya</p>
        </div>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 mb-4 rounded">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/auth/login" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#A4DE02] focus:border-[#A4DE02]" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#A4DE02] focus:border-[#A4DE02]" required>
            </div>

            <button type="submit" class="w-full bg-[#1E5631] hover:bg-[#145128] text-white font-semibold py-2 rounded-lg transition">
                Login
            </button>
        </form>

        <p class="mt-4 text-center text-xs text-gray-500">© <?= date('Y') ?> MAN 1 Kota Tasikmalaya</p>
    </div>

</body>
</html>
