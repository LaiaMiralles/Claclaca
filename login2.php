<?php 
session_start(); 
require_once 'classes/connexio.php'; 
require_once 'classes/usuari.php';

$nickname = $_POST['nickname'];
$password = $_POST['password'];
$db = new connexio();
  
$resultat = $db->query("SELECT * FROM usuaris WHERE nickname = '$nickname' AND password = '$password'");
$fila = $resultat->fetch_array(MYSQLI_ASSOC);
if ($fila['nickname'] != NULL && $fila['password'] != NULL){	
	$_SESSION['id'] = $fila['id'];
	$_SESSION['nom'] = $fila['nom'];
	$_SESSION['correu'] = $fila['correu'];
	$_SESSION['nickname'] = $nickname;	
	$_SESSION['password'] = $password;
	
	
	echo "Benvingut! Has iniciat sessió: ".$_SESSION['nom'];
	header('Location: index.php');
}
else{
  $_SESSION['error_entrada'] = 1;
  echo "No has iniciat sessió, registra't!";  
  header('Location: http://claclaca.esy.es/registre.php');
}
?> 