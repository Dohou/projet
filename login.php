<?php 
      session_start();
      include('connexion.php');
      include('menu.php'); 
?>
      
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="container"><br><br><br><br>

			<div class="col-md-12">

				
<form action="" method="POST" role="form">
	<h1>Se connecter</h1>
 <form action="" method="POST" role="form" position="right">
					
<div class="form-group">
	<label for="">Email</label>
	<input type="email" name="email" class="form-control" id="" placeholder="Exemple@email.com">
</div>

<div class="form-group">
	<label for="">Mot de passe</label>
	<input type="password" name="mdp" class="form-control" id="" placeholder="Saisir le mot de passe">
</div>
<a href="dashboard.php" type="submit" name="btnEnvoyer" class="btn btn-primary">Envoyer</a>

	</form>
	<?php if (isset($_POST['btnValider']) ){

								$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND mdp='".mysqli_real_escape_string($link,md5($_POST['mdp']))."' LIMIT 0,1";
								$req= mysqli_query($link,$sql);
								if (mysqli_num_rows($req)>0) {
									$data= mysqli_fetch_array($req);
									$_SESSION['variable']=$data['id'];
									header('index.php');
								}else{
									echo "identifiants incorrects";
								}
						} ?>
	</div>
</div>
</div>					 
</body>
</html>