<?php ob_start()?>

<?php
    foreach ($post as $row)
    {
 
        $title=$row['title']?>

        <h2>Details de l'article n°<?php echo $row['id']; ?></h2>
        <p>
        <strong>Titre </strong> : <?php echo $row['title']; ?><br/>
        <strong>Publié le </strong> : <?=$row['date']?><br/>
        <strong>Contenu </strong> :  <?php echo $row['description']; ?> <br />       
        </p> 
        <a href="/blogv1/index.php">Acceuil</a>

<?php         
    }
  
$content =ob_get_clean();
include 'layout.php';

?> 