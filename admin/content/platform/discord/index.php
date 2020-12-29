<?php
if (!isset($_SESSION['id_admin'])) {
   header('location: ../../');
   require('.././includes/connection.php');
}

if (isset($_GET['action'])) {

   switch ($_GET['action']) {

      case 'view':
         include('view.php');
         break;

      case 'hapus':
         if (isset($_GET['id'])) {

            $calon_id  = strip_tags(mysqli_real_escape_string($connection, $_GET['id']));
            
            #identitas
            $data  = $connection->prepare("DELETE FROM t_identitas WHERE calon_id = ?");
            $data->bind_param('s', $calon_id);
            $data->execute();

            #jawaban
            $isi = $connection-> prepare("DELETE FROM t_pendaftar WHERE calon_id = ?");
            $isi -> bind_param('s', $calon_id);
            $isi ->execute();

            header('location: ?page=discord');

         } else {

            header('location: ./');

         }

         break;
      default:
         include('./list.php');
         break;
   }

} else {

   include('list.php');

}
?>
