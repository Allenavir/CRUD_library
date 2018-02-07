<?php
require_once 'include/header.php'; 

    foreach ($post as $row)
    {
?>      <h2>Details de l'article n°<?php echo $row['id']; ?></h2>
        <p>
        <strong>Titre </strong> : <?php echo $row['title']; ?><br/>
        <strong>Contenu </strong> :  <?php echo $row['description']; ?> <br />       
        </p> 
        <a href="/blog/index.php">Acceuil</a>
<?php 
        
    }
    
include 'include/footer.php';  
?> 