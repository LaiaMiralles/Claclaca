<?php 
require_once 'classes/pregunta.php';
$p = new pregunta(NULL,NULL,NULL,NULL);
//var_dump($p);
$num_preguntes = $p->getNumPreguntes();
//var_dump($num_preguntes);
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="pujar_pregunta.php" method="post">
		<span>Pregunta:</span>
		<input type="text" name="pregunta" placeholder="Pregunta" required/><br><br>	
		<span>Resposta Certa:</span>
		<input type="text" name="certa" placeholder="Resposta Certa" required/><br>
		<span>Resposta Falsa 1:</span>
		<input type="text" name="falsa1" placeholder="Resposta Falsa 1" required/><br>
		<span>Resposta Falsa 2:</span>
		<input type="text" name="falsa2" placeholder="Resposta Falsa 2" required/><br>
		<span>Resposta Falsa 3:</span>
		<input type="text" name="falsa3" placeholder="Resposta Falsa 3" required/><br><br>
		
		<span>Nivell de la pregunta:</span>
		<input type="number" name="nivell" value="0"/><br><br>	
		<span>Categoria - - - Preguntes existents</span><br>		
		<input type="radio" name="categoria" value="1">Preguntes trampa (<?=$num_preguntes[1]?>)<br>		
		<input type="radio" name="categoria" value="2">Lògica (<?=$num_preguntes[2]?>)<br>		
		<input type="radio" name="categoria" value="3">Cultura General (<?=$num_preguntes[3]?>)<br>		
		<input type="radio" name="categoria" value="4">Series i pel·lícules (<?=$num_preguntes[4]?>)<br>		
		<input type="radio" name="categoria" value="5">Jocs (<?=$num_preguntes[5]?>)<br>		
		<input type="radio" name="categoria" value="6">Gastronomia (<?=$num_preguntes[6]?>)<br>		
		<input type="radio" name="categoria" value="7">Animals (<?=$num_preguntes[7]?>)<br><br>
		
		<input type="submit" value="enviar">
	</form>
		
</body>
</html>