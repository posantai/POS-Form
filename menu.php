<?php defined('BASEPATH') or die("No Access Allowed");?>
<div class="content">
    <div class="inner">
		
	<img widht="300" height="150" src="https://cdn.discordapp.com/attachments/496983030993518592/778208372520255508/POSBG-SLCCC.png">		
	<h1>Sedang Mencari Staff</h1>
		<h4>Jawab Pertanyaan ini sejujujurnya tidak perlu khawatir dengan privasi karna ini sifatnya rahasia</h4>
	</div>
</div>
	<nav>
		<ul>
		<?php 

		$sql = mysqli_query($connection, "SELECT * FROM t_platform");
		if(mysqli_num_rows($sql) > 0) {

			while($data = mysqli_fetch_array($sql)) {
				$opsi = "#{$data['platform']}";
				if($data['status'] == 'N') $opsi = '?page=tutup';
				echo "<li><a href='{$opsi}'>{$data['platform']}</a></li>";
			}
		}
		?>
				<!--<li><a href="#elements">Elements</a></li>-->
		</ul>
	</nav>