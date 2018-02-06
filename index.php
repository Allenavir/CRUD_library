<?php

$link=new PDO("mysql:host=localhost;dbname=blog_vincent;charset=utf8",'blog_vincent','123');
$result=$link->query('SELECT id, title, description FROM post');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List of Posts</title>
    </head>

    <body>
        <h1>List of Posts</h1>
        <ul>
        <?php while($row=$result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>               
                <a href="details.php?id= <?=$row['id']?>">
                <?= $row['title']?>
                </a>                
            </li>
        <?php endwhile ?>
        </ul>
    </body>
</html>