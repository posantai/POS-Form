<?php defined('BASEPATH') or die("No Access Allowed");?>
<article id="instagram">

	<form method="post">

				                    <!--- Identitas -->
		<h2>Identitas</h2>
		    <label>Nama</label>
		        <input type="text" Name="name_IG" placeholder="Name" maxlength="100" required=""><br>
		    <label>Umur</label>
		        <input type="text" Name="age_IG" placeholder="Age" maxlength="2" required=""><br>
		    <label>Tempat Tinggal</label>
                <input type="text" Name="live_IG" placeholder="Residence" maxlength="200" required=""><br>
            <label>Username Discord</label>
                <input type="text" Name="discord_IG" placeholder="Username" maxlength="100"><br>
		    <label>Link Facebook</label>
		        <input type="text" Name="facebook_IG" placeholder="Facebook URL" maxlength="100" required=""><br>
		    <label>Link Instagram</label>
		        <input type="text" Name="url_IG" placeholder="Instagram URL" maxlength="100" required=""><br><br><br>

				                <!--- Perihal Seputar Staff -->
		<h2>Perihal Seputar Staff</h2>
			<label>Sejak kapan kamu bermain Instagram?</label>
			    <input type="text" Name="sinceIG" maxlength="500" placeholder="Answer this Question!" required=""><br>
			<label>Fitur apa saja yang kamu ketahui di Instagram?</label>
			    <textarea name="featureIG" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
			<label>Apa yang membuat kamu tertarik menjadi salah satu Staff POS?</label>
			    <textarea name="interestIG" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>

				                <!-- selection ya, gk, mungkin -->
			<label>Apakah kamu sudah pernah menjabat disuatu komunitas?</label>
  				<input type="radio" id="ya" name="answerIG" value="ya" required="">
 			<label for="ya">ya</label><br>
  				<input type="radio" id="tidak" name="answerIG" value="tidak" required="">
  			<label for="tidak">tidak</label><br><br>
				
			<label>Apakah kamu bersedia mengikuti aturan Staff?</label>
  				<input type="radio" id="yav2" name="answerv2IG" value="ya" required="">
 			<label for="yav2">ya</label><br>
  				<input type="radio" id="tidakv2" name="answerv2IG" value="tidak" required="">
  			<label for="tidakv2">tidak</label><br><br>

				<div class="send-button">
					<centeR><input Name="submit" type="submit" value="Kirim"><center>
				</div>
	</form>
</article>

<article id="facebook">
    <form action="" method="post">

                                        <!--- Identitas -->
        <h2>Identitas</h2>
            <label>Nama</label>
                <input type="text" Name="name_FB" placeholder="Name" maxlength="100" required=""><br>
            <label>Umur</label>
                <input type="text" Name="age_FB" placeholder="Age" maxlength="2" required=""><br>
            <label>Tempat Tinggal</label>
                <input type="text" Name="live_FB" placeholder="Residence" maxlength="200" required=""><br>
            <label>Username Discord</label>
                <input type="text" Name="discord_FB" placeholder="Username" maxlength="200" required=""><br>
            <label>Link Facebook</label>
                <input type="text" Name="url_FB" placeholder="Facebook URL" maxlength="100" required=""><br>
            <label>Link Instagram (Opsional)</label>
                <input type="text" Name="instagram_FB" placeholder="Instagram URL" maxlength="100">
                <br><br><br>

                                <!--- Perihal Seputar Staff -->
        <h2>Perihal Seputar Staff</h2>
            <label>Apa yang membuatmu tertarik untuk menjadi moderator ?</label>
                <input type="text" Name="interestFB" maxlength="1000" placeholder="Answer this Question!" required=""><br>
            <label>Jika kamu tertarik , apa yang bisa kamu lakukan jika menjadi moderator?</label>
                <textarea name="workFB" maxlength="1000" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Apa yang membuat kamu tertarik menjadi salah satu Staff POS?</label>
                <textarea name="interestStaff" maxlength="500" placeholder="Answer this Question" required=""></textarea><br>

                                <!-- selection [ya, gk, mungkin] -->
            <label>Apakah kamu sudah pernah menjabat disuatu komunitas?</label>
                <input type="radio" id="yaFB" name="answerFB" value="ya" required="">
            <label for="yaFB">ya</label><br>
                <input type="radio" id="tidakFB" name="answerFB" value="tidak" required="">
            <label for="tidakFB">tidak</label><br><br>

            <label>Apakah kamu bersedia mengikuti aturan Staff?</label>
                <input type="radio" id="yav2FB" name="answerv2FB" value="ya" required="">
            <label for="yav2FB">ya</label><br>
                <input type="radio" id="tidakv2FB" name="answerv2FB" value="tidak" required="">
            <label for="tidakv2FB">tidak</label><br><br>

            <label>Apakah kamu siap bekerja secara sukarela ?</label>
                <input type="radio" id="yav3FB" name="answerv3FB" value="ya" required="">
            <label for="yav3FB">ya</label><br>
                <input type="radio" id="tidakv3FB" name="answerv3FB" value="tidak" required="">
            <label for="tidakv3FB">tidak</label><br>
                 <div class="send-button">
                    <centeR>
                        <input Name="submitv2" type="submit" value="Kirim">
                    </center>
                </div>
    </form>
</article>

<article id="discord">
    <form action="" method="post">

                                        <!--- Identitas -->
        <h2>Identitas</h2>
            <label>Nama Lengkap</label>
                <input type="text" Name="name_DC" placeholder="Name" maxlength="100" required=""><br>
            <label>Umur</label>
                <input type="text" Name="age_DC" placeholder="Age" maxlength="2" required=""><br>
            <label>Username Discord</label>
                <input type="text" Name="url_DC" placeholder="ManLord#3143" maxlength="100" required=""><br>
            <label>Link Facebook (Opsional)</label>
                <input type="text" Name="facebook_DC" placeholder="Facebook URL" maxlength="100"><br>
            <label>Link Instagram (Opsional)</label>
                <input type="text" Name="instagram_DC" placeholder="Instagram URL" maxlength="100"><br><br><br>

                                <!--- Perihal Seputar Staff -->
        <h2>Perihal Seputar Staff</h2>
            <label>Apa kesibukan kalian saat ini?</label>
                <textarea Name="busyDC" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Disela kesibukan kalian, apakah kalian memiliki waktu luang yang lebih untuk memantau dan moderasi server?</label>
                <textarea name="busyv2DC" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Apakah kalian mudah untuk berinteraksi dengan orang yang kalian kenal maupun tidak kalian kenal? Tipe orang seperti apakah kalian?</label>
                <textarea name="communitateDC" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Apa yang mendorongmu menjadi moderator POS?</label>
                <textarea name="passionDC" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Apa itu moderator menurutmu? Jelaskan secara singkat!</label>
                <textarea name="modDC" maxlength="500" placeholder="Answer this Question!" required=""></textarea><br>
            <label>Sebutkan beberapa command basic yang digunakan untuk moderasi server! (Minimal 3)</label>
                <textarea name="modsDC" maxlength="500" placeholder="Answer this Question" required=""></textarea><br>


                                <!-- selection [ya, gk, mungkin] -->
            <label>Apakah kamu sudah pernah menjabat disuatu komunitas?</label>
                <input type="radio" id="yaDC" name="answerDC" value="ya" required="">
            <label for="yaDC">ya</label><br>
                <input type="radio" id="tidakDC" name="answerDC" value="tidak" required="">
            <label for="tidakDC">tidak</label><br><br>

            <label>Apakah kamu bersedia mengikuti aturan Staff?</label>
                <input type="radio" id="yav2DC" name="answerv2DC" value="ya" required="">
            <label for="yav2DC">ya</label><br>
                <input type="radio" id="tidakv2DC" name="answerv2DC" value="tidak" required="">
            <label for="tidakv2DC">tidak</label><br><br>

                 <div class="send-button">
                    <centeR>
                        <input Name="submitv3" type="submit" value="Kirim">
                    </center>
                </div>
    </form>
</article>
