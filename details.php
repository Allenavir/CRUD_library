<?php

$link=new PDO("mysql:host=localhost;dbname=blog_vincent;charset=utf8",'blog_vincent','123');
$id=$_GET['id'];
$donnees=$link->query("SELECT * FROM post WHERE id=$id");
?>

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
 
            foreach ($donnees as $row)
        {
    ?>      <h2>Details de l'article <?php echo $row['id']; ?></h2>
            <p>
            <strong>Titre</strong> : <?php echo $row['title']; ?><br/>
            Contenu :  <?php echo $row['description']; ?> <br />       
            </p> 
    <?php 
            
      }
     
    ?>

    </body>
</html>