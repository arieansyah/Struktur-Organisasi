<?php 
	include "db/koneksi.php";

$id = $_POST['id'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$mysqli->query("UPDATE visimisi SET visi='$visi', misi='$misi' WHERE id ='$id'");	
	header('location: isi.php');

 ?>