<?php include('connexion.php');
      include('menu.php');
      $msg="";
if (isset($_POST['btnEnvoyer'])){
	$sql="INSERT INTO experiences (id,titre_du_poste,date_debut,date_fin,entreprise) 
	VALUES ('".$_POST['id']."',
			 		  '".$_POST['titre_du_poste']."',
			 		  '".$_POST['date_debut']."',
			 		  '".$_POST['date_fin']."',
			 		  '".$_POST['entreprise']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion reussie';

	}else{
		$msg=mysqli_error($link);
	}

}

      ?>

<!DOCTYPE html>
<html>
<head>
	<title>Experiences</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/experiences.css">
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
		<label for="">Titre du poste</label>
		<input type="text" name="titre_du_poste" class="form-control" id="" placeholder="">
	</div>

<div class="form-group">
	<label for="">Date debut</label>
	<input type="date" name="date_debut" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Date fin</label>
	<input type="date" name="date_fin" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Entreprise</label>
	<input type="text" name="entreprise" class="form-control" id="" placeholder="">
</div>

<center><button name="btnEnvoyer" type="submit" class="btn btn-danger submit" >Envoyer</button></center><br><br>

</div>


	</form>
</div>

	<span><?php
		echo $msg;
	 ?></span>


	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>N°</th>
				<th>titre du poste</th>
				<th>date debut</th>
				<th>date fin</th>
				<th>entreprise</th>
				<th>Action</th>
			</tr>
		</thead>
	
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM experiences";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 
				
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['titre_du_poste']; ?></td>
			<td><?php echo $data['date_debut']; ?></td>
			<td><?php echo $data['date_fin']; ?></td>
			<td><?php echo $data['entreprise']; ?></td>
			<td>
                <a href="?modif_id=<?php echo $data['id']; ?>">Modifier</a>
                <a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
            </td>
		</tr>

		<?php  $n++;

		}

		?>
	</tbody>
	</table>


	</div>
</div>
	</div>
	</div>					
</div>
</body>
</html>

