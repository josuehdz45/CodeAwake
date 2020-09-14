<?php /* Smarty version 3.1.24, created on 2019-11-01 07:01:03
         compiled from "./app/views/components/utils/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15334867845dbbca1fe850c2_45022461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c622dcbab7de7666238b73dc0efdd2e7da743f1f' => 
    array (
      0 => './app/views/components/utils/head.tpl',
      1 => 1558585659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15334867845dbbca1fe850c2_45022461',
  'variables' => 
  array (
    'pageTitle' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5dbbca1fe89cd3_49811253',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dbbca1fe89cd3_49811253')) {
function content_5dbbca1fe89cd3_49811253 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15334867845dbbca1fe850c2_45022461';
?>
<!--
    | Add, remove, edit, labels to your liking, remember that they will be displayed on any page of your site
-->
<head>
    <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['pageTitle']->value;
$_tmp3=ob_get_clean();
echo $_tmp3;?>
</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
/styles/images/logo_school_85.png">    
    <!-- Styles app -->
    <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['server']->value;
$_tmp4=ob_get_clean();
echo $_tmp4;?>
/app/assets/css/app.css">
</head><?php }
}
?>