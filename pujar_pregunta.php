<?php
require_once 'classes/connexio.php';
$pregunta = $_POST['pregunta'];
$r_certa = $_POST['certa'];
$r_falsa1 = $_POST['falsa1'];
$r_falsa2 = $_POST['falsa2'];
$r_falsa3 = $_POST['falsa3'];
$nivell_pregunta = $_POST['nivell'];
$categoria = $_POST['categoria'];
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$db = new connexio();
		if($db->query("INSERT INTO preguntes (pregunta, nivell_pregunta, categoria) VALUES ('$pregunta', $nivell_pregunta, $categoria)")){
			echo "Pregunta pujada <br>";
			
			$resultat = $db->query("SELECT * FROM preguntes WHERE pregunta = '$pregunta' ORDER BY id_pregunta DESC LIMIT 0,1");
			$fila = $resultat->fetch_array(MYSQLI_ASSOC);
			$id_pregunta = $fila['id_pregunta'];
			//echo $id_pregunta;
			$query1 = "INSERT INTO respostes (id_pregunta, resposta) VALUES ($id_pregunta, '$r_certa')";
			$query2 = "INSERT INTO respostes (id_pregunta, resposta) VALUES ($id_pregunta, '$r_falsa1')";
			$query3 = "INSERT INTO respostes (id_pregunta, resposta) VALUES ($id_pregunta, '$r_falsa2')";
			$query4 = "INSERT INTO respostes (id_pregunta, resposta) VALUES ($id_pregunta, '$r_falsa3')";
			
		/*	if($db->query($query1) && $db->query($query2) && $db->query($query3) && $db->query($query4)){
				echo "Respostes pujades <br>";				
			}
			else{
				echo "No es poden pujar les respostes<br>"
			}*/
			if ($db->query($query1)){
				echo "Primera resposta <br>";
			}
			if ($db->query($query2)){
				echo "Segona resposta <br>";
			}
			if ($db->query($query3)){
				echo "Tercera resposta <br>";
			}
			if ($db->query($query4)){
				echo "Quarta resposta <br>";
			}
			
			$resultat = $db->query("SELECT id_resposta FROM respostes WHERE resposta = '$r_certa' AND id_pregunta = $id_pregunta");
			$fila = $resultat->fetch_array(MYSQLI_ASSOC);  
			$id_r_certa = $fila['id_resposta'];
			echo $id_r_certa."<br>";
			
			if ($db->query("UPDATE preguntes set resposta_correcta = $id_r_certa WHERE id_pregunta = $id_pregunta")){
				echo "Anotada resposta correcta <br>";
			}
			else{
				echo "Peta al anotar resposta correcta";
			}			
		}
		else{
			echo "No es pot pujar la pregunta <br>";
		}
		$db->close();
		
		
	?>
	<a href="crear_pregunta.php">Tornar al formulari</a>
</body>
</html>