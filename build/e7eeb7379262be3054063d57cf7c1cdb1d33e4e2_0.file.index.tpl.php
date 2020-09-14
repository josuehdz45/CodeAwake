<?php /* Smarty version 3.1.24, created on 2020-01-21 08:07:02
         compiled from "./app/views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19907781485e26a316879738_56576633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7eeb7379262be3054063d57cf7c1cdb1d33e4e2' => 
    array (
      0 => './app/views/index.tpl',
      1 => 1579590267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19907781485e26a316879738_56576633',
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e26a317035f16_26045275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e26a317035f16_26045275')) {
function content_5e26a317035f16_26045275 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19907781485e26a316879738_56576633';
?>
<!DOCTYPE html>
<html>
	<!-- Configure template / excel so that they appear -->
	<?php ob_start();
echo $_smarty_tpl->getSubTemplate ('components/utils/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
$_tmp1=ob_get_clean();
echo $_tmp1;?>
	
	<body>
		
		<div class="start-app">
			<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_tmp2=ob_get_clean();
echo $_tmp2;?>
</p>
		</div>

	<!-- Configure 'template/overall/scripts.tpl' to be able to place your scripts and appear in the template-->
	<?php ob_start();
echo $_smarty_tpl->getSubTemplate ('components/utils/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
$_tmp3=ob_get_clean();
echo $_tmp3;?>

	</body>
</html><?php }
}
?>