<!-- modal mentah -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

 <!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>  -->

<!-- Modal Tambah Siswa -->
<div class="modal fade bd-example-modal-lg" id="TambahSiswa" tabindex="-1" role="dialog" aria-labelledby="TambahSiswa" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
          <center>
            <h3 style="margin-top: 25px;margin-bottom: 20px"><b>Tambah Siswa</b></h3>
          </center>
          <form class="" action="siswa_tambah_update.php" method="post">
            <table class="table table-bordered">
              <tr>
                <td>NISN Siswa :</td>
                <td>
                  <input type="number" class="form-control" name="nisn" value="" required>
                </td>
              </tr>
              <tr>
                <td>
                  Nama Siswa :
                </td>
                <td>
                  <input type="text" class="form-control" name="nama_siswa" value="" required>
                </td>
              </tr>
              <tr>
                <td>
                  Password :
                </td>
                <td>
                  <input type="text" class="form-control" name="password" value="" required>
                </td>
              </tr>
              <tr>
                <td>
                  Kelas :
                </td>
                <td>
                  <select class="form-control" name="kode_kelas" required>
                    <option value=""> Pilih Kelas</option>
                    <?php
                                include('../koneksi.php');
                                $data = mysqli_query($koneksi, "select * from tb_kelas");
                                while ($d1 = mysqli_fetch_array($data)) {
                                ?>
                    <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Angkatan</td>
                <td>
                  <input type="number" name="angkatan" value="" required>
                </td>
              </tr>
            </table>
            <center>
              <input type="submit" class="btn btn-info" name="" value="simpan">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit Siswa -->
<div class="modal fade" id="EditSiswa<?= $d['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
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
          include('../koneksi.php');
          $id_siswa = $d['id_siswa'];
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
              <input type="submit" class="btn btn-info btn" name="" value="simpan">
              <a href="siswa_password.php?id_siswa=<?php echo $id_siswa ?>" class='btn btn-danger'>Ganti Password </a>
            </center>
            </form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Guru -->
<div class="modal fade bd-example-modal-lg" id="TambahGuru" tabindex="-1" role="dialog" aria-labelledby="TambahGuru" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3 style="margin-top:  25px;"><b>Tambah Guru</b></h3>
                    </center>
                    <br>
                    <!-- font ganti jenis -->
                </div>

            </div>
            <?php
            include('../koneksi.php');
            ?>
            <form class="" action="guru_tambah_update.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            Username Guru
                        </td>
                        <td>
                            <input type="text" class="form-control" name="username" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="text" class="form-control" name="password" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Guru
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nama_guru" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Wali Kelas
                        </td>
                        <td>
                            <select class="form-control" name="kode_kelas" required>
                                <option value=""> Pilih Kelas</option>
                                <?php
                                $data = mysqli_query($koneksi, "select * from tb_kelas");
                                while ($d1 = mysqli_fetch_array($data)) {
                                ?>
                                    <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <center>
                    <input type="submit" class="btn btn-info" name="" value="Simpan">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </center>
            </form>

        </div>
      </div>

    </div>
  </div>
</div>



<!-- Modal Tambah Kelas -->
<div class="modal fade bd-example-modal-lg" id="TambahKelas" tabindex="-1" role="dialog" aria-labelledby="TambahKelas" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3 style="margin-top:  25px;"><b>Tambah Kelas</b></h3>
                    </center>
                    <br>
                    <!-- font ganti jenis -->
                </div>
            </div>
            <form class="" action="kelas_tambah_update.php" method="post">

                <table class="table table-bordered">
                    <tr>
                        <td>
                            Kode Kelas
                        </td>
                        <td>
                            <input type="text" class="form-control" name="kode_kelas" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Kelas
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nama_kelas" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tingkat
                        </td>
                        <td>
                            <select class="form-control" name="tingkat" required>
                                <option value=""> Pilih Kelas</option>
                                <option value="10"> Tingkat 10</option>
                                <option value="11"> Tingkat 11</option>
                                <option value="12"> Tingkat 12</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <center>
                    <input type="submit" class="btn btn-info btn" name="" value="Simpan">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </center>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
