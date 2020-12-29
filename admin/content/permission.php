<div class="" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengaturan Form</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
        <form action="content/update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php       

                    $perms = mysqli_query($connection, "SELECT * FROM t_platform");
                    if(mysqli_num_rows($perms) > 0) {
                        $i = 1;
                        while($data = mysqli_fetch_array($perms)) {
                            
                            $data['platform'] = strtoupper($data['platform']);

                            $ops1 = '';
                            $ops2 = '';
                            if($data['status'] == "Y") $ops1 = 'selected';
                            if($data['status'] == "N") $ops2 = 'selected';

                            echo  "<div class='form-group'>
                            <label class='col-sm-3'>Form {$data['platform']}</label>
                            <div class='col-md-8'>
                                <select name='status_{$i}' required='Pemilih' class='form-control'>
                                    <option value='Y' {$ops1}>Aktif</option>
                                    <option value='N' {$ops2}>Nonaktif</option>
                                </select>
                            </div>
                            </div>";
                            $i++;
                        }
                    }
        
        ?>

            <div class="form-group" style="padding-top:20px;">
                <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="update" value="Update Kandidat" class="btn btn-success">
                        Update Form
                    </button>
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger">
                        Kembali
                    </button>
                </div>
            </div>

         </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>