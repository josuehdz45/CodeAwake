<?php /* Smarty version 3.1.24, created on 2019-11-01 07:01:04
         compiled from "./app/views/components/utils/scripts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2631145865dbbca200051a1_44597997%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f741d31344a874c77eb02e46143e73d075f00c3a' => 
    array (
      0 => './app/views/components/utils/scripts.tpl',
      1 => 1572410223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2631145865dbbca200051a1_44597997',
  'variables' => 
  array (
    'server' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5dbbca20008558_66265975',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dbbca20008558_66265975')) {
function content_5dbbca20008558_66265975 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2631145865dbbca200051a1_44597997';
?>
<!-- 
    Important: these plugins come by default but if you want you can remove them later.
-->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://livejs.com/live.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['server']->value;
$_tmp5=ob_get_clean();
echo $_tmp5;?>
/app/assets/js/app.js"><?php echo '</script'; ?>
><?php }
}
?>