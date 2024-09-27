<?php

include("../db/db_conn.php");
$result= mysqli_query($conn, "
SELECT * FROM tbl_riwayat
JOIN user u ON u.user_id = tbl_riwayat.id_user
JOIN tbl_penyakit p ON p.id_penyakit = tbl_riwayat.id_penyakit
");
while($p=mysqli_fetch_array($result)){
    $laporan[]=$p;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Dashboard -- Laporan
  </title>
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <style>
    .nav-item.active{
        background-color: #0000002e;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">Puskeswan Jiwan</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">      

  
      <li class="nav-item">
    <a class="nav-link text-white " href="dashboard.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white " href="penyakit.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Penyakit</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="gejala.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Gejala</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="aturan.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Aturan</span>
    </a>
  </li>

  <li class="nav-item active">
    <a class="nav-link text-white " href="laporan.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Laporan</span>
    </a>
  </li>

  <hr class="horizontal light mt-0 mb-2">

  <li class="nav-item">
    <a class="nav-link text-white " href="../action/logout.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Keluar</span>
    </a>
  </li>


       
        
      </ul>
    </div>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Laporan</li>
        </ol>
  
        
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
  
            
        </div>
        <ul class="navbar-nav  justify-content-end">
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
  <div class="container-fluid py-4">
    
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-center text-capitalize ps-3">Tabel Laporan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0" style="margin-left: 40px ;">
              <table  id="datab_penyakit" class="table mb-0 mt-3">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Laporan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peternak</th>
                    <th class="text-secondary opacity-7">Penyakit</th>
                    <th class="text-secondary opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($laporan as $data){ ?>
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $data['id_riwayat'] ?></p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $data['username'] ?></h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="text-xs font-weight-bold mb-0"><?= $data['name'] ?></p>
                      </td>
                      <td class="align-middle">
                      <label type="button" class="btn btn-primary lihat" data-bs-toggle="modal" data-bs-target="#my-modal-6" id="lihat<?= $data['id_penyakit'] ?>" value="<?= $data['id_penyakit'] ?>">lihat</label>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

    <div class="modal fade" id="my-modal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="overflow: auto;max-height: 500px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Penyakit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label class="my-5" for="">Penyakit</label>
                            </div>
                            <div class="col-6">
                                <label class="my-5" for="" id="npenyakit"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="my-5" for="">Gejala</label>
                            </div>
                            <div class="col-6">
                                <label class="my-5" for="" id="ngejala"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="my-5" for="">Solusi</label>
                            </div>
                            <div class="col-6">
                                <label class="my-5" for="" id="nsolusi"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="my-5" for="">Langkah Pencegahan</label>
                            </div>
                            <div class="col-6">
                                <label class="my-5" for="" id="npencegahan"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="../printpdf.php" method="post" class="mt-5">
                        <input type="text" id="penyakitf" name="penyakit" value="" hidden >
                        <input type="text" id="gejalaf" name="gejala" value="" hidden >
                        <input type="text" id="iduser" name="iduser" value=" <?=$_SESSION['id_user'] ?>" hidden>
                        <button id="cetak" class="btn btn-primary">Cetak Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    $('.lihat').click(function(e){
        // console.log($(e.target).attr('value'));
        let penyakit_id = $(e.target).attr('value')
        $.ajax({
            url:'../action/getRiwayat.php',
            method: 'post',
            data:{penyakit_id:penyakit_id},
            success:function(data){
                data = JSON.parse(data)
                let name = data.penyakit[0].name
                let langkah = data.penyakit[0].langkah_pencegahan
                let solusi = data.penyakit[0].solusi
                $('#npenyakit').html(name)
                $('#npencegahan').html(langkah)
                $('#nsolusi').html(solusi)

                let gejala = data.gejala
                        for(let i = 0; i<gejala.length; i++){
                            let gj =' '+ gejala[i]+',';

                            $('#ngejala').append(gj)
                        }


                let idG = data.idgejala
                $('#penyakitf').attr('value', name)
                $('#gejalaf').attr('value', gejala);
            
               console.log(data)
            }
        })
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  <script>
    $(document).ready(function () {
    $('#datab_penyakit').DataTable();
    });
  </script>
</body>

</html>