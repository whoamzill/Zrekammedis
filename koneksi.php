<?php
// Aktifkan pesan error (penting saat debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "rct";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
