<?php
//membuat koneksi ke DB
$host	= "localhost";
$user	= "root";
$pass	= "";
$db		= "tree"; //nama db di phpmyadmin

//Menggunakan objek mysqli untuk membuat koneksi dan menyimpanya dalam variabel $mysqli	//
$mysqli = new mysqli($host, $user, $pass, $db);