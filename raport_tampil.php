
<?php
include('koneksi.php');
include('header.php');
$id_siswa = $_GET['id_siswa'];
$jns_file = $_GET['jns_file'];
$nama_file = $_GET['nama_file'];
$data = mysqli_query($koneksi, "select * from tb_siswa where id_siswa='$id_siswa' ");
while ($d = mysqli_fetch_array($data)) {
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
        <h3 style="margin-top:  25px;"><b><?php echo $jns_file ?></b></h3>
      </center>
      <br>
      <!-- font ganti jenis -->
    </div>

  </div>




    <form class="" action="raport_update.php" method="post" enctype="multipart/form-data">

      <table class="table table-bordered">
        <tr>
          <td>NISN Siswa</td>
          <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa'] ?>">
          <input type="hidden" name="nisn" value="<?php echo $d['nisn'] ?>">
          <input type="hidden" name="kode_kelas" value="<?php echo $d['kode_kelas'] ?>">
          <td><?php echo $d['nisn'] ?></td>
        </tr>
        <tr>
          <td>Nama Siswa</td>
          <td><?php echo $d['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>Kelas Siswa</td>
          <td><?php echo $d['kode_kelas'] ?></td>
        </tr>
        <tr>
          <td>Jenis File</td>
          <td><?php echo $jns_file ?></td>
        </tr>
        <tr>
          <td>Nama Raport</td>
          <td>
            <?php
            // echo $nama_file;
            if (empty($d[$nama_file])) {
              echo "Maaf, Raport Belum Di input";
             } else {
               echo $d[$nama_file];
             } ?>
          </td>
          </tr>
          <tr>
            <td>Opsi</td>
            <td>
              <?php if (empty($d[$nama_file])) { ?>
                <p class="font-weight-bold">Silahkan anda Upload Raport</p>
                <input type="hidden" name="nama_file" value="<?php echo $nama_file ?>">
                <input type="hidden" name="nisn" value="<?php echo $d['nisn'] ?>">
                <input type="hidden" name="kode_kelas" value="<?php echo $d['kode_kelas'] ?>">
                <input type="hidden" name="jns_file" value="<?php echo $jns_file ?>">
                <input type="hidden" name="angkatan" value="<?php echo $d['angkatan'] ?>">
                <input type="file" name="pdf_raport" accept="application/pdf" class="form-control-file" id="raport" required>
                <input style="margin-bottom: 20px;margin-top: 15px" type="submit" class="btn btn-info btn" name="upload" value="upload">

              <?php } else { ?>
                 <a type="button" class="btn btn-danger btn-sm" href="raport_hapus.php?nama_file=<?php echo $nama_file ?>&id_siswa=<?php echo $id_siswa ?>&jns_file=<?php echo $jns_file ?>"
                   onclick="return confirm('Anda yakin Hapus Raport siswa <?php echo $d['nama_siswa']; ?> ?')">Hapus Raport</a>
                <a href="../raport/<?php echo $nama_file ?>/<?php echo $d[$nama_file] ?>" type="button" class="btn btn-success btn-sm">Download Raport</a>
                <embed style="margin-top: 20px" src="raport/<?php echo $nama_file ?>/<?php echo $d[$nama_file] ?>" type="application/pdf" width="100%" height="500px">

              <?php } ?>
            </td>
          </tr>

      </table>

    <?php } ?>
    <center>
    </center>
    </form>

</div>

</body>

</html>
