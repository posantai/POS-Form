<?php   defined('BASEPATH') or die("No Access Allowed");
if(!isset($_SESSION['id_admin'])) {
    header('location: ../../');
 }

 $id = strip_tags(mysqli_real_escape_string($connection, $_GET['id']));
 
 #identitas
 $identitas = mysqli_query($connection, "SELECT * FROM t_identitas WHERE calon_id = $id") or die($connection ->error);
 $data = mysqli_fetch_array($identitas);

 #jawaban
 $jawaban = mysqli_query($connection, "SELECT * FROM t_pendaftar WHERE calon_id = $id") or die($connection ->error);
 $isi = mysqli_fetch_array($jawaban);



?>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
               <div class="x_title">
                  <h2>Detail Pendaftar <b><?=$data['nama']?></b></h2>
                  <div class="clearfix"></div>
               </div>
<div class="">
   <div class="col-md-13" style="padding-top:1px;">
      <table class="table table-striped">
         <tbody>
            <h4><b>Identitas</b></h4>
            <tr>
               <td width="150">Nama </td>
               <td>: <?=$data['nama']?></td>
            </tr>
            <tr>
               <td>Umur</td>
               <td>: <?=$data['umur']?></td>
            </tr>
            <tr>
               <td>Tempat Tinggal</td>
               <td>: <?=$data['tinggal']?></td>
            </tr>
            <tr>
               <td>Username Discord</td>
               <td>: <?=$data['discord']?></td>
            </tr>
            <tr>
               <td>Link Facebook</td>
               <td>: <?=$data['facebook']?></td>
            </tr>
            <tr>
               <td>Link Instagram</td>
               <td>: <?=$data['instagram']?></td>
            </tr>
         </tbody>
      </table><br>
      <table class="table table-striped">
         <tbody>
            <h4><b>Pertanyaan</b></h4>
            <tr>
               <td width="150">Sejak kapan kamu bermain instagram?</td>
               <td>: <?=$isi['pertanyaan_1']?></td>
            </tr>
            <tr>
               <td>Fitur apa saja yang kamu ketahui di Instagram?</td>
               <td>: <?=$isi['pertanyaan_2']?></td>
            </tr>
            <tr>
               <td>Apa yang membuat kamu tertarik menjadi salah satu staff POS?</td>
               <td>: <?=$isi['pertanyaan_3']?></td>
            </tr>
            <tr>
               <td>Apakah kamu pernah menjabat di suatu komunitas?</td>
               <td>: <?=$isi['pertanyaan_4']?></td>
            </tr>
            <tr>
               <td>Apakah kamu bersedia mengikuti aturan Staff?</td>
               <td>: <?=$isi['pertanyaan_5']?></td>
            </tr>
         </tbody>
      </table>
      
   </div>
   <div class="col-md-4">
        <a href="?page=facebook&action=hapus&id=<?php echo $id; ?>" class="btn btn-primary" onClick="confirm('Apakah yakin ingin menghapus data ini?')">Hapus</a>
        <a href="?page=facebook" class="btn btn-danger">Kembali</a>
        <br><br><br>
   </div>
   
</div>