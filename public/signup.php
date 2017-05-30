<?php 
require_once 'app/init.php';

if(!empty($_POST))
 {
 	$email = $_POST ['email'];
 	$username  =  $_POST['username'];
 	$password = $_POST['password'];

 	$created = $auth->create([
 		'email'=> $email,
 		'username'=> $username,
 		'password'=>$password
 		]);
 	if($created)
 	{
       header('Location: user.php');
 	}else
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
	
	 <form action="signup.php" method="post">

      <div class="form-group">  
      <legend>Registrate</legend> 
      <label for="name" class="col-md-4 control-label">E-mail</label>                     
          <div class="col-md-6">
              <input type="text" class="form-control" name="email">
          </div>
      </div>


      <div class="form-group">
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
              <button type="submit" value="Sign up" class="btn btn-primary">
                  Registrar
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
