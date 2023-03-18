<?php
  // Requête de connexion a la base de données mysql
  $con = mysqli_connect("localhost","root","root","entreprise");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
?>