<?php 

require_once 'app/init.php';

$auth->build();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h2>Registrate para ingresar a la plataforma o inicia sesion</h2>
    </div>

 
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
			<div class="col-md-10">
			<?php if($auth->check() ){ ?>
		    	 <p>TE HAS LOGEADO<a href="signout.php">Salir</a></p>
	        <?php }else{ ?>
		     	 <h3>No te has logeado <br><a href="signup.php">Registrate</a> or <a href="signin.php">Inicia sesión</a></h3>
	        <?php } ?>
			</div>

	
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js" /></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>


