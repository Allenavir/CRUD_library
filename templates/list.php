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
                <?php foreach($posts as $post):?>
                <li>
                    <a href="details.php?id=<?=$post['id']?>"><?=$post['title']?></a>
                </li>
                <?php endforeach?>
            </ul>
    </body>
</html>
</html>