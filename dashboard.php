<?php include('connexion.php');
      include('menu.php');

      ?>
   
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
     <div class="container"><br><br><br><br>

				<div class="row">
				<div>
					<div class="col-md-3">
						<ul class="list-unstyled">
	    					<li><a href="inscription.php">Modifier Profil</a></li>
	    					<li><a href="cv.php">Créer un CV</a></li>
	    					<li><a href="dashboard.php">Afficher votre CV</a></li>
	    					<li><a href="experiences.php">Ajouter Experience </a></li>
	    					<li><a href="diplomes.php">Ajouter diplome</a></li>
	    					<li><a href="interets.php">Ajouter centre d'interet</a></li>
	    				</ul>
					</div>
					<div class="col-md-3">
						<?php 
						$sql="SELECT * FROM codeuses";
		                $res=mysqli_query($link,$sql);
		               // die($sql);
		                $data=mysqli_fetch_array($res);
						?>
						<ul class="list-unstyled">
							<li><?php echo $data['nom'].' '.$data['prenoms']?></li>
							<li><?php echo $data['date_de_naissance'] ?> </li>
							<li><?php echo $data['telephone'] ?></li>
							<li><?php echo $data['email'] ?></li>
						</ul>
						
					</div>
					<div class="col-md-4">
						<p>Description </p>
						<?php echo $data['resume'] ?>
					</div>
					<div class="col-md-2">
						<img src="img/dodo.jpg" class="image" width="100" height="100" border-radius="10px">
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="text-center">
					<h3> Experiences Professionnelles</h3>
					<?php 
						$sql="SELECT * FROM experiences";
		                $res=mysqli_query($link,$sql);
		               // die($sql);
		                $data=mysqli_fetch_array($res);
						?>
					<div class="col-md-3">
						<p>
							<?php echo $data['date_debut'].' '.$data['date_fin'] ?>
						</p>
					</div>
					<div class="col-md-3"><p><?php echo $data['titre_du_poste'] ?></p> </div>
					<div class="col-md-2"> <p><?php echo $data['entreprise'] ?></p> </div>

				</div>
				
			</div>
			<div class="row">
				<div class="text-center">
					<h3> Diplomes</h3>
					<?php 
						$sql="SELECT * FROM diplomes";
		                $res=mysqli_query($link,$sql);
		               // die($sql);
		                $data=mysqli_fetch_array($res);
						?>

					<div><p><?php echo $data['annee_obtenue'] ?></p></div>
					<div><p><?php echo $data['libelle'] ?></p></div>
					<div><p><?php echo $data['ecole'] ?></p></div>
				</div>
				
			</div>

    		
    	</div>
</body>
</html>