<?php 
include('connexion.php');
include('menu.php'); 
     
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/inscription.css">
</head>
<body>

    	<div class="container"><br><br><br><br>

			<div class="col-md-8">

<form action="" method="POST" role="form">
<h1>S'inscrire</h1>
<div class="form-group">
	<label for="">Nom</label>
	<input type="text" name="nom" class="form-control" id="" placeholder="Entrer le nom">
</div>
<div class="form-group">
    <label for="">Prenoms</label>
    <input type="text" name="prenom" class="form-control" id="" placeholder="Entrer votre prenom">
</div>

<div class="form-group">
	<label for="">Date de naissance</label>
	<input type="date" name="date de naissance" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Téléphone</label>
	<input type="text" name="telephone" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Mot de passe*</label>
	<input type="password" name="mdp" class="form-control" id="" placeholder="Saisir le mot de passe" required >
</div>

<div class="form-group">
	<label for="">Email*</label>
	<input type="email" name="email" class="form-control" id="" placeholder="Exemple@email.com" required >
</div>

<a href="codeuses.php" type="submit" name="btnValider" class="btn btn-primary">Valider</a>
					
    	
    </div>

  <?php 
							if (isset($_POST['btnValider']) ){

								$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
								$req= mysqli_query($link,$sql);
								if (mysqli_num_rows($req)>0) {
									echo "email existe";
								}else{

								$sql= "INSERT INTO codeuses (nom, prenoms,date_de_naissance,email, mdp, telephone)
					 VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
					 		'".mysqli_real_escape_string($link,$_POST['prenoms'])."',
					 		'".mysqli_real_escape_string($link,$_POST['date_de_naissance'])."',
					 		'".mysqli_real_escape_string($link,$_POST['email'])."',
					 		  '".mysqli_real_escape_string($link, md5($_POST['mdp'])."',
					 		'".mysqli_real_escape_string($link,$_POST['telephone']))."')";
						$res=mysqli_query($link,$sql);
						if ($res) {
							echo "insertion reussie";
						}else{
							$msg=mysqli_error($link);
						}
						}
						}
						 ?>
    
</form>
</div>
</div>
</body>
</html>