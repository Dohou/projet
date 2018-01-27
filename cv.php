<?php 
include('connexion.php');
include('menu.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>CV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.php">
	<link rel="stylesheet" type="text/css" href="css/diplomes.css">
</head>
<body>
	
    <div class="container"><br><br><br><br>
    	<div class="col-md-6">

    <nav class="navbar navbar-fixed-left-center">
			<div class="container-center">
				<a href="inscription.php" class="btn-treehouse">Modifier Profil</a><br><br>
				<a href="cv.php" class="btn-treehouse">Creer cv</a><br><br>
			    <a href="dashboard.php" class="btn-treehouse">Afficher votre cv</a><br><br>
				<a href="experiences.php" class="btn-treehouse">Ajouter experience</a><br><br>
				<a href="diplomes.php" class="btn-treehouse">Ajouter diplome</a><br><br>
				<a href="interets.php" class="btn-treehouse">Ajouter centre d'interet</a><br><br>
				</nav>
    		
    	</div>

    <div class="col-md-6">
    	<form action="" method="POST" role="form" position="right">
					
	<div class="form-group">
		<label for="">facebook</label>
		<input type="text" name="poste Occupé" class="form-control" id="" placeholder="">
	</div>

<div class="form-group">
	<label for="">twitter</label>
	<input type="" name="" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">github</label>
	<input type="" name="" class="form-control" id="" placeholder="">
</div>
<button name="btnEnvoyer" type="submit" class="btn btn-danger submit"><a href="dashboard.php"></a>Envoyer</button><br><br>

    	
    </div>
    </form>
    </div>
    </nav>
    </div>
    </div>	
    	
    </div>
    
    
</body>
</html>