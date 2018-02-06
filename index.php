<?php

$link=new PDO("mysql:host=localhost;dbname=blog_vincent;charset=utf8",'blog_vincent','123');
$result=$link->query('SELECT id, title, description FROM post');

$posts=array();
while($row=$result->fetch(PDO::FETCH_ASSOC))
    {
        $posts[]=$row;
    }
$link=null;
// include the HTML presentation code
require 'templates/list.php';