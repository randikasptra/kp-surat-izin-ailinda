<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat datang, <?= session()->get('username'); ?>!</h2>
    <p>Anda login sebagai: <?= session()->get('role'); ?></p>

    <a href="/logout">Logout</a>
</body>

</html>