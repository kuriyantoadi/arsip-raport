<?php include('header.php') ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
        <h3 style="margin-top:  25px;"><b>Edit Siswa</b></h3>
      </center>
      <br>
      <!-- font ganti jenis -->
    </div>

  </div>

  <?php
  include('../../koneksi.php');
  $id_siswa = $_GET['id_siswa'];
  $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa, tb_kelas WHERE tb_siswa.id_siswa='$id_siswa' AND tb_siswa.kode_kelas=tb_kelas.kode_kelas ");

  while ($d = mysqli_fetch_array($data)) {

  ?>

    <form class="" action="siswa_update.php" method="post">

      <table class="table table-bordered">

        <tr>
          <td>NISN Siswa</td>
          <td>
            <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa'] ?>">
            <input type="text" class="form-control" name="nisn" value="<?php echo $d['nisn'] ?>" required>
          </td>
        </tr>
        <tr>
          <td>Nama Siswa</td>
          <td>
            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $d['nama_siswa'] ?>" required>
          </td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>
            <select class="form-control" name="kode_kelas" required>
              <option value="<?php echo $d['kode_kelas'] ?>"> <?php echo $d['nama_kelas'] ?> Pilihan Awal</option>
              <?php
              $data1 = mysqli_query($koneksi, "select * from tb_kelas");
              while ($d1 = mysqli_fetch_array($data1)) {
              ?>
                <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
      </table>


    <?php } ?>
    <center>
      <input type="submit" class="btn btn-info btn-sm" name="" value="simpan">
      <a href="siswa_reset.php?id_siswa=<?php echo $id_siswa ?>" class='btn btn-danger btn-sm'>Ganti Password </a>
    </center>
    </form>

</div>


</body>

</html>
