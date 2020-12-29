<?php

if (!isset($_POST['update'])) {

header('location: ./');

} else {
    define('BASEPATH', dirname(__FILE__));
    include('../../includes/connection.php');

    $perms = mysqli_query($connection, "SELECT * FROM t_platform");
    $i = 1;
    while($data = mysqli_fetch_array($perms)) {
    $status  = $_POST["status_{$i}"];

    $sql = $connection->prepare("UPDATE t_platform SET status = ? WHERE platform_id = ?");
    $sql->bind_param('si', $status, $i);
    $sql->execute();
    
    $i++;
    }
   
    header('location: ../dashboard.php?page=permission');

   
}
?>