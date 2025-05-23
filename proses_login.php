<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil inputan
    $kd_user = mysqli_real_escape_string($conn, $_POST['kd_user']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Cek di database
    $query = "SELECT * FROM login WHERE kd_user='$kd_user' AND username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Jika ditemukan 1 user, sukses login
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['kd_user'] = $kd_user;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        // Gagal login
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Jika akses langsung ke file
    header("Location: login.php");
    exit();
}
?>
