<?php 
	include "db/koneksi.php";
	$query = $mysqli->query("SELECT * FROM visimisi WHERE id='$_GET[id]'");
	$data = $query->fetch_array();

	/*$id = $_POST['id'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];
	$mysqli->query("UPDATE visimisi SET visi = '$visi', misi = '$misi', WHERE id='$id'"); */
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
			<h1 class="text-center">
				Edit Visi & Misi
			</h1>
				<form role="form" action="update.php">
				  <div class="form-group">
				    <label for="visi">Visi</label>
				    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				    <textarea rows="8" class="form-control" name="visi"><?php echo $data['visi'] ?></textarea>
				  </div>
				  <div class="form-group">
				    <label for="misi">Misi</label>
				    <textarea rows="8" class="form-control" name="misi"><?php echo $data['misi'] ?></textarea>
				  </div>

				  <button type="submit" class="btn btn-primary pull-right">Simpan</button>
				</form>
		</div>
	</div>
</body>
</html>