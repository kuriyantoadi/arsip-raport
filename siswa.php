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
  include('koneksi.php');
  $nisn = $_GET['nisn'];
  $data = mysqli_query($koneksi, "select * from tb_siswa where nisn='$nisn' ");
  while ($d = mysqli_fetch_array($data)) {

  $jns_array = array(
    'raport1' => 'Raport Asli Semester 1 ',
    'raport2' => 'Raport Asli Semester 2',
    'raport3' => 'Raport Asli Semester 3',
    'raport4' => 'Raport Asli Semester 4',
    'raport5' => 'Raport Asli Semester 5',
    'scan_raport1' => 'Raport Scan Semester 1 ',
    'scan_raport2' => 'Raport Scan Semester 2',
    'scan_raport3' => 'Raport Scan Semester 3',
    'scan_raport4' => 'Raport Scan Semester 4',
    'scan_raport5' => 'Raport Scan Semester 5',
    'skl' => 'SKL',
    'ijazah' => 'Ijazah',
    'ijazah_lgsr' => 'Ijazah Legalisir',
    'skhun' => 'SKHUN',
    'photo' => 'Photo Siswa'
  );

  $raport_db = array(
    'raport1' => 'raport_sem1',
    'raport2' => 'raport_sem2',
    'raport3' => 'raport_sem3',
    'raport4' => 'raport_sem4',
    'raport5' => 'raport_sem5',
    'scan_raport1' => 'raport_scan_sem1',
    'scan_raport2' => 'raport_scan_sem2',
    'scan_raport3' => 'raport_scan_sem3',
    'scan_raport4' => 'raport_scan_sem4',
    'scan_raport5' => 'raport_scan_sem5',
    'skl' => 'skl',
    'ijazah' => 'Ijazah',
    'leg_ijazah' => 'leg_ijazah',
    'skhun' => 'skhun',
    'photo' => 'photo'
  );

  function r_kosong(){
    echo "<center><button type='button' class='btn btn-sm ' name='button'>File Tidak Tersedia</button>";
  }
  function r_ada(){
    echo "<center><button type='button' class='btn btn-success btn-sm ' name='button'>File Tersedia</button>";
  }

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
      <center>Daftar Raport</center>
    </h3>

    <table class="table table-bordered">
      <tr>
        <th><center>Nama File</th>
        <th><center>Kondisi Raport Asli</th>
        <th><center>Kondisi Raport Scan</th>
        <th><center>Opsi Raport Asli</th>
        <th><center>Opsi Raport Scan</th>
      </tr>
      <tr>
        <td>Rapor Semester 1</td>
        <td>
          <?php
          if (empty($d['raport_sem1'])) {
            r_kosong();
         }else{
           r_ada();
          } ?>
        </td>
        <td>
          <?php if (empty($d['raport_scan_sem1'])) {
            r_kosong();
           }else{
             r_ada();
           } ?>
        </td>
        <td>
          <center><a type="button" href="raport/raport_sem1/<?= $d['raport_sem1'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?= $d['id_siswa']; ?>&jns_file=<?= $jns_array['scan_raport1'] ?>&nama_file=<?= $raport_db['scan_raport1'] ?>">View</a>
          <a type="button" href="raport/<?= $raport_db['scan_raport1'] ?>/<?= $d['raport_scan_sem1'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 2</td>
        <td>
          <?php
        if (empty($d['raport_sem2'])) {
          r_kosong();
       }else{
         r_ada();
         } ?>
       </td>
       <td>
         <?php
         if (empty($d['raport_scan_sem2'])) {
           r_kosong();
        }else{
          r_ada();
          } ?>
       </td>
        <td>
          <center>
            <a type="button" href="raport/raport_sem2/<?= $d['raport_sem2'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?= $d['id_siswa']; ?>&jns_file=<?php echo $jns_array['scan_raport2'] ?>&nama_file=<?= $raport_db['scan_raport2'] ?>">View</a>
          <a type="button" href="raport/<?= $raport_db['scan_raport2'] ?>/<?= $d['raport_scan_sem2'] ?>"
            class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 3</td>
        <td>
          <?php
        if (empty($d['raport_sem3'])) {
          r_kosong();
       }else{
         r_ada();
         }
         ?>
       </td>
       <td>
         <?php
         if (empty($d['raport_scan_sem3'])) {
           r_kosong();
        }else{
          r_ada();
          } ?>
       </td>
        <td>
          <center><a type="button" href="raport/<?= $raport_db['raport3'] ?>/<?= $d['raport_sem3'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?= $jns_array['scan_raport3'] ?>&nama_file=<?= $raport_db['scan_raport3'] ?>">View</a>
          <a type="button" href="raport/<?= $raport_db['scan_raport3'] ?>/<?= $d['raport_scan_sem3'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 4</td>
        <td>
          <?php
          if (empty($d['raport_sem4'])) {
            r_kosong();
         }else{
           r_ada();
           } ?>
        </td>
        <td>
          <?php
          if (empty($d['raport_scan_sem4'])) {
            r_kosong();
         }else{
           r_ada();
           } ?>
        </td>
        <td>
          <center><a type="button" href="raport/<?= $raport_db['raport4'] ?>/<?= $d['raport_sem4'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?= $jns_array['scan_raport4'] ?>&nama_file=<?= $raport_db['scan_raport4'] ?>">View</a>
          <a type="button" href="raport/<?= $raport_db['scan_raport4'] ?>/<?= $d['raport_scan_sem4'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
      <tr>
        <td>Rapor Semester 5</td>
        <td>
          <?php
          if (empty($d['raport_sem5'])) {
            r_kosong();
         }else{
           echo $d['raport_sem5'];
           } ?>
        </td>
        <td>
          <?php
          if (empty($d['raport_scan_sem5'])) {
            r_kosong();
         }else{
           r_ada();
           } ?>
        </td>
        <td>
          <center><a type="button" href="raport/<?= $raport_db['raport5'] ?>/<?= $d['raport_sem5'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
        <td>
          <center><a type="button" class="btn btn-info btn-sm" name="button"
            href="raport_tampil.php?id_siswa=<?php echo $d['id_siswa']; ?>&jns_file=<?= $jns_array['scan_raport5'] ?>&nama_file=<?= $raport_db['scan_raport5'] ?>">View</a>
          <a type="button" href="raport/<?= $raport_db['scan_raport5'] ?>/<?= $d['raport_scan_sem5'] ?>" class="btn btn-success btn-sm" name="button">Download</a>
        </td>
      </tr>
    </table>

    <h3 style="margin-top:  50px;margin-bottom: 20px">
      <center>Daftar Arsip Siswa</center>
    </h3>

    <table class="table table-bordered">
      <tr>
        <th><center>Nama File</th>
        <th><center>Kondisi File</th>
        <th><center>Opsi</th>
      </tr>

      <tr>
        <td>SKL</td>
        <td>
          <?php
          if (empty($d['skl'])) {
            r_kosong();
         }else{
           r_ada();
           } ?>
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
            r_kosong();
         }else{
           r_ada();
           } ?>
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
            r_kosong();
         }else{
           r_ada();
           } ?>
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
            r_kosong();
         }else{
           r_ada();
           } ?>
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
            r_kosong();
         }else{
           r_ada();
           } ?>
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
