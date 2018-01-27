<?php include('connexion.php');
      include('menu.php');

       $msg="";
if (isset($_POST['btnEnvoyer'])){
	$sql="INSERT INTO interets (id,titre,description) 
	VALUES ('".$_POST['id']."',
			 		  '".$_POST['titre']."',
			 		  '".$_POST['description']."')";
			 		  
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
	<title>Interets</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/interets.css">
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
							<label for="">Titre</label>
							<input type="text" name="titre" class="form-control" id="" placeholder="">
						</div>

						<div class="form-group">
							<p>
	       				<label for="description">Description</label><br />
	       				<textarea name="description" id="" rows="3" ></textarea>
	   				</p>
	   				<button name="btnEnvoyer" type="submit" class="btn btn-primary">Envoyer</button>
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
				<th>titre</th>
				<th>description</th>
				<th>Action</th>
			</tr>
		</thead>
	
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM interets";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 
				
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['titre']; ?></td>
			<td><?php echo $data['description']; ?></td>
			
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