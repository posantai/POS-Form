<?php
ob_start();
session_start();

if(isset($_SESSION['id_admin'])) {
    header('location: ./dashboard.php');
}

if(isset($_POST['submit'])) {
    define('BASEPATH', dirname(__FILE__));
    include('../includes/connection.php');

    $user = $_POST['username'];
    $pass = mysqli_real_escape_string($connection, $_POST['password']);

    if($user == null or $pass == null) {
        echo "<script>alert('username dan password tidak boleh kosong!');</script>";
    } else {

        $log = $connection->prepare("SELECT * FROM t_admin WHERE username = ?") or die($con->error);
        $log->bind_param('s', $user);
        $log->execute();
        $log->store_result();
        $jml = $log->num_rows();
        $log->bind_result($username, $password, $id, $name, $avatar);
        $log->fetch();

        if($jml) {
            if(password_verify($pass, $password)) {
                $_SESSION['id_admin'] = $id;
                $_SESSION['user'] = $name;
                $_SESSION['avatar'] = $avatar;
 
                header('location:./dashboard.php');
            } else {
                echo '<script type="text/javascript">alert("Password Salah");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Username tidak dikenali");</script>';
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POS Admin Page</title>

    <!-- Bootstrap -->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./assets/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
        <center><img class="logo" src="https://media.discordapp.net/attachments/496983030993518592/722739973304090644/Watermark_POS.png?width=270&height=270"></center>
          <section class="login_content">
            <form method="post">
              <h1 id="form_title" class="kopirek">Login Form</h1>
              <p>
              
              </p>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Username" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" />
              </div>
              <div>
              <button type="submit" name="submit" value="submit" class="btn btn-default submit">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                
                  <p class="kopirek">©2020 All Rights Reserved. Perkumpulan Orang Santai.</p>
                  
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
