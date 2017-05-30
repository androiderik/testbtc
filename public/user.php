<?php 
require_once 'app/init.php';
$tableregister->build();
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:index.php");
    die();
}
$tableus =  $tableregister->tableusers(['status'=>'activo']);
$output = array_map(function ($tableus) { return $tableus->user; }, $tableus);
$id = implode(', ', $output);
$name = implode(', ', $output);
$ape = implode(', ', $output);
$user = implode(', ', $output);
$tel = implode(', ', $output);
$status = implode(', ', $output);
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
    <div class="col-md-6 col-md-offset-4">
      <h2>Registro usuarios</h2>
    </div>
    <div class="col-md-1 col-md-offset-10">
    	<h4>Usuario<a href="signout.php"><br>Salir</a> </h4>	
    </div>
  <table class="table">
    <thead>
      <tr>
      	<th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Telefono</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td> </td>
        <td><?php  echo $tableus2;?></td>
        <td></td>
         <td><?php  echo $user;?></td>
        <td>5567890345</td>
        <td>activo</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>



 
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
      <form  id="form" class="row">

      <div class="form-group">   
      <label for="name" class="col-md-4 control-label">Nombre</label>                     
          <div class="col-md-6">
              <input type="text" class="form-control" name="name">
          </div>
      </div>

      <div class="form-group">  
       <label for="name" class="col-md-4 control-label">Apellido</label>                  
          <div class="col-md-6">                          
               <input type="text" class="form-control" name="ape">
          </div>
      </div>

      <div class="form-group">
         <label for="name" class="col-md-4 control-label">Usuario</label>  
          <div class="col-md-6">
                <input type="text" class="form-control" name="user">
          </div>
      </div>

      <div class="form-group">
       <label for="name" class="col-md-4 control-label">Teléfono</label>                            
          <div class="col-md-6">
              <input type="text" class="form-control"  name="tel">
          </div>
      </div>

       <div class="form-group">
         <label for="name" class="col-md-4 control-label">Status</label>  
          <div class="col-md-6">
              <input type="text" class="form-control" name="status">
          </div>
      </div>

          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Registrar
              </button>
          </div>
      </div>
    </form>
	
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


<!-- Ajax-->
<script>
    $(function($){
      var form = $('form#form');
      form.submit(function(e){
      e.preventDefault();
      dataString = form.serialize();
       $.ajax({
        type:'POST',
        url:'register.php',
        dataType: "html",
        data: dataString,
          success:function(data){
           switch (data.trim()) {
              case 'incomplete':
                swal("Error", "Datos incompletos.", "error");
                break;
              case 'dataduplicate':
                swal("Error", "Existe un duplicado de datos en nuestra base.", "error");
                break; 
              case 'datasaved':
                swal("Exito", "Datos guardados.", "success");
                break;  
              default:
              swal("Exito", "Datos guardados.", "success");   
            }
            console.log(data)
        },
          complete:function(){
        }
        });
        return false;
        })
    }) ;
    </script>
