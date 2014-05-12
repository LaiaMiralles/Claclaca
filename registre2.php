<?php 
$db = new connexio();

// verificamos si se han enviado ya las variables necesarias.
if ($db->query=isset($_POST["usuari"])) {
   $usuari = $_POST["usuari"];
   $nick = $_POST["nick"];   
   $password = $_POST["password"];
   $password_confirm = $_POST["password_confirm"];
   $email = $_POST["email"];
   // Hay campos en blanco
   if($db->query=($usuari==NULL|$nick==NULL|$password==NULL|$password_confirm==NULL|$email==NULL)) {
      echo "un campo está vacio.";
      
   }else{
      // ¿Coinciden las contraseñas?
      if($db->query=$password!=$password_confirm) {
         echo "Las contraseñas no coinciden";
         
      }else{
         // Comprobamos si el nombre de usuario o la cuenta de correo ya existían
         $checkuser = $db->query("SELECT nickname FROM usuaris WHERE nickname='$nick'");
         $username_exist = $db->query($checkuser);
         $checkemail = $db->query("SELECT correu FROM usuaris WHERE correu='$email'");
         $email_exist = $db->query($checkemail);
         if ($email_exist>0|$username_exist>0) {
            echo "El nombre de usuario o la cuenta de correo estan ya en uso";
            
         }else{
            $db->query = 'INSERT INTO usuaris (nom, correu, password, nickname)
            VALUES (\''.$usuari.'\',\''.$email.'\',\''.$password.'\',\''.$nick.'\')';
            echo 'El usuario '.$usuari.' ha sido registrado de manera satisfactoria.<br />';
            echo 'Ahora puede entrar ingresando su usuario y su password<br />';        
                              

         }
      }
   }
}
$db->close();
?>