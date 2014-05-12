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
session_start();
require_once "classes/connexio.php";
require_once "classes/usuari.php";
?>

<form class="form-horizontal" action='registre.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Registrar-se</legend>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="usuari">Nom</label>
      <div class="controls">
        <input type="text" id="usuari" name="usuari" placeholder="" class="input-xlarge">
        <p class="help-block">Escriu el teu nom complet.</p>
      </div>
    </div>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="nick">Nick</label>
      <div class="controls">
        <input type="text" id="nick" name="nick" placeholder="" class="input-xlarge">
        <p class="help-block">El teu nick pot tenir lletres i números.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email" >E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Escriu el teu correu</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Contrasenya</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Escriu la teva contrasenya.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Confirmar Contrasenya)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Repeteix la teva contrasenya.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" name="enviar">Register</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>