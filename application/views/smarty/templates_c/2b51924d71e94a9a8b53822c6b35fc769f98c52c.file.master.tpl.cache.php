<?php /* Smarty version Smarty-3.1.15, created on 2013-10-16 22:42:11
         compiled from "application/views/smarty/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284948515255ac28cfb5f4-52645699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b51924d71e94a9a8b53822c6b35fc769f98c52c' => 
    array (
      0 => 'application/views/smarty/templates/master.tpl',
      1 => 1381956129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284948515255ac28cfb5f4-52645699',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5255ac28e22424_55968435',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255ac28e22424_55968435')) {function content_5255ac28e22424_55968435($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page1']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
