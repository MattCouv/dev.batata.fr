<?php
//charge et initiale les bibliotheques globales
include( 'setting.inc.php');

//route de la requete interne
$command = get_command();

//== afficher la page d'acceuil du site
if (''==$command||'home'==$command){
	home_action();
}
elseif ('manage'==$command) {
	manage_action();
}
elseif ('add-work'==$command) {
	addwork_action();
}
elseif ('save-item'==$command && isset($_POST)) {
	save_item_action($_POST);
	//redirect('show-items');
}
elseif('show-items' == $command)
{
	get_items();
}
// affiche la page 404
else{
	header('Status: 404 Not Found');
	error404_action();
}
?>
