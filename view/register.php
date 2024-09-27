<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Daftar akun Puskeswan Jiwan</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <style>
    .navbar {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      background-color: #296274;
    }

    .page-header {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-top: 70px; /* Adjust padding to avoid overlap with navbar */
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }

    .login-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-image {
      background: url('../assets/img/login-background.jpg') no-repeat center center;
      background-size: cover;
      width: 50%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      padding: 20px;
    }

    .login-image h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .login-form {
      width: 50%;
    }
    .bg-custom {
    background-color: #296274 !important; /* Custom blue color */
    }
  </style>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar bg-blue navbar-expand-lg border-radius-lg mt-4 py-0 start-0 end-0 mx-0">
          <div class="container-fluid ps-0 pe-0">
            <a class="font-weight-bolder text-center text-white ms-lg-0 ms-3 me-5" href="Puskeswan%20Jiwan.php">
              Puskeswan Jiwan
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2" style="color: black;" aria-current="page" href="../index.php">
                    <i class="fa fa-chart-pie text-black me-1"></i>
                    Halaman utama
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" style="color: black;" href="register.php">
                    <i class="fas fa-key text-black me-1"></i>
                    Daftar
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row login-wrapper">
            <div class="login-image">
              <h2>Selamat datang di Puskeswan Jiwan</h2>              
            </div>
            <div class="col-lg-5 col-md-7 login-form">
            <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Daftar akun</h4>
                  <p class="mb-0">Masukkan data diri anda untuk mendaftar</p>
                </div>
                <div class="alertt"></div>
                <div class="card-body">
                  <form method="post" role="form">
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Username</label> -->
                      <input type="text" class="form-control" id="username" placeholder="Nama pengguna" style="border-color: black;">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Email</label> -->
                      <input type="email" id="email" class="form-control" placeholder="E-mail" style="border-color: black;">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label"></label> -->
                      <select id="jenis_kelamin" class="px-2.5 py-1 rounded" style="border-color: black;">
                        <option value="none">Jenis Kelamin</option>
                        <option value="Lak-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                      </div>
                      <input datepicker type="date" id="tanggal_lahir" class="border  sm:text-sm rounded-lg block w-full pl-10 p-2.5" style="border-color: black;" placeholder="Pilih tanggal lahir">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Alamat</label> -->
                      <input type="text" class="form-control" id="alamat" placeholder="Alamat pengguna" style="border-color: black;">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Password</label> -->
                      <input type="password" class="form-control" id="password" placeholder="Password" style="border-color: black;">
                    </div>
                    <input type="checkbox" class="me-2" onclick="showPass()">Lihat Password
                    <!-- <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div> -->
                    <div class="text-center">
                      <button type="button" id="submit" class="btn btn-lg bg-custom btn-lg w-100 mt-4 mb-0 text-white">Daftar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Sudah punya akun?
                    <a href="login.php" class="text-primary text-gradient font-weight-bold">Masuk</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    //fungsi show password
    function showPass() {
        let show = document.getElementById("password");
        if (show.type === "password") {
            show.type = "text";
        } else {
            show.type = "password";
        }
    }


    $('#submit').click(function(e){
        e.preventDefault();
        let username = $('#username').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let tanggal_lahir = $('#tanggal_lahir').val();
        let jenis_kelamin = $('#jenis_kelamin').val();
        let alamat = $('#alamat').val();

        $.ajax({
            url : '../action/register.php',
            method : 'post',
            data : {
                username : username,
                email : email,
                password : password,
                tanggal_lahir:tanggal_lahir,
                jenis_kelamin:jenis_kelamin,
                alamat:alamat
            },
            success : function(data){
                console.log(data)
                if(data == 'success'){
                    window.location.replace("login.php?status=success");
                } else if(data == 'masukan email'){
                    let alert = `<div class="alert alert-danger" role="alert" > Email tidak boleh kosong
                
                </div>  `;
                    $('.alertt').html(alert)
                }else if(data == 'masukan username'){
                    let alert = `<div class="alert alert-danger" role="alert" > Username tidak boleh kosong
                
                </div>  `;
                    $('.alertt').html(alert)
                }else if(data == 'masukan password'){
                    let alert = `<div class="alert alert-danger" role="alert" > Password tidak boleh kosong
                
                </div>  `;
                    $('.alertt').html(alert)
                }else if(data == 'email sudah terdaftar'){
                    let alert = `<div class="alert alert-danger" role="alert" > Email sudah terdaftar
                
                </div>  `;
                    $('.alertt').html(alert)
                }else if(data == 'masukan tanggal lahir'){
                    let alert = `<div class="alert alert-danger" role="alert" > Tanggal lahir tidak boleh kosong
                
                </div>  `;
                    $('.alertt').html(alert)
                }else if(data == 'masukan jenis kelamin'){
                    let alert = `<div class="alert alert-danger" role="alert" > jenis kelamin tidak boleh kosong
                
                </div>  `;
                    $('.alertt').html(alert)
                } else {
                    let alert = `<div class="alert alert-danger" role="alert" > Gagal register
                
                </div>  `;
                    $('.alertt').html(alert)
                }
            }
        })
    })
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
