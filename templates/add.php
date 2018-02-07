<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un article</title>
</head>
<body>
    <h2>Ajouter un nouveau livre</h2>
	<form method="post" action="add.php" >
		   <label>Titre du livre :</label>
			<input type="text" name="titre" value=""></br>

			<label>URL de l'image :</label>
			<input type="text" name="image" value=""></br>
				
			<label>Auteur :</label>
			<input type="text" name="auteur" value=""></br>

            <label>Description :</label>
			<textarea name="description" value=""></textarea></br>
	
			<button class="btn" type="submit" name="sauvegarder" >Sauvegarder</button></br></br>

			<a href="/CRUD_library/index.php">Acceuil</a>

            <?php if (isset($_SESSION['message'])): ?>
			<?php {
			echo $_SESSION['message']; 
            }
            ?>	
            <?php endif ?>		
	</form>
</body>
</html>