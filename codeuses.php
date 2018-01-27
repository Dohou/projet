<?php 
include('connexion.php');
include('menu.php');

$msg="";
if (isset($_POST['btnValider'])){
	$sql="INSERT INTO codeuses (nom,prenoms,date_de_naissance,photo_de_profil,specialisation,email,mdp,resume,telephone) 
	VALUES (
			 		  '".$_POST['nom']."',
			 		  '".$_POST['prenoms']."',
			 		  '".$_POST['date_de_naissance']."',
			 		  '".$_POST['photo_de_profil']."',
			 		  '".$_POST['specialisation']."',
			 		  '".$_POST['email']."', 
			 		  '".$_POST['mdp']."',
			 		  '".$_POST['resume']."',
			 		  '".$_POST['telephone']."')";
			 		  
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
	<title>Codeuses</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/codeuses.css">
</head>
<body>

    	<div class="container"><br><br><br><br>

			<div class="col-md-8">

<form action="" method="POST" role="form">
<h1>Page des Codeuses</h1>
<div class="form-group">
	<label for="">Nom</label>
	<input type="text" name="nom" class="form-control" id="" placeholder="Entrer le nom">
</div>
<div class="form-group">
    <label for="">Prenoms</label>
    <input type="text" name="prenoms" class="form-control" id="" placeholder="Entrer votre prenom">
</div>

<div class="form-group">
	<label for="">Date de naissance</label>
	<input type="date" name="date_de_naissance" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Photo de Profil</label>
	<input type="file" name="photo_de_profil" class="form-control" id="" placeholder="photo">
</div>
<div class="form-group">
	<label for="">Spécialisation</label>
	<input type="text" name="specialisation" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Email*</label>
	<input type="email" name="email" class="form-control" id="" placeholder="Exemple@email.com" required >
</div>

<div class="form-group">
	<label for="">Mot de passe*</label>
	<input type="password" name="mdp" class="form-control" id="" placeholder="Saisir le mot de passe" required >
</div>

<div class="form-group">
	<label for="">Resumé</label>
	<input type="text" name="resume" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
	<label for="">Téléphone</label>
	<input type="text" name="telephone" class="form-control" id="" placeholder="">
</div>

<button type="submit" name="btnValider" class="btn btn-primary"><a href="dashboard.php"></a>Valider</button>
					
    	
    </div>
    <?php 
							if (isset($_POST['btnValider']) ){

								$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
								$req= mysqli_query($link,$sql);
								if (mysqli_num_rows($req)>1) {
									echo "email existe";
								}else{

								$sql= "INSERT INTO codeuses (nom, prenoms,date_de_naissance,photo_de_profil,specialisation,email,mdp,resume,telephone)
					 VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
					 '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
					 '".mysqli_real_escape_string($link,$_POST['date_de_naissance'])."',
					 '".mysqli_real_escape_string($link,$_POST['photo_de_profil'])."',
					 '".mysqli_real_escape_string($link,$_POST['specialisation'])."',
					 		  '".mysqli_real_escape_string($link,$_POST['email'])."',
					 		  '".mysqli_real_escape_string($link, md5($_POST['mdp'])."',
					 		'".mysqli_real_escape_string($link,$_POST['resume'])."',
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

<span><?php
		echo $msg;
	 ?></span>


	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nom</th>
				<th>Prenoms</th>
				<th>Date de Naissance</th>
				<th>Photo de profil</th>
				<th>specialisation</th>
				<th>Email</th>
				<th>Mot de passe</th>
				<th>Résumé</th>
				<th>Téléphone</th>
			</tr>
		</thead>
	
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM codeuses";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 
				
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['nom']; ?></td>
			<td><?php echo $data['prenoms']; ?></td>
			<td><?php echo $data['date_de_naissance']; ?></td>
			<td><?php echo $data['photo_de_profil']; ?></td>
			<td><?php echo $data['specialisation']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['mdp']; ?></td>
			<td><?php echo $data['resume']; ?></td>
			<td><?php echo $data['telephone']; ?></td>
			
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
</body>
</html>