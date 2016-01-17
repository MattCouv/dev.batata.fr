<?php
// Affiche la page d'acceuil

function home_action()
{
 global $smarty;
 $smarty->display('home.tpl');
}
// affiche la page du portfolio
function creations_action()
{
  global $smarty;
  $smarty->display('creations.tpl');
}
// affichage de la page des blogs
function blog_action()
{
	global $smarty;
 	$smarty->display('blog.tpl');
}
function contact_action()
{
	global $smarty;
 	$smarty->display('contact.tpl');
}
//affichage de l'erreur 404
function error404_action()
{
	global $smarty;
	$smarty->display('error404.tpl');
}
?>
