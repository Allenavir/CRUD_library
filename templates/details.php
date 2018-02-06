<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Details</title>
    </head>

    <body>

    <?php 
 
        foreach ($post as $row)
        {
    ?>      <h2>Details de l'article n°<?php echo $row['id']; ?></h2>
            <p>
            <strong>Titre </strong> : <?php echo $row['title']; ?><br/>
            <strong>Contenu </strong>  <?php echo $row['description']; ?> <br />       
            </p> 
            <a href="index.php">Acceuil</a>
    <?php 
            
      }
     
    ?>

    </body>
</html>