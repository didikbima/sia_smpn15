<?php
if(isset($_SESSION['SES_ADMIN'])) {
	echo "<h2 style='margin:-5px 0px 5px 0px; padding:0px;'>Selamat datang ........!</h2></p>";
	echo "<b> Anda sudah login sebagai Admin";
	echo "<br><br> Dikembangkan oleh Tim <strong>BUNAFIT KOMPUTER</strong><br>
			Klik <a href='http://www.bunafitkomputer.com' target='_blank'>www.BunafitKomputer.com</a>";
	exit;
}
else {
	echo "<h2 style='margin:-5px 0px 5px 0px; padding:0px;'>Selamat datang ........!</h2></p>";
	echo "<b>Anda belum login, silahkan <a href='?open=Login' alt='Login'>login </a>untuk mengakses sitem ini ";	
	echo "<br><br> Gunakan User : admin <br> Password : admin</a>";
}
?>