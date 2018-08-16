<?php
if(isset($_SESSION['SES_ADMIN'])){
?>
	<ul>
	<li><a href='?open' title='Halaman Utama'>Home</a></li>
	<li><a href='?open=User-Data' title='User'> Data User</a></li>
	<li><a href='?open=Pelajaran-Data' title='Pelajaran' target="_self"> Data Pelajaran</a></li>
	<li><a href='?open=Guru-Data' title='Guru'> Data Guru</a></li>
	<li><a href='?open=Siswa-Data' title='Siswa'> Data Siswa</a></li>
	<li><a href='?open=Kelas-Data' title='Kelas'> Data Kelas</a></li>
	<li><a href='?open=Nilai-Data' title='Nilai'> Nilai Kelas</a></li>
	<li><a href='?open=Laporan' title='Laporan'> Laporan</a></li>
	<li><a href='?open=Logout' title='Logout (Exit)'>Logout</a></li>
	</ul>
<?php
}
else { ?>
	<ul>
	<li><a href='?open=Login' title='Login System'>Login</a></li>	
	</ul>
<?php 
}
?>