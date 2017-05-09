<?php 
	include "db/koneksi.php"; 
	$query = $mysqli->query("SELECT * FROM visimisi");
	$struktur = $mysqli->query("SELECT * FROM struktur");
	while($data = $query->fetch_array()){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h1>Halaman Edit</h1>
				</div>
			</div>
			<br>
			<div class="col-md-12" style="text-align: justify;">
	  			<div class="panel panel-default">
				  <div class="panel-heading">
				    <h2 class="panel-title" style="text-align: center">Visi</h2>
				  </div>
				  <div class="panel-body">
				  	<!-- show data on database -->
				  	<?php 
						echo $data['visi']
					?>
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h2 class="panel-title" style="text-align: center">Misi</h2>
				  </div>
				  <div class="panel-body">
				  	<!-- show data on database -->
				  	<?php
						echo $data['misi']
					?>
				  </div>	
				</div>
					<a href="editvm.php?id=<?php echo $data['id']; ?>">
						<button type="button" class="btn btn-success btn-lg btn-block">Edit Visi Misi</button>
					</a>
	  		</div>
		</div>
	<?php } ?>
		<div class="row">
			<div class="col-md-12">
			<h1 class="text-center">Struktur</h1>
				<table class="table table-hover">
				  <tr>
				  	<th>No</th>
				  	<th>Nama</th>
				  	<th>NIP</th>
				  	<th>Action</th>
				  </tr>

					<?php 
						$i=1;
						foreach ($struktur as $key) {
					?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $key['nama'] ?></td>
							<td><?php echo $key['nip'] ?></td>
							<td>
								<a href="edits.php?id=<?php echo $key['id']; ?>">Edit</a>
								<!-- <a href="edits.php"><button type="button" class="btn btn-primary">Edit</button></a> -->
							</td>
						</tr>

					<?php
						}
					?>				  
				</table>
			</div>
		</div>
	</div>
</body>
</html>