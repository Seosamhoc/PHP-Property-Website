<?php /* Smarty version Smarty-3.1.15, created on 2013-12-24 03:28:46
         compiled from "application/views/smarty/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1700062076526818db695ef6-56870563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b51924d71e94a9a8b53822c6b35fc769f98c52c' => 
    array (
      0 => 'application/views/smarty/templates/master.tpl',
      1 => 1387851816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700062076526818db695ef6-56870563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526818db6e0f17_38881222',
  'variables' => 
  array (
    'showJumboTron' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526818db6e0f17_38881222')) {function content_526818db6e0f17_38881222($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['showJumboTron']->value==true) {?>
<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
