<?php $title='List of Posts'?>

<?php ob_start()?>
        <h1>Livres que vous pourrez trouver dans notre bibliothèque</h1>
            <ul>
                <?php foreach($posts as $post):?>
                <li>
                    <a href="index.php/show.php?id=<?=$post['id']?>"><?=$post['titre']?></a>                    
                </li>
                <?php endforeach?>
            </ul>     

            <a href="/CRUD_library/index.php/add.php">Ajputer un article</a>

<?php 
$content=ob_get_clean();
include 'layout.php'
?>


