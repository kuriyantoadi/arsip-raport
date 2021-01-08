<?php include('header.php') ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
        <h3 style="margin-top:  25px;"><b>Raport Siswa</b></h3>
      </center>
      <br>
      <!-- font ganti jenis -->
    </div>

  </div>

  <?php
  include('../../koneksi.php');
  $id_siswa = $_GET['id_siswa'];
  $data = mysqli_query($koneksi, "select * from tb_siswa where id_siswa='$id_siswa' ");
  while ($d = mysqli_fetch_array($data)) {

  $jns_array = array(
    'raport1' => 'Raport Semester 1',
    'raport2' => 'Raport Semester 2',
    'raport3' => 'Raport Semester 3',
    'raport4' => 'Raport Semester 4',
    'raport5' => 'Raport Semester 5',
    'skl' => 'SKL',
    'ijazah' => 'Ijazah',
    'ijazah_lgsr' => 'Ijazah Legalisir',
    'skhun' => 'SKHUN',
    'photo' => 'Photo Siswa'
  )

  ?>



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

    </table>

    <h3 style="margin-top:  50px;margin-bottom: 20px">
      <center>File Arsip Siswa</center>
    </h3>
    <table class="table table-bordered">
      <tr>
        <th><center>Nama File</th>
        <th><center>Kondisi</th>
        <th><center>View</th>
        <th><center>Download</th>
      </tr>
      <tr>
        <td>Rapor Semester 1</td>
        <td>
          <?php
          if (empty($d['raport_sem1'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['raport_sem1'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['raport1'] ?>&nama_file=raport_sem1">View</a>
        </td>
        <td>
          <center><a type="button" href="../../raport/raport_sem1/<?php echo $d['raport_sem1'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 2</td>
        <td>
          <?php
        if (empty($d['raport_sem2'])) {
          echo "Maaf, Raport Belum Di input";
       }else{
         echo $d['raport_sem2'];
         } ?>
       </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['raport2'] ?>&nama_file=raport_sem2">View</a>
        </td>
        <td>
          <center><a type="button" href="../../raport/raport_sem2/<?php echo $d['raport_sem2'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 3</td>
        <td>
          <?php
        if (empty($d['raport_sem3'])) {
          echo "Maaf, Raport Belum Di input";
       }else{
         echo $d['raport_sem3'];
         }
         ?>
       </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['raport3'] ?>&nama_file=raport_sem3">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 4</td>
        <td>
          <?php
          if (empty($d['raport_sem4'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['raport_sem4'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['raport4'] ?>&nama_file=raport_sem4">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 5</td>
        <td>
          <?php
          if (empty($d['raport_sem5'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['raport_sem5'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['raport5'] ?>&nama_file=raport_sem5">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>SKL</td>
        <td>
          <?php
          if (empty($d['skl'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['skl'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['skl'] ?>&nama_file=skl">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>Ijazah</td>
        <td>
          <?php
          if (empty($d['ijazah'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['ijazah'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['ijazah'] ?>&nama_file=ijazah">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>Ijazah Legalisir</td>
        <td>
          <?php
          if (empty($d['ijazah_legalisir'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['ijazah_legalisir'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['ijazah_lgsr'] ?>&nama_file=ijazah_legalisir">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>SKHUN</td>
        <td>
          <?php
          if (empty($d['skhun'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['skhun'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['skhun'] ?>&nama_file=skhun">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
      <tr>
        <td>Photo Siswa</td>
        <td>
          <?php
          if (empty($d['photo_siswa'])) {
            echo "Maaf, Raport Belum Di input";
         }else{
           echo $d['photo_siswa'];
           } ?>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['photo'] ?>&nama_file=photo_siswa">View</a>
        </td>
        <td>
          <center><button type="button" class="btn btn-success btn-sm" name="button">Download</button>
        </td>
      </tr>
    </table>

  <?php } ?>

  </form>
</div>


</body>

</html>
