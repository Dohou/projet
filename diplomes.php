<?php include('connexion.php');
      include('menu.php');

      $msg="";
if (isset($_POST['btnEnvoyer'])){
	$sql="INSERT INTO diplomes (annee_obtenue,libelle,ecole) 
	VALUES (
			 '".$_POST['annee_obtenue']."',
			 		  '".$_POST['libelle']."',
			 		  '".$_POST['ecole']."')";
			 		  
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
	<title>Diplomes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/diplomes.css">
</head>
<body>
    
    <div class="container"><br><br><br><br>
    	<div class="col-md-6">
			<nav class="navbar navbar-fixed-left">
			<div class="container-left">
				<a href="inscription.php" class="btn-treehouse">Modifier Profil</a><br><br>
				<a href="cv.php" class="btn-treehouse">Creer cv</a><br><br>
			    <a href="dashboard.php" class="btn-treehouse">Afficher votre cv</a><br><br>
				<a href="experiences.php" class="btn-treehouse">Ajouter experience</a><br><br>
				<a href="diplomes.php" class="btn-treehouse">Ajouter diplome</a><br><br>
				<a href="interets.php" class="btn-treehouse">Ajouter centre d'interet</a><br><br>
				</nav>
			</div>
      

	<div class="col-md-6">
	<form action="" method="POST" role="form">
					
	<div class="form-group">
		<label for="">Année d'obtention</label>
		<input type="date" name="annee_obtenue" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Libellé</label>
		<input type="text" name="libelle" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Ecole</label>
		<input type="text" name="ecole" class="form-control" id="" placeholder="">
	</div>
	<button name="btnEnvoyer" type="submit" class="btn btn-danger submit" >Envoyer</button><br><br>


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
				<th>année</th>
				<th>libellé</th>
				<th>école</th>
				<th>Action</th>
			</tr>
		</thead>
	
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM diplomes";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 
				
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['annee_obtenue']; ?></td>
			<td><?php echo $data['libelle']; ?></td>
			<td><?php echo $data['ecole']; ?></td>
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
</nav>
</div>
</div>
</body>
</html>