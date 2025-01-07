
<?php
   require "class.php" ;
   require "config.php" ; 


   $dd = new commentaire($link);

   if(isset($_POST['submit'])){
    $nom = $_POST['name'] ;
    $message = $_POST['message'] ;
   $dd->create($nom,$message);

   }
   
   $toutCommentaire = $dd->read();

   ?>
   


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de Feedback</title>
</head>
<body>
    <h1>Soumettre un Commentaire</h1>
    <form action="" method="POST">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message" rows="4" required name = "message"></textarea><br><br>

        <input type="submit" value="Envoyer le commentaire" name = "submit">
    </form>

            <table border>
        <tr>
            <th>nome</th>
            <th>message</th>
            <th>hrodatage</th>
        </tr>

        <?php foreach ($toutCommentaire as $comment):?>
        <tr>
            <td><?= $comment["nom"]; ?></td>
            <td><?= $comment["message"] ?></td>
            <td><?= $comment["horodatage"] ?></td>
        </tr>
       <?php endforeach; ?>
        </table>
</body>
</html>


    
