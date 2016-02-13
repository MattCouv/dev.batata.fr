<?php /* Smarty version Smarty-3.1.18, created on 2016-02-13 11:05:44
         compiled from "apps/templates/showitems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309456b9b5e520c318-69614387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e438ed8952800a8c716bedb0d5ff34d376b4e194' => 
    array (
      0 => 'apps/templates/showitems.tpl',
      1 => 1455357940,
      2 => 'file',
    ),
    'a8611471385fed1ae579121b93d474c21d4ae18f' => 
    array (
      0 => 'apps/templates/layout.tpl',
      1 => 1453626837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309456b9b5e520c318-69614387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56b9b5e52c50d5_43360684',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b9b5e52c50d5_43360684')) {function content_56b9b5e52c50d5_43360684($_smarty_tpl) {?><!DOCTYPE html>
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
  
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<div>
		<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
</p>
		<img src="http://i3.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
/mqdefault.jpg" alt="">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" frameborder="0" allowfullscreen></iframe>
	</div>
<?php } ?>

</div>
  <!-- @@@ JS -->
<script src="assets/js/app.min.js"></script>
  <!-- Analytics de google -->

<script>

</script>

</body>
</html>
<?php }} ?>
