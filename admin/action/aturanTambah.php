<?php

$id_penyakit = $_POST['id_penyakit'];
$id_gejala = $_POST['id_gejala'];

include("../../db/db_conn.php");

$sudahAda = mysqli_query($conn, "SELECT * FROM tbl_aturan WHERE id_penyakit = '".$id_penyakit."' AND id_gejala = '".$id_gejala."'");
$dataAturan = mysqli_fetch_array($sudahAda);

if ($dataAturan) {
    header("location: ../aturanTambah.php?masukan=duplikasi");
    exit;
}

$tambah = mysqli_query($conn, "INSERT INTO tbl_aturan(id_penyakit, id_gejala) VALUES('$id_penyakit','$id_gejala')");

if($tambah){
    header("location: ../aturan.php?masukan=berhasil");
}else{
    header("location: ../aturanTambah.php?masukan=gagal");
    
}

?>