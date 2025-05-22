<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Sistem Surat Izin' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="bg-[#E8F5E9] min-h-screen flex">

    <?= $this->include('layout/navbar') ?>

    <main class="flex-1 p-6">
        <?= $this->renderSection('content') ?>
    </main>

    <script>
        lucide.createIcons();
    </script>


</body>

</html>