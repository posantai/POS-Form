<?php defined('BASEPATH') or die("No Access Allowed");?>

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
                  <label class="col-sm-3 control-label">Foto Profil</label>
               <div class="col-md-6">
                  <input type="file" class="form-control" name="foto"/>
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