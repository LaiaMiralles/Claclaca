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
 <div class="hero-unit center">
          <h1><center><img src="imatges/claclaca.png" alt="Claclaca"></center></h1>


<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="registre2.php" method="post">
          <fieldset>
            <legend class="text-center">Registre de nou usuari</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nom</label>
              <div class="col-md-9">
                <input id="nom" name="nom" type="text" placeholder="El teu nom" class="form-control">
              </div>
            </div>
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="cognom">Cognom</label>
              <div class="col-md-9">
                <input id="cognom" name="cognom" type="text" placeholder="El teu cognom" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Correu</label>
              <div class="col-md-9">
                <input id="correu" name="correu" type="text" placeholder="El teu correu" class="form-control">
              </div>
            </div>
            
            <!-- Nickname input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nickname">Nickname</label>
              <div class="col-md-9">
                 <input  id="nickname" name="nickname" placeholder="Nickname" class="form-control">
              </div>
            </div>
    
            <!-- Password input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="password">Contrasenya</label>
              <div class="col-md-9">
                 <input  id="password" name="password" type="password" placeholder="Contrasenya" class="form-control">
              </div>
            </div>
            
            <!-- Password confirm input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="password_confirm">Contrasenya</label>
              <div class="col-md-9">
                 <input  id="password_confirm" name="password_confirm" type="password" placeholder="Confirmar contrasenya" class="form-control">
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Registra't</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</div>


</body>
</html>