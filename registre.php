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

<form class="form-horizontal" action="registre2.php" method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Registrar-se</legend>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="nom">Nom</label>
      <div class="controls">
        <input type="text" id="nom" name="nom" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">Escriu el teu nom.</p>
      </div>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="cognoms">Cognoms</label>
      <div class="controls">
        <input type="text" id="cognoms" name="cognoms" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">Escriu el teu cognom.</p>
      </div>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="nickname">Nick</label>
      <div class="controls">
        <input type="text" id="nickname" name="nickname" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">El teu nick pot tenir lletres i números.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="correu" >E-mail</label>
      <div class="controls">
        <input type="text" id="correu" name="correu" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">Escriu el teu correu</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Contrasenya</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">Escriu la teva contrasenya.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Confirmar Contrasenya)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" required="required" class="input-xlarge">
        <p class="help-block">Repeteix la teva contrasenya.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="submit" class="btn btn-success" name="enviar">Register</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>