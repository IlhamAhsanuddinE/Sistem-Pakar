<?php
include("../db/db_conn.php");
$result = mysqli_query($conn, "SELECT * FROM tbl_penyakit");
$penyakit = [];
while ($p = mysqli_fetch_array($result)) {
    $penyakit[] = $p;
}

session_start();

if (!isset($_SESSION['username'])) {
    header("location: ../view/login.php");
    exit();
}

// Uncomment if you need these queries
// $query = mysqli_query($koneksi, "SELECT count(id) AS jmlalt FROM tb_mhs");
// $view  = mysqli_fetch_array($query);

// $query2 = mysqli_query($koneksi, "SELECT count(id) AS jmlakun FROM user");
// $view2  = mysqli_fetch_array($query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="content-header bg-white shadow-md">
        <div class="container mx-auto px-4 max-w-full">
            <div class="flex flex-wrap mb-2">
                <div class="w-full sm:w-1/2">
                    <h1 class="m-0 text-2xl font-semibold">Dashboard</h1>
                </div>
                <div class="w-full sm:w-1/2">
                    <ol class="flex flex-wrap list-none pt-3 pb-3 mb-4 bg-gray-200 rounded sm:float-right">
                        <li class="inline-block px-2 py-2 text-gray-700"><a href="#">Home</a></li>
                        <li class="inline-block px-2 py-2 text-gray-700 active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container mx-auto px-4 max-w-full">
            <!-- Small boxes (Stat box) -->
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="info-box bg-teal-500 text-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <span class="info-box-icon text-white text-3xl"><i class="fas fa-users"></i></span>
                            <div class="ml-4">
                                <span class="info-box-text">Jumlah Mahasiswa</span>
                                <span class="info-box-number text-2xl"><?php // echo $view['jmlalt']; ?></span>
                                <a href="index.php?page=alternatif" class="small-box-footer text-white">More info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="info-box bg-red-600 text-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <span class="info-box-icon text-white text-3xl"><i class="fas fa-user"></i></span>
                            <div class="ml-4">
                                <span class="info-box-text">Jumlah Akun</span>
                                <span class="info-box-number text-2xl"><?php // echo $view2['jmlakun']; ?></span>
                                <a href="index.php?page=manajemen_akun" class="small-box-footer text-white">More info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl font-semibold mt-6">Sistem Pendukung Keputusan Perekrutan Anggota BEM Universitas PGRI Madiun</h2>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</body>

</html>
