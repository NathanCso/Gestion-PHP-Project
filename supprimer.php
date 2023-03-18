<?php
// Suppresion par ID
  include_once "connexion.php";
  $id= $_GET['id'];
  $req = mysqli_query($con , "DELETE FROM employe WHERE id = $id");
  // Redirection
  header("Location:index.php")
?>