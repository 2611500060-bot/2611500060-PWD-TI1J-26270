<?php
// D.1 Membuat koneksi PHP dengan MySQL

$host = "localhost";
$username = "root";
$password = "";
$database = "db_pwd_2611500060";

// Membuat koneksi menggunakan MySQLi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

echo "Koneksi database berhasil!";
?>