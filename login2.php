<?php 
session_start(); 
require_once 'classes/connexio.php'; 
require_once 'classes/usuari.php';

$correu = $_POST['correu'];
$password = $_POST['password'];
$db = new connexio();
  
$resultat = $db->query("SELECT * FROM usuaris WHERE correu = '$correu' AND password = '$password'");
$fila = $resultat->fetch_array(MYSQLI_ASSOC);
if (isset($correu)){	
	$_SESSION['id'] = $fila['id'];
	$_SESSION['nom'] = $fila['nom'];
	$_SESSION['correu'] = $correu;
	$_SESSION['nickname'] = $fila['nickname'];	
	
	echo "Benvingut! Has iniciat sessió: ".$_SESSION['nom'];
	header('Location: perfil.php');
}
else{
  $_SESSION['error_entrada'] = 1;
  echo "No has iniciat sessió, registra't!";  
  header('Location: registre.php');
}
?> 