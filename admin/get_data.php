<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$servername = "http://localhost/phpmyadmin/index.php?route=/database/structure&db=sistem_pakar"; // nama server database
$username = "bow"; // username database
$password = "12345678"; // password database
$dbname = "sistem_pakar"; // nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil jumlah data dari masing-masing tabel
$sql_penyakit = "SELECT COUNT(*) AS count FROM penyakit";
$result_penyakit = $conn->query($sql_penyakit);
$count_penyakit = $result_penyakit->fetch_assoc()['count'];

$sql_gejala = "SELECT COUNT(*) AS count FROM gejala";
$result_gejala = $conn->query($sql_gejala);
$count_gejala = $result_gejala->fetch_assoc()['count'];

$sql_laporan = "SELECT COUNT(*) AS count FROM laporan";
$result_laporan = $conn->query($sql_laporan);
$count_laporan = $result_laporan->fetch_assoc()['count'];

$sql_aturan = "SELECT COUNT(*) AS count FROM aturan";
$result_aturan = $conn->query($sql_aturan);
$count_aturan = $result_aturan->fetch_assoc()['count'];

// Tutup koneksi
$conn->close();
?>
