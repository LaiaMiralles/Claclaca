<?php
ob_start();
require_once 'classes/connexio.php';
require_once 'classes/usuari.php';
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Registre - Claclaca</title>
</head>
<body>
tdsdsfd
<?php 
									

					$nom = $_POST['nom'];
					$cognoms = $_POST['cognoms'];						
					$correu = $_POST['correu'];
					$password = $_POST['password'];
					$password_confirm = $_POST['password_confirm'];
					$nickname = $_POST['nickname'];
					 var_dump($password);
					 var_dump($password_confirm);
					
					
					if ((strcmp($password,$password_confirm)) == 0){
						$nou_usuari = new usuari($nom, $cognoms, $correu, $password, $nickname, 0, 0, 0);
						//var_dump($nou_usuari);
						$id = $nou_usuari->registre();
						$db = new connexio();
						//var_dump($id);	
						/*$resultat = $db->query("SELECT * FROM usuaris WHERE nom = '$nom'");
						$fila = $resultat->fetch_array(MYSQLI_ASSOC);
						$_SESSION['id'] = $fila['id'];*/
						$_SESSION['id'] = $id;
						$_SESSION['nom'] = $nom;
						$_SESSION['correu'] = $correu;
						$_SESSION['password'] = $password;
						$_SESSION['nickname'] = $nickname;						
						
						echo "Benvingut! Has iniciat sessió: ".$_SESSION['nom'];
						
					}
					else{
						echo "Confirmació de contrasenya errònia <br> <a href='registre.php'>Tornar a registre</a>";
					}
					
				?>	

</body>
</html>
