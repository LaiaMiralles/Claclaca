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
<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Claclaca</title>
</head>
<body>

<div class="container">
      <div class="hero-unit center">
          <h1><center><img src="imatges/claclaca.png" alt="Claclaca"></center></h1>
        </div>
	<div class="login-container">
            <div id="output"></div>
            
            <div class="form-box">
            <?php
				if(isset($_SESSION['id'])){
					echo "<p>Has iniciat sessio: " . $_SESSION['nickname'] . "";
					echo "<p><a href='logout.php'>Log out</a></p>";
					}
				else{
			?>
            
                <form action="login2.php" method="POST">
                    <input name="nickname" type="nickname" placeholder="nickname">
                    <input name="password" type="password" placeholder="password">
                    <input type="submit" value="enviar">
                    
                </form>
                
               <?php } ?> 
            </div>
        </div>
        
</div>

</body>
</html>


