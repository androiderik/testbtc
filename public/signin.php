<?php 
require_once('app/init.php');

if (!empty($_POST))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$signin = $auth->signin([
		'username'=>$username,
		'password'=>$password
		]);
	 if (!session_id())
              session_start();
          $_SESSION['login'] = true;

    if($signin)
    {
    	header('Location: user.php');
    }
    else
    {
    	echo 'fallo';
    }
}

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
	<form action="signin.php" method="post">
      <div class="form-group">  
      <div class="form-group">
      	<legend>Inicia sesión</legend> 
          <label for="name" class="col-md-4 control-label">Usuario</label>                     
          <div class="col-md-6">
              <input type="text" class="form-control" name="username">
          </div>
      </div>

      <div class="form-group">
       <label for="name" class="col-md-4 control-label">Password</label>                            
          <div class="col-md-6">
              <input type="password" class="form-control"  name="password">
          </div>
      </div>

          <div class="col-md-6 col-md-offset-4">
              <button type="submit" value="Sign in" class="btn btn-primary">
                  Ingresar
              </button>
          </div>
      </div>
    </form>
	
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js" /></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>



</html>