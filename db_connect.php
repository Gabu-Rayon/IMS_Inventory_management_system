<?php

//Connect to database using  PDO 
 $db_server = 'localhost';
 $db_user =  'root';
 $db_pwd = '';

try{
	$connect = new PDO("mysqli:host=$db_server;dbname=inventory_ims_db",$db_user,$db_pwd);

	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(\Exception $e){

	$error_message = $e->getMessage();
}