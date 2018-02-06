<?php

function open_database_connection()
{$link=new PDO("mysql:host=localhost;dbname=blog_vincent;charset=utf8",'blog_vincent','123');
 return $link;
}

function close_database_connection(&$link)
{$link=null;
}

function get_all_posts()
{$link=open_database_connection();
 $result=$link->query('SELECT id, title FROM post');
 $posts=array();

     while($row=$result->fetch(PDO::FETCH_ASSOC))
        {$posts[]=$row;
        }
        

close_database_connection($link);
return $posts;
}


function  get_post_by_id ($id)
{$link=open_database_connection(); 
 $result=$link->query("SELECT id, title, description FROM post  WHERE id=$id");

return $result;
}
   