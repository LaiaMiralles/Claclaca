<?php
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
<?php 
									
					require_once 'classes/connexio.php';
					require_once 'classes/usuari.php';
					$nom = $_POST['nom'];					
					$correu = $_POST['correu'];
					$password = $_POST['password'];
					$password_confirm = $_POST['password_confirm'];
					$nickname = $_POST['nickname'];
					
					
					
					if ($password == $password_confirm){
						$nou_usuari = new usuari($nom, $correu, $password, $nickname);
						$nou_usuari->insertar();
						$db = new connexio();
							
						$resultat = $db->query("SELECT * FROM usuaris WHERE nom = '$nom'");
						$fila = $resultat->fetch_array(MYSQLI_ASSOC);
						$_SESSION['id'] = $fila['id'];
						$_SESSION['nom'] = $nom;
						$_SESSION['correu'] = $correu;
						$_SESSION['password'] = $password;
						$_SESSION['nickname'] = $nickname;	
						
						
						
						
						echo "Benvingut! Has iniciat sessi�: ".$_SESSION['nom'];
						
						
					}
					else{
						echo "Confirmaci� de contrasenya erronia <br> <a href='registre.php'>Tornar a registre</a>";
					}
					
				?>	

</body>
</html>