<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<p>Sessió tancada. Fins un altra!</p>
<br /><a href="index.php">Tornar a l'inici</a>
<br /><a href="login.php">Tornar al login</a>
</body>
</html>
