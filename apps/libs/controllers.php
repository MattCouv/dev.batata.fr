<?php
// Affiche la page d'acceuil

function home_action()
{
 global $smarty;
 $smarty->display('home.tpl');
}
//test d'ajout d'image
function manage_action()
{
  global $smarty;
  $smarty->display('manage.tpl');
}
function addwork_action()
{
  global $smarty;
  $smarty->display('addwork.tpl');
}
function save_item_action($data)
{
	global $fpdo;
	debug($data,'posted data');
	$oVideo = new Video($data['path']);
	$video_id = $oVideo->get_videoID();
	$data['path'] = $video_id;
	debug($data['path'], 'posted path');
	$oItem = new Item($fpdo);
	$id=$oItem->add($data);
	debug($id,'id');
}
function get_items()
{
	global $smarty, $fpdo;
	$oItem = new Item($fpdo);
	$items_results = $oItem->getAll();
	$smarty->assign('items', $items_results);
	$smarty->display('showitems.tpl');
}
//affichage de l'erreur 404
function error404_action()
{
	global $smarty;
	$smarty->display('error404.tpl');
}
?>
