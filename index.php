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
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title" style="text-align: center">Misi</h2>
			  </div>
			  <div class="panel-body">
			  	<!-- show data on database -->
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
                  <a href="#" data-toggle="modal" data-target="#dir"><span>Director</span></a>
                  <!-- MODAL -->
                  <div class="modal fade" id="dir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Profile</h4>
					      </div>
					      <div class="modal-body" style="text-align: center;">
						      	<img width="200px" height="200px" src="img/walp.jpg" alt="..." class="img-circle">
						      	<hr>
						      	<p>
						      		<strong>NAMA</strong>
						      		<br>
						      		<!-- get nama in DB -->
						      		<br>
						      		<strong>NIP</strong>
						      		<br>
						      		<!-- get nip in DB -->
						      	</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				<!-- END -->
				    
				<!-- subdir -->
                  <ul class="subdirector">
                      <li><a href="#" data-toggle="modal" data-target="#subdir"><span>Assistante Director</span></a></li>
                  </ul>
                  <!-- MODAL -->
                  <div class="modal fade" id="subdir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Profile</h4>
					      </div>
					      <div class="modal-body" style="text-align: center;">
						      	<img width="200px" height="200px" src=".." alt="..." class="img-circle">
						      	<hr>
						      	<p>
						      		<strong>NAMA</strong>
						      		<br>
						      		<!-- get nama in DB -->
						      		<br>
						      		<strong>NIP</strong>
						      		<br>
						      		<!-- get nip in DB -->
						      	</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				<!-- END -->

                  <ul class="departments cf">                             
                    <li><a href="#"><span>Administration</span></a></li>
                    <li class="department dep-a"><a href="#"><span>Department A</span></a></li>
                    <li class="department dep-b"><a href="#"><span>Department B</span></a></li>
                    <li class="department dep-c"><a href="#"><span>Department C</span></a></li>
                    <li class="department dep-d"><a href="#"><span>Department D</span></a></li>
                    <li class="department dep-e"><a href="#"><span>Department E</span></a></li>
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