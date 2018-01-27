<?php 
      include('connexion.php');
      include('menu.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Page D'accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
  <div class="row">
<div class="banner" style="background-image: linear-gradient(-225deg, rgba(0,189,199,0.6) 0%, rgba(0,36,15,0.6) 50%), url('img/macbook.jpg');">

 		 <div class="banner-content">
   		 <h1><marquee direction="up">SHEISTHECODE</marquee></h1>
   		<p><marquee direction="down">BIENVENUE SUR LA PAGE DES CODEUSES</marquee></p>
  		</div>
	</div>
	</div>
	<div class="message">
      <img class="avatar-large" src="img/dodo.jpg" width="8%" height="100px">
      <div class="message-name">
        <h3>Stephanie Dohou</h3>
      </div>
    <div class="message-body">
      <p><strong>Codeuse</strong></p>
      <p>
        je suis une developpeuse débutante à sheisthecode et je suis passionnée des créativités sur les pages du site
      </p>
    </div>
    <div class="message-status">
      <a href="dashboard.php" class="btn-treehouse">consulter le cv</a>
      
  </div>
</div>
  <br><br>
    
</div>
</div>
</body>
</html>