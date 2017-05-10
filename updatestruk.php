<?php
  include "db/koneksi.php";

  	$id = $_GET['id'];
	$query = $mysqli->query("SELECT * FROM struktur WHERE id='$id'");
	$data = $query->fetch_array();

  $id      		= $_POST['id'];
  $nama    		= $_POST['nama'];
  $nip     		= $_POST['nip'];
  $jabatan 		= $_POST['jabatan'];

  /*$foto 		= $_FILES['foto']['name'];
  $upload 		= 'img/';
  $imgExt 		= strtolower(pathinfo($foto,PATHINFO_EXTENSION));
  $userpic 		= rand(1000,1000000).".".$imgExt
  $uploadfile 	= $uploaddir.$foto;
  echo "$uploadfile";

  unlink($upload.$edit_row['userPic']);
  move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {*/
  if($_FILES['foto']['name']!='')
        {
           	     $tmp_name = $_FILES["foto"]["tmp_name"];
            	 $namefile = $_FILES["foto"]["name"];
				 $ext = end(explode(".", $namefile));
				 $image_name=time().".".$ext;
            	 $fileUpload = move_uploaded_file($tmp_name,"img/".$image_name);
		}
		else
		{
				$image_name=$data['foto'];
		}

  $mysqli->query("UPDATE struktur SET nama='$nama' , nip='$nip' , jabatan='$jabatan', foto='$image_name' WHERE id='$id' ");
  header('location:isi.php');

  /*if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        IF($_FILES['foto']['name']!='')
        {
				 $file='img/'.$data['foto'];
				 @unlink($file);
           	     $tmp_name = $_FILES["foto"]["tmp_name"];
            	 $namefile = $_FILES["foto"]["name"];
				 $ext = end(explode(".", $namefile));
				 $image_name=time().".".$ext;
            	 $fileUpload = move_uploaded_file($tmp_name,"img/".$image_name);
		}
		else
		{
				$image_name=$data['foto'];
		}
		
 	 	$sqlAdd ="update  tbl_emp set name='".$name."', image='".$image_name."'  where id=".$_GET['id'];
	  	mysql_query($sqlAdd);
	}*/

 ?>
