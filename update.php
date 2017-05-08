<?php 
	include "db/koneksi.php";
	
	$mysqli->query("UPDATE visimisi SET 
		visi = '$_POST[visi]', 
		misi = '$_POST[misi]', 
		WHERE 
		id = '$_POST[id]'");	
	/*header('location: isi.php');*/

 ?>