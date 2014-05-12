<?php ?>
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
		<span>Categoria:</span><br>		
		<input type="radio" name="categoria" value="1">Preguntes trampa<br>		
		<input type="radio" name="categoria" value="2">Lògica<br>		
		<input type="radio" name="categoria" value="3">Cultura General<br>		
		<input type="radio" name="categoria" value="4">Series i pel·lícules<br>		
		<input type="radio" name="categoria" value="5">Jocs<br>		
		<input type="radio" name="categoria" value="6">Gastronomia<br>		
		<input type="radio" name="categoria" value="7">Animals<br><br>
		
		<input type="submit" value="enviar">
	</form>
</body>
</html>