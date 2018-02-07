<?php

// load and initialize any global libraries
require_once 'models/model.php';
require_once 'Controller/controllers.php';

// route the request internally
$uri=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if('/CRUD_library/index.php'=== $uri)
    {   
        list_action();
    }

else if('/CRUD_library/index.php/show.php'=== $uri && isset($_GET['id']))
    {
        show_action($_GET['id']);
    }

else if('/CRUD_library/index.php/add.php'=== $uri)
{
    add_book();
}

else if('/CRUD_library/index.php/update.php'=== $uri && isset($_GET['id']))
{
    update_books($_GET['id']);
}

else if('/CRUD_library/index.php/delete.php'=== $uri && isset($_GET['id']))
{
    delete_books($_GET['id']);
}

else{
        header('HTTP/1.1 404 Not Found');
        echo'<html><body><h1>Page Not Found</h1></body></html>';
    }