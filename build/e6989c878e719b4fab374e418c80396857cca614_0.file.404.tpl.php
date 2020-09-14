<?php /* Smarty version 3.1.24, created on 2020-01-21 08:21:07
         compiled from "./app/views/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16967893295e26a663070ca5_83520696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6989c878e719b4fab374e418c80396857cca614' => 
    array (
      0 => './app/views/404.tpl',
      1 => 1579591194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16967893295e26a663070ca5_83520696',
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e26a6631029a2_16784108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e26a6631029a2_16784108')) {
function content_5e26a6631029a2_16784108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16967893295e26a663070ca5_83520696';
?>
<!DOCTYPE html>
<html>
	<!-- Configure template / excel so that they appear -->
	<?php ob_start();
echo $_smarty_tpl->getSubTemplate ('components/utils/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
$_tmp1=ob_get_clean();
echo $_tmp1;?>
	
	<body>
		<!---
		 ! Modifica este texto como tu lo desees, recuerda que cada vez que un usuario ingrese a una pagina no existente
		 ! este archivo le mostrara un texto "no existe"
		-->
		<!-- Content -->
		<div class="_404">
			<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_tmp2=ob_get_clean();
echo $_tmp2;?>
</p>
		</div>
		<!-- / Content -->

	<!-- Configure 'template/overall/scripts.tpl' to be able to place your scripts and appear in the template-->
	<?php ob_start();
echo $_smarty_tpl->getSubTemplate ('components/utils/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
$_tmp3=ob_get_clean();
echo $_tmp3;?>

	</body>
</html><?php }
}
?>