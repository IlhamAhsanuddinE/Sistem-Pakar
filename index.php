<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="../styles/custom.css"> <!-- Custom CSS file for additional styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
          .hero.min-h-screen {
            position: relative;
          }

          .hero.min-h-screen::after {
              content: "";
              background: #000;
              opacity: 10%;
              position: absolute;
              width: 100%;
              height: 100%;
          }

          .hero-content {
            position: relative;
            z-index: 10;
          }
        </style>
</head>

<body>
  <div class="hero-overlay bg-opacity-0">
  <div class="h-screen bg-cover bg-no-repeat" style="background-image: url('../assets/bebek.jpg')">
    <div class="z-10 navbar bg-base-transparent text-black absolute">
        <div class="flex-1 ml-5">
            <img src="/Puskeswan Jiwan/assets/logo-madiun.png" width="36" height="36">
            <a class="btn btn-ghost normal-case text-xl" href="../index.php">Puskeswan Jiwan</a>
        </div>
        <div class="flex-none mr-5">
        <div class="navbar">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 text-white shadow bg-black rounded-box ">
                    <li class="hover:text-[#F16A70]" ><a href="view/diagnosis.php" class="">Diagnosa</a></li>
                <li><a href="view/riwayat.php" class="hover:text-[#F16A70]">Riwayat</a></li>
                <li class="bordered "><a href="index.php"><button>Beranda</button></a></li>
                    </ul>
                    </div>
            </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal p-0">
                    <li  ><a href="view/diagnosis.php" class="hover:text-[#F16A70]">Diagnosa</a></li>
                <li class="hover:text-[#F16A70]"><a href="view/riwayat.php" >Riwayat</a></li>
                <li class="bordered hover:text-[#F16A70] "><a href="index.php">Beranda</a></li>
                    
                    </ul>
                </div>
        </div>
            
            <!-- <ul class="menu menu-horizontal p-0">
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 py-1 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        </div>
                    </label>
                    <!-- <ul tabindex="0" class="mt-3 p-2 shadow text-white menu menu-compact dropdown-content bg-black rounded-box w-52">
                        <?php

                        // if (isset($_SESSION['username'])) {
                        ?>
                        <li>
                        <a href="view/profile.php" class="justify-between">
                            Profil
                        </a>
                        </li>
                          <li><a href="action/logout.php" >Keluar</a></li>
                        <?php // } else { ?>
                          <li><a href="view/login.php" >Masuk</a></li>
                        <?php // } ?>
                    </ul> -->
                <!-- </div> -->
            <!-- </ul> -->
        </div>
    </div>

  <!-- Konten 1 -->
  <section class="heroBwa mt-0">
    <div class="hero min-h-screen" style="background-image: url('assets/vaksin.jpg');">
      <div class="container mx-auto p-24">
        <div class="hero-content flex justify-start text-neutral-content">
          <div class="max-w-md text-left decoration-gray-300">
            <h1 class="mb-5 text-5xl text-white font-bold">
              Selamat Datang
              <?php if(isset($_SESSION['status'])): ?>
                <span class="text-red-500 "><?php echo " " . $_SESSION['username']; ?></span>
              <?php endif; ?>
            </h1>
            <p class="mb-5 text-white">Puskeswan Jiwan Diagnosis adalah sebuah website yang menyediakan layanan diagnosa gratis mengenai penyakit pada hewan bebek. Diagnosa dilakukan menggunakan teknologi sistem pakar dan disesuaikan dengan standar dokter. Anda dapat memulai diagnosa dengan memasukkan gejala yang dialami oleh hewan bebek.</p>
            <a href="view/diagnosis.php"><button class="btn bg-red-500 text-[#EBE9E9] border-hidden">Mulai Diagnosa</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Konten 2 -->
  <section id="alur" class="mt-0">
  <div id="konten2" class="bg-white text-center p-6 md:p-20">
    <h2 class="font-bold text-center text-3xl mb-5">Alur Kerja Sistem Pakar Diagnosa</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="card text-center p-5 bg-transparant rounded-lg shadow-lg">
        <h5 class="card-title font-bold text-center text-emerald-500">Login</h5>
        <i class="fas fa-sign-in-alt fa-3x mb-3 text-emerald-500"></i>
        <p class="card-text">Pengguna harus melakukan login sebelum melangkah ke tahap selanjutnya, dan jika belum memiliki akun akan diarahkan ke menu registrasi.</p>
      </div>
      <div class="card text-center p-5 bg-transparant rounded-lg shadow-lg">
        <h5 class="card-title font-bold text-center mb-5 text-emerald-500">Test Gejala Ternak</h5>
        <i class="fas fa-stethoscope fa-3x mb-3 text-emerald-500"></i>
        <p class="card-text">Dalam tahap ini pengguna akan diberikan beberapa pertanyaan terkait dengan gejala yang dialami.</p>
      </div>
      <div class="card text-center p-5 bg-transparant rounded-lg shadow-lg">
        <h5 class="card-title font-bold text-center mb-5 text-emerald-500">Hasil dan Solusi</h5>
        <i class="fas fa-notes-medical fa-3x mb-3 text-emerald-500"></i>
        <p class="card-text">Tahap ini merupakan tahap akhir dimana setelah melaksanakan test gejala pengguna akan diberikan hasil test berupa nama penyakit dan solusinya.</p>
      </div>
    </div>
  </div>
</section>

  
  <footer class="py-8 bg-gray-900 text-gray-200 mt-0">
    <div class="container mx-auto sm:px-4">
      <div class="flex flex-wrap py-4">
        <div class="md:w-2/5 pr-4 pl-4 pt-8 md:pt-0">
          <h4 class="mb-4">Tentang Kami</h4>
          <p>Website sistem pakar diagnosa penyakit hewan bebek ini dibangun untuk meningkatkan efisiensi dan aksesibilitas diagnosa...</p>
        </div>
        <div class="md:w-1/3 pr-4 pl-4 pt-8 md:pt-0">
          <h4 class="mb-4">Kontak Kami</h4>
          <p>Pusat Kesehatan Hewan Desa Teguhan Kecamatan Jiwan.<br>Kode Pos 120836<br><br><i class="fa fa-phone"></i> +62 822-976</p>
        </div>
      </div>
    </div>
  </footer>
              </div>
</body>
</html>
