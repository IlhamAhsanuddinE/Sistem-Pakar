<?php
require_once("vendor/autoload.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$date = time();


include_once('db/db_conn.php');
$penyakit = $_POST['penyakit'];
$idUser = $_POST['iduser'];
$lastId = $_POST['lastId'];


$gabungan = $penyakit.$idUser.$lastId;
$kodelaporan = md5($gabungan);

//query data penyakit
$dataP = mysqli_query($conn, "SELECT * FROM tbl_penyakit WHERE name = '".$penyakit."'");
$dataPenyakit = mysqli_fetch_array($dataP);

//dapatkan data gejala
$dataG = mysqli_query($conn, "SELECT NAME FROM tbl_gejala WHERE id_gejala IN(SELECT id_gejala FROM `tbl_aturan` WHERE id_penyakit = '".$dataPenyakit['id_penyakit']."')");
while($g=mysqli_fetch_array($dataG)){
    $dataGejala[] = $g;
}

foreach($dataGejala as $g){
    $dataGJ[]=$g['NAME'];
}

$gabungGJ = implode('<br> - ',$dataGJ);




//query data user
$dataU = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '".$idUser."'");
$dataUser = mysqli_fetch_array($dataU);

//melakukan cek tanggal lahir untuk menentukan umur
if(empty($dataUser['tanggal_lahir'])){
    $umur = "";
}else{
    $tanggal_lahir = $dataUser['tanggal_lahir'];
    $tanggal = new DateTime($tanggal_lahir);

    $today = new DateTime('today');

    $umur = $today->diff($tanggal)->y;
}


// var_dump($dataPenyakit); 
// var_dump($dataUser);
// die();

$html = '    <div style="margin: auto ;max-width:600px" >
<h2 style="text-align: center ;" >LAPORAN HASIL DIAGNOSA</h2>
<p style="text-align:center ;" >SISTEM PAKAR DIAGNOSA PENYAKIT BEBEK</p>
<hr>
<p>'.date("d-m-Y").'</p>
<div style="margin: 15px 0;" >
    <h3>Identitas peternak</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>'.$dataUser['username'].'</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>'.$umur.'</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>'.$dataUser['jenis_kelamin'].'</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>'.$dataUser[''].'</td>
        </tr>
    </table>

    <h3 style="margin-bottom: 0;">Gejala yang dialami :</h3>
    - '.$gabungGJ.'
    

    <h4>Hewan ternak di diagnosa mengalami penyakit '.$dataPenyakit['name'].'</h4>

    <hr>

    <h3 style="margin-bottom: 0;">Solusi :</h3>
    <p style="margin: 0;">'.$dataPenyakit['solusi'].'</p>

    <h3 style="margin-bottom: 0;">Langkah Pencegahan :</h3>
    <p style="margin: 0;">'.$dataPenyakit['langkah_pencegahan'].'</p>

</div>
</div>

<p style="font-size:8px;position:absolute;bottom:10px;left:10px" >Kode Laporan : KD-LP/'.$kodelaporan.'</p>
';

$dompdf->loadHtml($html);
// (Opsional) Mengatur ukuran kertas dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Menjadikan HTML sebagai PDF
$dompdf->render();
ob_end_clean();
// Output akan menghasilkan PDF (1 = download dan 0 = preview)
$dompdf->stream('hasilDiagnosa-'.$date.'.pdf', array('Attachment'=>0));

?>