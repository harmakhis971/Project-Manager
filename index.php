<?php
session_start();
define('ROOT_DIR',str_replace('\\\\', '/', realpath(dirname(__FILE__))).'\\');
include_once("Models/lib_2.php");
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'BOOTSTART.php';


if(isset($_SESSION['id_user'])){

	if(isset($_SESSION['u_id_user'])){
	
		header("Location: http://$host$uri/Controllers/$extra");
		//require_once("Controllers/BOOTSTART.php");
		//var_dump($_SESSION);
	
	}else {
	
	die('Vous n\'avez pas accès a cette application');
	
	}


}else {

die("Vous n'etes pas connecté !");

}


?>

