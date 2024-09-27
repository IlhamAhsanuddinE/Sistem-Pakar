<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$servername = "localhost"; // nama server database
$username = "root"; // username database
$password = ""; // password database
$dbname = "sistem_pakar"; // nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil jumlah data dari masing-masing tabel
$sql_penyakit = "SELECT COUNT(*) AS count FROM tbl_penyakit";
$result_penyakit = $conn->query($sql_penyakit);
$count_penyakit = $result_penyakit->fetch_assoc()['count'];

$sql_gejala = "SELECT COUNT(*) AS count FROM tbl_gejala";
$result_gejala = $conn->query($sql_gejala);
$count_gejala = $result_gejala->fetch_assoc()['count'];

//$sql_laporan = "SELECT COUNT(*) AS count FROM tbl_laporan";
//$result_laporan = $conn->query($sql_laporan);
//$count_laporan = $result_laporan->fetch_assoc()['count'];

$sql_aturan = "SELECT COUNT(*) AS count FROM tbl_aturan";
$result_aturan = $conn->query($sql_aturan);
$count_aturan = $result_aturan->fetch_assoc()['count'];

// Tutup koneksi
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  <!-- Custom Styles -->
  <style>
    .nav-item.active {
      background-color: rgba(0, 0, 0, 0.18); /* Transparansi background item aktif */
    }

    .card {
      display: flex;
      flex-direction: column; /* Mengubah arah item ke vertikal */
      align-items: right; /* Pusatkan secara vertikal */
      justify-content: center;
      height: 100%;
      border-radius: 10px; /* Membuat sudut yang lebih halus */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan halus */
      transition: all 0.3s ease;
      text-align: right;
    }

    .card:hover {
      transform: translateY(-5px); /* Efek hover untuk sedikit naik */
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih jelas saat hover */
    }

    .card-body {
      padding: 1.5rem;
      display: flex; /* Gunakan flexbox */
      align-items: flex-start; /* Vertikal tengah */
      justify-content: space-between; /* Ruang di antara teks dan ikon */
    }

    .card-body i {
      font-size: 2rem; /* Ukuran ikon yang besar */
      margin-left: 1rem; /* Jarak antara teks dan ikon */
    }

    .card-link {
      text-decoration: none;
      color: inherit;
    }

    .text-primary {
      color: blue;
    }

    /* Custom text classes */
    .custom-text-small {
      font-size: 0.8rem;
    }

    .custom-text-large {
      font-size: 2rem;
    }

    .custom-font-roboto {
      font-family: 'Roboto', sans-serif;
    }

    .custom-font-slab {
      font-family: 'Roboto Slab', serif;
    }

    .text-left {
      text-align: left;
    }

    .text-right {
      text-align: right;
    }

    .custom-font-poppins {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
    }

    .icon-pink {
      color: #E91E63;
    }

    .icon-blue {
      color: #2196F3;
    }

    .icon-green {
      color: #4CAF50;
    }

    .icon-orange {
      color: #FF9800;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-200">
  <!-- Sidenav -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
        <span class="ms-1 font-weight-bold text-white">Puskeswan Jiwan</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">      
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="penyakit.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Penyakit</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="gejala.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Gejala</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="aturan.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Aturan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="laporan.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Laporan</span>
          </a>
        </li>
        <hr class="horizontal light mt-0 mb-2">
        <li class="nav-item">
          <a class="nav-link text-white" href="../action/logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center"></div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End Sidenav -->

  <!-- Main Content -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <li class="nav-item d-xl-none ps-0 d-flex m-3 align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="#" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Admin</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Card Section -->
    <div class="container-fluid py-4">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <a href="penyakit.php" class="card-link">
            <div class="card">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div class="text-left">
                  <p class="custom-text-small custom-font-slab">Jumlah Penyakit</p>
                  <p class="custom-text-large custom-font-slab h1"><?php echo $count_penyakit; ?></p>
                </div>
                <i class="material-icons icon-pink">coronavirus</i>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <a href="gejala.php" class="card-link">
            <div class="card">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div class="text-left">
                  <p class="custom-text-small custom-font-slab">Jumlah Gejala</p>
                  <p class="custom-text-large custom-font-slab h1"><?php echo $count_gejala; ?></p>
                </div>
                <i class="material-icons icon-blue">medical_services</i>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 3 -->
        <!-- <div class="col-lg-3 col-md-6 mb-4">
          <a href="laporan.php" class="card-link">
            <div class="card">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div class="text-left">
                  <p class="custom-text-small custom-font-slab">Jumlah Laporan</p>
                  <p class="custom-text-large custom-font-slab h1"><?php //echo $count_laporan; ?></p>
                </div>
                <i class="material-icons icon-green">description</i>
              </div>
            </div>
          </a>
        </div> -->
        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <a href="aturan.php" class="card-link">
            <div class="card">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div class="text-left">
                  <p class="custom-text-small custom-font-slab">Jumlah Aturan</p>
                  <p class="custom-text-large custom-font-slab h1"><?php echo $count_aturan; ?></p>
                </div>
                <i class="material-icons icon-orange">settings</i>
              </div>
            </div>
          </a>
        </div>     
      </div>
      <p class="custom-text-large fw-bold custom-font-mono text-left">Sistem Pakar Diagnosa Penyakit Bebek.</p>
    </div>
    <!-- End Card Section -->
  </main>
  <!-- End Main Content -->

  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>
</html>
