<?php /* Smarty version Smarty-3.1.15, created on 2013-12-29 06:37:41
         compiled from "application/views/smarty/templates/page1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12327142135268193cb7b993-90941646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7bc1ce3bc7dc4894c670b462ba9ebe703ec9b8' => 
    array (
      0 => 'application/views/smarty/templates/page1.tpl',
      1 => 1388295458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12327142135268193cb7b993-90941646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5268193cbabdd8_31055680',
  'variables' => 
  array (
    'alertmessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268193cbabdd8_31055680')) {function content_5268193cbabdd8_31055680($_smarty_tpl) {?><div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['alertmessage']->value)) {?>
        <div class='row'>
            <div class='col-md-12'>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alertmessage']->value;?>
</div>
            </div>
        </div>
        <?php }?>
<div class='row'>
    <div class='col-md-2'>Create Movie</div>
    <div class='col-md-4'><?php echo $_smarty_tpl->getSubTemplate ("form_movie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
    <div class='col-md-6'></div>
</div><!-- /end row-->
</div><!-- /end container--><?php }} ?>
