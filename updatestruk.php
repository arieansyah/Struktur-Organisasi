<?php
  include "db/koneksi.php";

  $id      = $_POST['id'];
  $nama    = $_POST['nama'];
  $nip     = $_POST['nip'];
  $jabatan = $_POST['jabatan'];
  $foto    = $_POST['foto'];
  $mysqli->query("UPDATE struktur SET nama='$nama' , nip='$nip' , jabatan='$jabatan', foto='$foto' WHERE id='$id' ");
  header('location:isi.php');

 ?>
