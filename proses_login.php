<?php
$kode_user_input = $_POST['kode_user'];
$username_input = $_POST['username'];
$password_input = $_POST['password'];

// Data yang valid
$valid_kode_user = "2323";
$valid_username = "admin";
$valid_password = "RCTadmin1234";

if ($kode_user_input === $valid_kode_user && $username_input === $valid_username && $password_input === $valid_password) {
    // Redirect ke halaman utama jika berhasil login
    header("Location: halaman_utama.php");
    exit();
} else {
    // Redirect kembali ke login dengan pesan error
    $error = "Kode user, username, atau password salah!";
    header("Location: login.php?error=" . urlencode($error));
    exit();
}
