<?php
session_start();
require_once 'classes/partida.php';
require_once 'classes/pregunta.php';

$partida = new partida();
$nivell = 4;
//echo $nivell;
$pregunta = $partida->novaPregunta($nivell);
//var_dump($pregunta);
$respostes = $partida->getRespostes($pregunta[0]);

//var_dump($respostes);
/*if (!isset($_SESSION['nivell'])){
	$_SESSION['nivell'] = 1;
}*/

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/game.js"></script>

	<title>Claclaca</title>
	<script type="text/javascript">
		person = { name: 'Joe Blow Job' };
		function myfunction() {
   		document.write(person.name);
		}		
	</script>
	<script>
	$(document).ready(function(){
		var nivell = <?=$nivell?>;
		if(nivell == 1){
			$("#nivell1").click(function(){
				obrirFinestra();				
			});
			$("#nivell1").hover(function()
	                {
	                    $("#nivell1").css("cursor","pointer");
	                 	$("#nivell1").attr('src', 'imatges/1roig.png');
	                }, function()
	                {
	                    $("#nivell1").css("cursor","default");
	                  $("#nivell1").attr('src', 'imatges/1.png');
	          });
		}
		else if(nivell == 2){
			$("#nivell2").click(function(){
				obrirFinestra();				
			});
			$("#nivell2").hover(function()
	                {
	                    $("#nivell2").css("cursor","pointer");
	                 	$("#nivell2").attr('src', 'imatges/2roig.png');
	                }, function()
	                {
	                    $("#nivell2").css("cursor","default");
	                 	$("#nivell2").attr('src', 'imatges/2.png');
	          });
		}
		else if(nivell == 3){
			$("#nivell3").click(function(){
				obrirFinestra();				
			});
			$("#nivell3").hover(function()
	                {
	                    $("#nivell3").css("cursor","pointer");
	                  	$("#nivell3").attr('src', 'imatges/3roig.png');
	                }, function()
	                {
	                    $("#nivell3").css("cursor","default");
	                 	$("#nivell3").attr('src', 'imatges/3.png');
	          });
		}
		else if(nivell == 4){
			$("#nivell4").click(function(){
				obrirFinestra();			
			});
			$("#nivell4").hover(function()
	                {
	                    $("#nivell4").css("cursor","pointer");
	                    $("#nivell4").attr('src', 'imatges/4roig.png');
	                }, function()
	                {
	                    $("#nivell4").css("cursor","default");
	                 	$("#nivell4").attr('src', 'imatges/4.png');
	          });
		}
		/*if(nivell > 1){
			$("#nivell1").attr('src', 'imatges/1verd.png');
		}*/
		for(var i = 1; i < nivell; i++){
			$("#nivell"+i).attr('src', 'imatges/'+i+'verd.png');
		}
	});
	</script>
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
          <h1><center><img src="imatges/claclaca.png" alt="Claclaca"></center></h1>
        </div>
        <br />
        
        <div class="btn-group btn-group-justified">
  			<div class="btn-group">
				<img id="nivell1" alt="1" src="imatges/1.png"> <!-- onClick="obrirFinestra()" -->
					<div id="finestra">
 						<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#006394">
 							<?php 
 							if(isset($_SESSION['ultim_resultat'])){
 								echo $_SESSION['ultim_resultat'];
 							}
 							else{
 								echo "Bienvenidos";
 							}
 							if(isset($_SESSION['puntuacio'])){
 								echo "<span>Puntuació: ".$_SESSION['puntuacio']."</span><br>";
 							}
 							if(isset($_SESSION['ratxa_correctes'])){
 								echo "<span>Ratxa d'acerts: ".$_SESSION['ratxa_correctes']."</span><br>";
 							}
 							if(isset($_SESSION['ratxa_fallades'])){
 								echo "<span>Ratxa d'errors: ".$_SESSION['ratxa_fallades']."</span><br>";
 							}
 							?>
 						</div>
 							<p style="padding: 5px; text-align: justify; line-height:normal">
 								<form action="comprovar_resposta.php" method="post">
									<p><b><?=utf8_encode($pregunta[1])?></b></p>
									<input type="hidden" name="nivell" value="<?=$nivell?>" />
									<input type="hidden" name="correcta" value="<?=$respostes[0][0]?>" />
									<?php 
										shuffle($respostes);
										for ($i = 0; $i < 4; $i++){
											echo "<input type='radio' name='resposta' value='".$respostes[$i][0]."' /><label>".utf8_encode($respostes[$i][1])."</label><br>";
										}
									?>  
									<input type="submit" value="Confirmar" />
								</form>
 							</p>
  						<div style="padding: 10px; background-color: #F0F0F0; text-align: center; margin-top: 44px;">
  							<input id="btnAceptar" onclick="tancarFinestra();" name="btnAceptar" size="20" type="button" value="Aceptar" />
 						</div>
					</div>     
  			</div>
  			<div class="btn-group">
    			<img id="nivell2" alt="2" src="imatges/2.png">
  			</div>
  			<div class="btn-group">
    			<img id="nivell3" alt="3" src="imatges/3.png">
  			</div>
  			<div class="btn-group">
    			<img id="nivell4" alt="4" src="imatges/4.png">
  			</div>
		</div>
		
		<!--<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		<script type="text/javascript" src="javascript/game.js"></script>-->
        	
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
<script type="text/javascript">
var popup = <?=$_SESSION['seguir_jugant']?>;
if(popup == 1){
	myfunction();
	obrirFinestra();
}
</script>
</body>
</html>