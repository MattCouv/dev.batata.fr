<?php /* Smarty version Smarty-3.1.18, created on 2016-02-13 12:09:20
         compiled from "apps/templates/addwork.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1686256a4f3c60ce0d7-85736066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd13164aa7e39bce10063f95cdfe5741c18e1e2' => 
    array (
      0 => 'apps/templates/addwork.tpl',
      1 => 1455361667,
      2 => 'file',
    ),
    'a8611471385fed1ae579121b93d474c21d4ae18f' => 
    array (
      0 => 'apps/templates/layout.tpl',
      1 => 1453626837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686256a4f3c60ce0d7-85736066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56a4f3c6133cb4_78805036',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a4f3c6133cb4_78805036')) {function content_56a4f3c6133cb4_78805036($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>batata</title>
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- @@@ CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- favicon -->
</head>
<body>
<div class="wrapper">
  
<form action="save-item" method="post" class="form">
  <p><label>Titre <input type="text" name="title"></label></p>
  <p><label>Description <input type="text" name="description"></label></p>
  <p><label>Année <input type="text" name="year"></label></p>
  <p><label>type <input type="text" name="type"></label></p>
  <p><label>Lien de la vidéo <input name="path"></label></p>
  <button type="submit">submit</button>
</form>

</div>
  <!-- @@@ JS -->
<script src="assets/js/app.min.js"></script>
  <!-- Analytics de google -->

<script>

</script>

</body>
</html>
<?php }} ?>
