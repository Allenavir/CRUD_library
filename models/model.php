<?php

function open_database_connection()
{$link=new PDO("mysql:host=localhost;dbname=library;charset=utf8",'library','123');
 return $link;
}

function close_database_connection(&$link)
{$link=null;
}

function get_all_posts()
{$link=open_database_connection();
 $result=$link->query('SELECT id, titre FROM livres');
 $posts=array();

     while($row=$result->fetch(PDO::FETCH_ASSOC))
        {$posts[]=$row;
        }
        

close_database_connection($link);
return $posts;
}


function  get_post_by_id ($id)
{$link=open_database_connection(); 
 $result=$link->query("SELECT id, titre, description, auteur, Statut, image FROM livres  WHERE id=$id");

return $result;
close_database_connection($link);
}


function add_new_book()
{$link=open_database_connection(); 

    $titre = "";
    $auteur = "";
    $description = "";
	
	if (isset($_POST['sauvegarder'])) {
        if(!empty($_POST['titre']) && !empty($_POST['auteur']) && !empty($_POST['description']) && !empty($_POST['image'])) {
            if (preg_match("/([^-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['titre']) 
            && preg_match("/([^-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['auteur']) 
            && preg_match("/([^-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['description'])){

                     $titre = $_POST['titre'];
                     $auteur = $_POST['auteur'];
                     $description = $_POST['description'];
                     $image = $_POST['image'];

                      $result=$link->prepare("INSERT INTO livres (titre, auteur ,description, image) VALUES (:titre, :auteur ,:description, :image)"); 
                     $result->execute(array(':titre' => $titre, ':auteur' => $auteur, ':description' => $description, ':image'=>$image));


                     $_SESSION['message'] = "Votre livre a été enregistré dans la base de données"; 
            }
            else  $_SESSION['message'] = "Un des caractères est interdit";
         }

         else  $_SESSION['message'] = "Un champs n'as pas été rempli";
        
    }

    else  $_SESSION['message'] = "Votre livre n'a  pas été enregistre dans la base de données";

    close_database_connection($link);        
}


function update_book($id)
{$link=open_database_connection(); 

    $titre = "";
    $auteur = "";
    $description = "";
	
	if (isset($_POST['Modifier'])) {
		$titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $result=$link->prepare("UPDATE livres SET titre=?, auteur=?, description=?, image=? WHERE id=?");  
        $result->execute(array( $titre, $auteur, $description, $image, $id));


        $_SESSION['message'] = "Votre livre a été modifié dans la base de données"; 
        
    }

    else  $_SESSION['message'] = "Votre livre n'a  pas été modifié dans la base de données";
    close_database_connection($link);        
}


function delete_book($id)
{$link=open_database_connection();    

    $stmt = $link->prepare("DELETE FROM livres WHERE id=:id");
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();

    $_SESSION['message'] = "Votre livre a été supprimé de base de données";         
    
    close_database_connection($link);        
}
   