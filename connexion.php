<?php

$host="localhost";//nom de l'hote
$user="root";//nom d'utilisateur de la db
$mdp="";//mot de passe
$db="db_cvs";//lien de connexon a la db
$link=mysqli_connect($host,$user,$mdp);
	mysqli_select_db($link,$db);


?>