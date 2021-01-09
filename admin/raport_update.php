<?php
session_start();
if ($_SESSION['status']!="admin") {
    header("location:../login.php?pesan=belum_login");
}

include '../koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama_file = $_POST['nama_file'];
$angkatan = $_POST['angkatan'];
$kode_kelas = $_POST['kode_kelas'];
$jns_file = $_POST['jns_file'];

// pdf_raport
if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array('pdf');
    $pdf_raport_up = "pdf_raport";
    $pdf_raport = $_FILES['pdf_raport']['name'];
    $x = explode('.', $pdf_raport);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['pdf_raport']['size'];
    $file_tmp = $_FILES['pdf_raport']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1500000) {
            // move_uploaded_file($file_tmp, '../../raport/'.$nama_file./'-'.$nisn.'.pdf');
            move_uploaded_file($file_tmp, "../raport/$nama_file/$angkatan-$nama_file-$kode_kelas-$nisn.pdf");
        } else {
            echo 'pdf_raport';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File SKHUN tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}


mysqli_query($koneksi, "UPDATE tb_siswa SET
             $nama_file='$angkatan-$nama_file-$kode_kelas-$nisn.pdf'
             where nisn='$nisn'
             ");


header("location:raport_tampil.php?id_siswa=$id_siswa&jns_file=$jns_file&nama_file=$nama_file");
