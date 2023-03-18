<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           //Vérification des champs
           if(isset($nom) && isset($prenom) && $age){
                include_once "connexion.php";
                //Ajout administrateur
                $req = mysqli_query($con , "INSERT INTO employe VALUES(NULL, '$nom', '$prenom','$age')");
                // Afficher un message d'erreur en cas de non authorisation 
                if($req){
                    header("location: index.php");
                }else {
                    $message = "Vous n'avez pas les droits nécéssaires pour ajouter un employé";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>