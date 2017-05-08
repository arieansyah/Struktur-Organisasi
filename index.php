<?php 
	include "db/koneksi.php"; 
	$query = $mysqli->query("SELECT * FROM visimisi");
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
			  <?php foreach ($query as $key)
			  	echo $key['visi']
			  ?>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title" style="text-align: center">Misi</h2>
			  </div>
			  <div class="panel-body">
			  	<!-- show data on database -->
				  <?php foreach ($query as $key)
				  	echo $key['misi']
				  ?>
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
                  <a href="#" >
                  	<span>
                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/walp.jpg" width="100px" height="100px">
                  		
                  	</span>
                  	<p style="margin-top: 40px">
                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
                  		<br>
                  		NIP:	
                  	</p>
                  </a>
				    
				<!-- subdir -->
                  <ul class="subdirector">
                      <li>
                      	 <a href="#" >
		                  	<span>
		                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/walp.jpg" width="100px" height="100px">
		                  		
		                  	</span>
		                  	<p style="margin-top: 40px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                      </li>
                  </ul>

                  <ul class="departments cf">                             
                    <li>
                    	 <a href="#" >
		                  	<span>
		                  		<img style="margin:0px 5px 0px 5px" class="img-circle pull-left" src="img/walp.jpg" width="100px" height="100px">
		                  		
		                  	</span>
		                  	<p style="margin-top: 40px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-a">
                    	 <a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/walp.jpg" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-b">
                    	<a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/walp.jpg" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-c">
                    	<a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/walp.jpg" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-d">
                    	<a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/walp.jpg" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
		                  	</p>
		                  </a>
                    </li>
                    <li class="department dep-e">
                    	<a href="#" >
		                  	<span>
		                  		<img class="img-circle" src="img/walp.jpg" width="120px" height="120px">
		                  	</span>
		                  	<p style="margin-top: 20px">
		                  		<u>Jhon Smith Abdri.M.A,M.Hum</u>
		                  		<br>
		                  		NIP:	
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
	
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>