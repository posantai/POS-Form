<?php defined('BASEPATH') or die("No Access Allowed"); 
require('connection.php');


if(isset($_POST['submit'])) {
	$id = 2;
    #identitas
	$nama_IG 		= @$_POST['name_IG'];
	$umur_IG 		= @$_POST['age_IG'];
	$live_IG 		= @$_POST['live_IG'];
	$discord_IG		= @$_POST['discord_IG'];
	$facebook_IG	= @$_POST['facebook_IG'];
	$url_IG		 	= @$_POST['url_IG'];

	#pertanyaan
	$sinceIG 	= @$_POST['sinceIG'];
	$featureIG	= @$_POST['featureIG'];
	$interestIG	= @$_POST['interestIG'];

	#pilihan
	$answerIG 	= @$_POST['answerIG'];
    $answerv2IG	= @$_POST['answerv2IG'];
	
	$sql = mysqli_query($connection, "SELECT * FROM t_identitas");
	$urut = mysqli_num_rows($sql) + 1;

	#identitas
	$identitas = $connection -> prepare("INSERT INTO t_identitas (nama, umur, tinggal, discord, facebook, instagram, platform_id, calon_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$identitas -> bind_param("ssssssii", $nama_IG, $umur_IG, $live_IG, $discord_IG, $facebook_IG, $url_IG, $id, $urut);
	$identitas -> execute();
	#pertanyaan
    $pertanyaan = $connection -> prepare("INSERT INTO t_pendaftar(platform_id, calon_id, pertanyaan_1, pertanyaan_2, pertanyaan_3, pertanyaan_4, pertanyaan_5) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$pertanyaan -> bind_param('iisssss', $id, $urut, $sinceIG, $featureIG, $interestIG, $answerIG, $answerv2IG);
	$pertanyaan -> execute();
}

if(isset($_POST['submitv2'])) {

	$id = 1;
	$sql = mysqli_query($connection, "SELECT * FROM t_identitas");
	$urut = mysqli_num_rows($sql) + 1;

    #identitas
	$nama_FB		= @$_POST['name_FB'];
	$umur_FB 		= @$_POST['age_FB'];
	$live_FB 		= @$_POST['live_FB'];
	$discord_FB		= @$_POST['discord_FB'];
	$url_FB			= @$_POST['url_FB'];
	$instagram_FB	= @$_POST['instagram_FB'];

	$identitas = $connection -> prepare("INSERT INTO t_identitas (nama, umur, tinggal, discord, facebook, instagram, platform_id, calon_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$identitas -> bind_param("ssssssii", $nama_FB, $umur_FB, $live_FB, $discord_FB, $url_FB, $instagram_FB, $id, $urut);
	$identitas -> execute();

	#pertanyaan
	$interestFB		= @$_POST['interestFB'];
	$workFB			= @$_POST['workFB'];
	$interestStaff	= @$_POST['interestStaff'];

	#pilihan
	$answerFB	= @$_POST['answerFB'];
	$answerv2FB	= @$_POST['answerv2FB'];
	$answerv3FB = @$_POST['answerv3FB'];

	$pertanyaan = $connection -> prepare("INSERT INTO t_pendaftar(platform_id, calon_id, pertanyaan_1, pertanyaan_2, pertanyaan_3, pertanyaan_4, pertanyaan_5, pertanyaan_6) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$pertanyaan -> bind_param('iissssss', $id, $urut, $interestFB, $workFB, $interestStaff, $answerFB, $answerv2FB, $answerv3FB);
	$pertanyaan -> execute();
}

if(isset($_POST['submitv3'])) {
    #discord ID = 3
    $id = 3;
    #Identitas
	$nama_DC		= @$_POST['name_DC'];
	$umur_DC 		= @$_POST['age_DC'];
	$url_DC			= @$_POST['url_DC'];
	$facebook_DC	= @$_POST['facebook_DC'];
	$instagram_DC	= @$_POST['instagram_DC'];
	
	$identitas = $connection -> prepare("INSERT INTO t_identitas (nama, umur, discord, facebook, instagram, platform_id, calon_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$identitas -> bind_param("sssssii", $nama_DC, $umur_DC, $url_DC, $facebook_DC, $instagram_DC, $id, $urut);
	$identitas -> execute();
	
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
    
	$pertanyaan = $connection -> prepare("INSERT INTO t_pendaftar(platform_id, calon_id, pertanyaan_1, pertanyaan_2, pertanyaan_3, pertanyaan_4, pertanyaan_5, pertanyaan_6, pertanyaan_7, pertanyaan_8) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$pertanyaan -> bind_param('iissssssss', $id, $urut, $busyDC, $busyv2DC, $communitateDC, $passionDC, $modDC, $modsDC, $answerDC, $answerv2DC);
	$pertanyaan -> execute();
}
?>

