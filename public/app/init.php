<?php 
 session_start();

 $app = __DIR__;

 require_once "{$app}/classes/Database.php";	
 require_once "{$app}/classes/Auth.php";
 require_once "{$app}/classes/Hash.php";
 require_once "{$app}/classes/TableRegister.php";

 $database = new Database;
 $hash = new Hash;

//$user = $database->table('users')->where('username', '=', 'adminch')->first();
//var_dump($user->password);

//var_dump($hash->make('cats'));


 $tableregister = new TableRegister($database);
 $auth = new Auth($database, $hash);