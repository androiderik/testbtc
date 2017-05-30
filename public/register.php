<?php 
require_once 'app/init.php';
$tableregister->build();

if(isset($_POST['name'],$_POST['ape'],$_POST['user'],$_POST['tel'],
		$_POST['status'])
		&& $_POST['name'] != "" && $_POST['ape'] !="" 
		&& $_POST['user']!="" && $_POST['tel']!="" 
		&& $_POST['status']!="")
 {

		$name = $_POST['name'];
		$ape = $_POST['ape'];
		$user = $_POST['user'];
		$tel = $_POST['tel'];
		$stat = $_POST['status'];

 	$created = $tableregister->create([
 		'name'=> $name,
 		'ape'=> $ape,
 		'user'=>$user,
 		'tel' => $tel,
 		'status' => $stat
 		]);
 	if($created)
 	{	
 	   echo 'datasaved'; 		
 	}else
 	{
 		echo 'dataduplicate';
 	}
 }else {
 	echo 'incomplete';
 }
?>
