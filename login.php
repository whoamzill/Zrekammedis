<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="proses_login.php" method="post">
            <input type="text" name="kode_user" placeholder="kode_user" required>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">LOGIN</button>
        </form>
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>".$_GET['error']."</p>";
        }
        ?>
    </div>
</body>
</html>
