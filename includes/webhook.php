<?php defined('BASEPATH') or die("No Access Allowed");

	#kita di sini buat ambil data yang dibutuhin
	require('includes/config.php');

#instagram
if(isset($_POST['submit'])) {

	#identitas
	$namaIG = @$_POST['nameIG'];
	$umurIG = @$_POST['ageIG'];
	$liveIG = @$_POST['liveIG'];
	$fbURL	= @$_POST['fbURL'];
	$urlIG 	= @$_POST['urlIG'];

	#pertanyaan
	$sinceIG 	= @$_POST['sinceIG'];
	$featureIG	= @$_POST['featureIG'];
	$interestIG	= @$_POST['interestIG'];

	#pilihan
	$answerIG 	= @$_POST['answerIG'];
	$answerv2IG	= @$_POST['answerv2IG'];
	
	$url = "{$config['webhookURL']}";
	$timestamp = date('Y-m-d H:i:s');
	$hookObject = json_encode([
		
		"username" => "{$config['username']}",
		"avatar_url" => "{$config['avatarWebhook']}",
		"tts" => false,
		"content" => "<:PingKato:751997048177557544>, ada data yang masuk!",
		#embed
		"embeds" => [
			[
				"title" => "**Formulir Calon Moderator**",
				"type" => "rich",
				"description" => "Data masuk pada tanggal {$timestamp}",
				"url" => "",
				"timestamp" => "{$timestamp}",
				"color" => hexdec( "FFFFFF" ),
				"footer" => [
					"text" => "© 2020 Perkumpulan Orang Santai",
				],
				"fields" => [
					[
						"name" => "Nama Lengkap",
						"value" => "{$namaIG}",
						"inline" => true
					],
					[
						"name" => "Umur",
						"value" => "{$umurIG}",
						"inline" => true
					],
					[
						"name" => "Tempat Tinggal",
						"value" => "{$liveIG}",
						"inline" => true
					], 
					[
						"name" => "Link Facebook",
						"value" => "{$fbURL}",
						"inline" => true
					],
					[
						"name" => "Link Instagram",
						"value" => "{$urlIG}",
						"inline" => true
					],
					[
						"name" => "Sejak kapan kamu bermain instagram?",
						"value" => "{$sinceIG}",
						"inline" => false
					],
					[
						"name" => "Fitur apa saja yang kamu ketahui di Instagram?",
						"value" => "{$featureIG}",
						"inline" => false
					],
					[
						"name" => "Apa yang membuat kamu tertarik menjadi salah satu Staff POS?",
						"value" => "{$interestIG}",
						"inline" => false
					],
					[
						"name" => "Apakah kamu sudah pernah menjabat disuatu komunitas?",
						"value" => "{$answerIG}",
						"inline" => true
					],
					[
						"name" => "Apakah kamu bersedia mengikuti aturan Staff?",
						"value" => "{$answerv2IG}",
						"inline" => true
					]
				]
			]
		]
	
	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
	$ch = curl_init();
	curl_setopt_array( $ch, [
		CURLOPT_URL => $url,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $hookObject,
		CURLOPT_HTTPHEADER => [
			"Content-Type: application/json"
		]
	]);
	
	$response = curl_exec( $ch );
	curl_close( $ch );

	echo "<script>
			window.location.href = `${location.hostname}/index.php?page=thanks`;
		 </script>";
} else 

#facebook
if(isset($_POST['submitv2'])) {

	#identitas
	$nameFB = @$_POST['nameFB'];
	$ageFB	= @$_POST['ageFB'];
	$liveFB	= @$_POST['liveFB'];
	$urlFB	= @$_POST['urlFB'];
	
	#pertanyaan
	$interestFB		= @$_POST['interestFB'];
	$workFB			= @$_POST['workFB'];
	$interestStaff	= @$_POST['interestStaff'];

	#pilihan
	$answerFB	= @$_POST['answerFB'];
	$answerv2FB	= @$_POST['answerv2FB'];
	$answerv3FB = @$_POST['answerv3FB'];
	
	$url = "{$config['webhookURL']}";
	$timestamp = date('Y-m-d H:i:s');
	$hookObject = json_encode([
		"content" => "<:PingKato:751997048177557544>, ada data yang masuk!",
		"username" => "{$config['username']}",
		"avatar_url" => "{$config['avatarWebhook']}",
		"tts" => false,
		#embed
		"embeds" => [
			[
				"title" => "**Formulir Calon Moderator**",
				"type" => "rich",
				"description" => "Data masuk pada tanggal {$timestamp}",
				"url" => "",
				"timestamp" => "{$timestamp}",
				"color" => hexdec( "FFFFFF" ),
				"footer" => [
					"text" => "© 2020 Perkumpulan Orang Santai",
				],
				"fields" => [
					[
						"name" => "Nama Lengkap",
						"value" => "{$nameFB}",
						"inline" => true
					],
					[
						"name" => "Umur",
						"value" => "{$ageFB}",
						"inline" => true
					],
					[
						"name" => "Tempat Tinggal",
						"value" => "{$liveFB}",
						"inline" => true
					], 
					[
						"name" => "Link Facebook",
						"value" => "{$urlFB}",
						"inline" => true
					],
					[
						"name" => "Apa yang membuatmu tertarik untuk menjadi moderator?",
						"value" => "{$interestFB}",
						"inline" => false
					],
					[
						"name" => "Jika kamu tertarik , apa yang bisa kamu lakukan jika menjadi moderator?",
						"value" => "{$workFB}",
						"inline" => false
					],
					[
						"name" => "Apa yang membuat kamu tertarik menjadi salah satu Staff POS?",
						"value" => "{$interestStaff}",
						"inline" => false
					],
					[
						"name" => "Apakah kamu sudah pernah menjabat disuatu komunitas?",
						"value" => "{$answerFB}",
						"inline" => true
					],
					[
						"name" => "Apakah kamu bersedia mengikuti aturan Staff?",
						"value" => "{$answerv2FB}",
						"inline" => true
					],
					[
						"name"	=> "Apakah kamu siap bekerja secara sukarela?",
						"value" => "{$answerv3FB}",
						"inline" => true
					]
				]
			]
		]
	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt_array( $ch, [
		CURLOPT_URL => $url,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $hookObject,
		CURLOPT_HTTPHEADER => [
			"Content-Type: application/json"
		]
	]);
	
	$response = curl_exec( $ch );
	curl_close( $ch );

	echo "<script>
			window.location.href = `${location.hostname}/index.php?page=thanks`;
		 </script>";
} else 

#Discord
if(isset($_POST['submitv3'])) {

	#Identitas
	$namaDC	= @$_POST['namaDC'];
	$umurDC	= @$_POST['ageDC'];
	$userDC	= @$_POST['userDC'];
	
	#Perihal Seputar Staff
	$busyDC			= @$_POST['busyDC'];
	$busyv2DC		= @$_POST['busyv2DC'];
	$communitateDC	= @$_POST['communitateDC'];
	$passionDC		= @$_POST['passionDC'];
	$modDC			= @$_POST['modDC'];
	$modsDC			= @$_POST['modsDC'];

	#selection
	$answerDC	= @$_POST['answerDC'];
	$answerv2DC	= @$_POST['answerv2DC'];

	$url = "{$config['webhookURL']}";
	$timestamp = date('Y-m-d H:i:s');
	$hookObject = json_encode([
		"content" => "<:PingKato:751997048177557544>, ada data yang masuk!",
		"username" => "{$config['username']}",
		"avatar_url" => "{$config['avatarWebhook']}",
		"tts" => false,
		#embed
		"embeds" => [
			[
				"title" => "**Formulir Calon Moderator**",
				"type" => "rich",
				"description" => "Data masuk pada tanggal {$timestamp}",
				"url" => "",
				"timestamp" => "{$timestamp}",
				"color" => hexdec( "FFFFFF" ),
				"footer" => [
					"text" => "© 2020 Perkumpulan Orang Santai",
				],
				"fields" => [
					[
						"name" => "Nama Lengkap",
						"value" => "{$namaDC}",
						"inline" => true
					],
					[
						"name" => "Umur",
						"value" => "{$umurDC}",
						"inline" => true
					],
					[
						"name" => "Username Discord",
						"value" => "{$userDC}",
						"inline" => false
					],
					[
						"name" => "Apa kesibukan kalian saat ini?",
						"value" => "{$busyDC}",
						"inline" => false
					],
					[
						"name" => "Disela kesibukan kalian, apakah kalian memiliki waktu luang yang lebih untuk memantau dan moderasi server?",
						"value" => "{$busyv2DC}",
						"inline" => false

					],
					[
						"name" => "Apakah kalian mudah untuk berinteraksi dengan orang yang kalian kenal maupun tidak kalian kenal? Tipe orang seperti apakah kalian?",
						"value" =>	"{$communitateDC}",
						"inline" => false
					],
					[
						"name" => "Apa yang mendorongmu menjadi moderator POS?",
						"value" => "{$passionDC}",
						"inline" => false
					],
					[
						"name" => "Apa itu moderator menurutmu? Jelaskan secara singkat!",
						"value" => "{$modDC}",
						"inline" => false
					],
					[
						"name" => "Sebutkan beberapa command basic yang digunakan untuk moderasi server! (Minimal 3)",
						"value" => "{$modsDC}",
						"inline" => false
					],
					[
						"name" => "Apakah kamu sudah pernah menjabat disuatu komunitas?",
						"value" => "{$answerDC}",
						"inline" => true
					],
					[
						"name" => "Apakah kamu bersedia mengikuti aturan Staff?",
						"value" => "{$answerv2DC}",
						"inline" => true
					]
				]
			]
		]
	
	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
	
	$ch = curl_init();
	
	curl_setopt_array( $ch, [
		CURLOPT_URL => $url,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $hookObject,
		CURLOPT_HTTPHEADER => [
			"Content-Type: application/json"
		]
	]);
	
	$response = curl_exec( $ch );
	curl_close( $ch );

	echo "<script>
			window.location.href = `${location.hostname}/index.php?page=thanks`;
		 </script>";
}

?>