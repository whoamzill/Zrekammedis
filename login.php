<?php
// Tampilkan pesan error dari URL (jika ada)
$error = isset($_GET['error']) ? "Login gagal! Data tidak cocok." : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login RCT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-container">
    <h2>Login RCT</h2>
    <form method="POST" action="proses_login.php">
        <label>Kode User</label>
        <input type="text" name="kd_user" required><br>

        <label>Username</label>
        <input type="text" name="username" required><br>

        <label>Password</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
        <?php if ($error): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
    </form>
</div>
</body>
</html>
