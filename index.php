<?php
define('BASEPATH', dirname(__FILE__));

	#ini buat webhook
	require('./includes/submit.php');
	require('./includes/connection.php');
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>POS Formulir</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta charset="utf-8" />
		<meta name="author" content="KatowProject"/>
		<meta property="og:image" content="https://cdn.discordapp.com/attachments/496983030993518592/778158725630263296/logoV4.png">
		<meta name="description" content="Formulir Pendaftaran Staff Perkumpulan Orang Santai"/>
		<link rel="icon" href="https://cdn.discordapp.com/attachments/496983030993518592/778158725630263296/logoV4.png">
		<meta name="keywords" content="Pendataran Staff" />
		<script src="https://kit.fontawesome.com/0c2f9fb540.js" crossorigin="anonymous"></script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Style --> 
	<link rel="stylesheet" href="assets/css/main.css" type="text/css" media="all" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

</head>
<!-- //Head -->

<!-- Body -->
<body class="is-preload">

	<div id="wrapper">
		<header id="header">
		<?php
        if (isset($_GET['page'])) {
             switch ($_GET['page']) {
             case 'thanks':
             	include('./thanks.php');
			 break;
			 case 'tutup':
				echo '<script>alert("Mohon Maaf, saat ini sedang tidak open Staff 😁")</script>';
			 default:
             	include('./menu.php');
			 break;
          	 }
        } else {
          include('./menu.php');
        }
        ?>
		</header>

		<!-- kita ahlikan ke file baru supaya tidak panjang lebar -->
		<div id="main">
		<?php 
			include("./form.php")
		?>
		
	</div>
				<!-- Footer -->
			<footer id="footer">
				<p class="copyright">&copy; 2020 Perkumpulan Orang Santai</p>
			</footer>
		</div>
	<!-- BG -->
	<div id="bg"></div>

	<!-- semisalnya formnya mau tutup -->
	<script src="assets/js/alert.js"></script>

	<!-- gk tau buat apaan -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
<!-- //Body -->

</html>