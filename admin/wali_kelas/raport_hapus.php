<?php
include('../../koneksi.php');
$id_siswa = $_GET['id_siswa'];
$nama_file = $_GET['nama_file'];
$jns_file = $_GET['jns_file'];

$data = mysqli_query($koneksi, "select * from tb_siswa where id_siswa='$id_siswa' ");
while ($d = mysqli_fetch_array($data)) {

// hapus file
unlink("../../raport/$nama_file/$d[$nama_file]");


// hapus database
mysqli_query($koneksi, "UPDATE tb_siswa SET
             $nama_file=''
             where id_siswa='$id_siswa'
             ");

//setelah selesai dihapus
header("location:raport_tampil.php?id_siswa=$id_siswa&jns_file=$jns_file&nama_file=$nama_file");

}
 ?>
