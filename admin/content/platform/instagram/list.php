<? defined('BASEPATH') or die("No Access Allowed"); ?> 
<div class="x_content">

            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr> 
                    <th class="column-title">Nama Lengkap </th>
                    <th class="column-title">Umur </th>
                    <th class="column-title">Tempat Tinggal </th>
                    <th class="column-title">Discord </th>
                    <th class="column-title">Facebook </th>
                    <th class="column-title">Instagram </th>
                    <th class="column-title">Calon ID </th>

                    <th class="column-title no-link last"><span class="nobr">~ Action ~</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">
                        </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>

                <tbody>
                      <?php 
                      $id = 2;
                      $sql = mysqli_query($connection, "SELECT * FROM t_identitas JOIN t_platform ON t_identitas.platform_id = t_platform.platform_id WHERE t_identitas.platform_id = $id");
                      
                    if(mysqli_num_rows($sql) > 0) {
                        while($data = mysqli_fetch_array($sql)) {
                            ?>
                            <tr class="even pointer">
                            <td><?=$data['nama']?></td>
                            <td><?=$data['umur']?></td>
                            <td><?=$data['tinggal']?></td>
                            <td><?=$data['discord']?></td>
                            <td><?=$data['facebook']?></td>
                            <td><?=$data['instagram']?></td>
                            <td><?=$data['calon_id']?></td>
                      
                    
                    <td class="bulk_action">
                      <a href="?page=instagram&action=view&id=<?=$data['calon_id']?>">View</a> |
                      <a href="?page=instagram&action=hapus&id=<?=$data['calon_id']?>" onClick='return confirm("Apakah kamu yakin menghapus data ini?")'>Delete</a>
                    </td>
                  </tr>
                  <?php
                        }
                    } else {
                        
                    echo "<tr>
                            <td colspan='8' style='text-align:center;'><h4>Belum ada data</h4></td>
                          </tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
</div>