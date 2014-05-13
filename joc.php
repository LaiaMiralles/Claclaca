<?php
	require_once 'classes/connexio';
	require_once 'classes/usuari.php';
	require_once 'classes/pregunta.php';
	require_once 'classes/partida.php'; 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<scritp src="javascript/game.js"></scritp>
<title>Claclaca</title>
</head>

<body>
<header>
<div class="container">
 <div class="row">
   <div class="span12">
     <div class="head">
       <div class="row-fluid">
           <div class="span12">
               <div class="span6">
                   	<div class="span4 offset2" style="margin-top:15px;">
                   	 <h2><?php echo $_SESSION['nom'];?></h2>
               		</div>
               </div>
           </div>
       </div>
     </div>
   </div>
 </div>
</div>
</header>

<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
          <h1>Claclaca<small><font face="Tahoma" color="red">?¿?</font></small></h1>
        </div>
        <br />
      <div class="thumbnail">
        	<canvas id="cuadro1" width="200" height="100">

				Canvas not supported by your browser.
			</canvas></p>

			<script type="application/javascript" src="game.js"></script>
        	
      </div>
    </div>
  </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <br>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">Ranking</h4>
                  <p class="footertext">algo del ranking.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">perfil</h4>
                  <p class="footertext">All the images here are hand drawn by this man.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">foro</h4>
                  <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><p class="footertext">Copyright 2014</p></center></p>
        </div>
    </div>
</div>

</body>
</html>