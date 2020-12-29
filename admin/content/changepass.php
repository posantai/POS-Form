<?php defined('BASEPATH') or die("No Access Allowed");

if (!isset($_SESSION['id_admin'])) {
    header('location:./');
 }
 
 if (isset($_POST['update_pass'])) {
 
    $get = $connection->prepare("SELECT password FROM t_admin WHERE id_admin = ?");
    $get->bind_param('i', $_SESSION['id_admin']);
    $get->execute();
    $get->store_result();
    if ($get->num_rows() > 0) {
 
       $get->bind_result($password);
       $get->fetch();
    
       $nama = $_POST['nama'] or $_SESSION['name'];
       $avatar = $_POST['foto'] or $_SESSION['avatar'];
       $pass1 = mysqli_real_escape_string($connection, $_POST['lama']);
       $pass2 = password_hash(mysqli_real_escape_string($connection, $_POST['baru']), PASSWORD_BCRYPT, ['cost' => 10]);
 
       if(password_verify($pass1, $password)) {
 
          $get = $connection -> prepare("UPDATE t_admin SET name = ?, password = ?, avatar = ? WHERE id_admin = ?");
          $get->bind_param('sssi', $nama, $pass2, $avatar, $_SESSION['id_admin']);
          $get->execute();
 
          echo '<script type="text/javascript">window.location.replace("?page=logout");</script>';
 
       } else {
 
          echo '<script type="text/javascript">alert("Akses Illegal");window.location.replace("?page=logout");</script>';
 
       }
 
    } else {
 
       echo '<script type="text/javascript">alert("Akses Illegal");window.location.replace("?page=logout");</script>';
 
    }
 
 }

?>

<h3>Ganti Password</h3>
<hr />
<div class="row">
    <div class="col-md-6">
        <form action="" method="post" class="form-horizontal">

            <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>
               <div class="col-md-6">
                  <input type="text" class="form-control" name="nama" placeholder="Nama Pengguna"/>
               </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-3 control-label">Foto Profil (Link)</label>
               <div class="col-md-6">
                  <input type="text" class="form-control" name="foto" placeholder="Link Gambar"/>
               </div>
            </div><br>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password Lama</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="lama" placeholder="Password Lama" required/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Password Baru</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="baru" placeholder="Password Baru" required/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-3">
                    <p class="help-text" style="color:#666464;">
                        Anda harus login ulang saat password berhasil diupdate
                    </p>
                    <button type="submit" name="update_pass" class="btn btn-success" value="Update Password">
                        Update Profil
                    </button>
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger">
                        Kembali
                    </button>
               </div>
            </div>

         </form>
    </div>
</div><