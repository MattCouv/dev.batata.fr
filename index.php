<?php
//charge et initiale les bibliotheques globales
include( 'setting.inc.php');

//route de la requete interne
$command = get_command();

//== afficher la page d'acceuil du site
if (''==$command||'home'==$command){
	home_action();
}

// affiche la page 404
else{
	header('Status: 404 Not Found');
	error404_action();
}
?>
