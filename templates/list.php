<?php  include 'include/header.php';   ?> 

        <h1>List of Posts</h1>
            <ul>
                <?php foreach($posts as $post):?>
                <li>
                    <a href="index.php/show.php?id=<?=$post['id']?>"><?=$post['title']?></a>
                </li>
                <?php endforeach?>
            </ul>     

<?php  include 'include/footer.php';   ?> 
