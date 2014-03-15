<?php /* Smarty version Smarty-3.1.15, created on 2013-12-29 04:24:07
         compiled from "application/views/smarty/templates/editmovie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16482508045268221ed74509-27028276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2938e71f7af1c8a5febdc387941739ce3334662e' => 
    array (
      0 => 'application/views/smarty/templates/editmovie.tpl',
      1 => 1388287437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16482508045268221ed74509-27028276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5268221edb9677_70986147',
  'variables' => 
  array (
    'alertmessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268221edb9677_70986147')) {function content_5268221edb9677_70986147($_smarty_tpl) {?><div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['alertmessage']->value)) {?>
        <div class='row'>
            <div class='col-md-12'>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alertmessage']->value;?>
</div>
            </div>
        </div>
        <?php }?>
<div class='row'>
    <div class='col-md-2'>Edit Movie</div>
    <div class='col-md-4'><?php echo $_smarty_tpl->getSubTemplate ("form_movie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
    <div class='col-md-6'></div>
</div><!-- /end row-->

</div><!-- /end container--><?php }} ?>
