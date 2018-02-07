<?php ob_start()?>

<?php
    foreach ($post as $row)
    {  
        $title=$row['titre']?>

        <h2><?php echo $row['titre']; ?></h2>
        <p>
        <img src=<?=$row['image']?> /><br/>
        <strong>Auteur </strong> : <?=$row['auteur']?><br/></br>
        <strong>Contenu </strong> :  <?php echo $row['description']; ?> <br/> <br/>        
               

        <?php if($row['Statut']==0) 
        { ?>
        <p>Le livre est actuellement disponible<p><br/>  

        <?php 
        }
        if($row['Statut']==1)
        { ?>
        <p> Le livre n'est actuellement pas disponible <p><br/>
        
        <?php } ?>

        <a href="update.php?id=<?=$row['id']; ?>">Modifier ce livre </a> </br>
        <a href="delete.php?id=<?=$row['id']; ?>">Supprimer ce livre </a> 

        </p> 
        <a href="/CRUD_library/index.php">Acceuil</a>

<?php         
    }
  
$content =ob_get_clean();
include 'layout.php';

?> 