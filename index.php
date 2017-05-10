<?php 
	include "db/koneksi.php"; 
	$query = $mysqli->query("SELECT * FROM visimisi");
	while($data = $query->fetch_array()){
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  	
</head>
<body>

  <div class="content">
  <hr>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12" style="text-align: justify;">
  			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title" style="text-align: center">Visi</h2>
			  </div>
			  <div class="panel-body">
			  <!-- show data on database -->
			  <?php echo $data['visi']?>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title" style="text-align: center">Misi</h2>
			  </div>
			  <div class="panel-body">
			  	<!-- show data on database -->
				  <?php echo $data['misi']?>
			  </div>
			</div>
  		</div>
  	</div>
  </div>
  <hr>
      <h1 class="text-center" ">Struktur</h1> 
      <br> 
        <figure class="org-chart cf">
          <ul class="administration">
            <li>                  
              <ul class="director">
                <li>
                <!-- DIRECTOR -->
            <?php 
            	$query = $mysqli->query("SELECT * FROM struktur where id=1");
            	$ketua = $query->fetch_array();
            ?>
                  <a href="#" >
                  	<span>
                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/<?php echo $ketua['foto'] ?>" width="100px" height="100px">
                  		
                  	</span>
                  	<p style="margin-top: 40px">
                  		<u><?php echo $ketua['nama']; ?></u>
                  		<br>
                  		<?php echo $ketua['jabatan']; ?>
                  		<br>
                  		NIP: <?php echo $ketua['nip']; ?>	
                  	</p>
                  </a>
				    
				<!-- subdir -->
                  <ul class="subdirector">
                      <li>
                <?php 
	            	$query = $mysqli->query("SELECT * FROM struktur where id=2");
	            	$subketua = $query->fetch_array();
	            ?>
                      	 <a href="#" >
		                  	<span>
		                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/<?php echo $subketua['foto'] ?>" width="100px" height="100px">
		                  		
		                  	</span>
		                  	<p style="margin-top: 40px">
		                  		<u><?php echo $subketua['nama']; ?></u>
		                  		<br>
		                  		<?php echo $subketua['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $subketua['nip']; ?>	
		                  	</p>
		                  </a>
                      </li>
                  </ul>

                  <ul class="departments cf">                             
                    <li>
                <?php 
	            	$query = $mysqli->query("SELECT * FROM struktur where id=3");
	            	$subketua2 = $query->fetch_array();
	            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/<?php echo $subketua2['foto'] ?>" width="100px" height="100px">
		                  		
		                  	</span>
		                  	<p style="margin-top: 40px">
		                  		<u><?php echo $subketua2['nama']; ?></u>
		                  		<br>
		                  		<?php echo $subketua2['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $subketua2['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-a">
                <?php 
	            	$query = $mysqli->query("SELECT * FROM struktur where id=4");
	            	$anggota1 = $query->fetch_array();
	            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/<?php echo $anggota1['foto'] ?>" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u><?php echo $anggota1['nama']; ?></u>
		                  		<br>
		                  		<?php echo $anggota1['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $anggota1['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-b">
                <?php 
	            	$query = $mysqli->query("SELECT * FROM struktur where id=5");
	            	$anggota3 = $query->fetch_array();
	            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/<?php echo $anggota3['foto'] ?>" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u><?php echo $anggota3['nama']; ?></u>
		                  		<br>
		                  		<?php echo $anggota3['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $anggota3['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-c">
                    	<?php 
			            	$query = $mysqli->query("SELECT * FROM struktur where id=6");
			            	$anggota4 = $query->fetch_array();
			            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/<?php echo $anggota4['foto'] ?>" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u><?php echo $anggota4['nama']; ?></u>
		                  		<br>
		                  		<?php echo $anggota4['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $anggota4['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-d">
                    	<?php 
			            	$query = $mysqli->query("SELECT * FROM struktur where id=7");
			            	$anggota5 = $query->fetch_array();
			            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/<?php echo $anggota5['foto'] ?>" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u><?php echo $anggota5['nama']; ?></u>
		                  		<br>
		                  		<?php echo $anggota5['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $anggota5['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-e">
                    	<?php 
			            	$query = $mysqli->query("SELECT * FROM struktur where id=8");
			            	$anggota6 = $query->fetch_array();
			            ?>
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/<?php echo $anggota6['foto'] ?>" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u><?php echo $anggota6['nama']; ?></u>
		                  		<br>
		                  		<?php echo $anggota6['jabatan']; ?>
		                  		<br>
		                  		NIP: <?php echo $anggota6['nip']; ?>	
		                  	</p>
		                  </a>
                    </li>
                  </ul>
                </li>
              </ul>   
            </li>
          </ul>           
        </figure>
    </div>
        <!-- modal -->
<?php } ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>