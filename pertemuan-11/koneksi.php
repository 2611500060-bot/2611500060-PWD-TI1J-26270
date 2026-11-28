<?php
// D.1 Membuat koneksi PHP dengan MySQL

$host = "localhost";
$username = "root";
$password = "";
$database = "db_pwd_2611500060";

// D.3 Menonaktifkan laporan error bawaan
mysqli_report(MYSQLI_REPORT_OFF);

// Membuat koneksi menggunakan MySQLi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi ke basis data gagal. " . mysqli_connect_error());
}
?>