<!DOCTYPE html>
<html>

<head>
    <title>Login Surat Izin</title>
</head>

<body>
    <h2>Login Sistem Surat Izin</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form method="POST" action="/auth/login">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>