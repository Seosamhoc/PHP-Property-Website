<?php /* Smarty version Smarty-3.1.15, created on 2013-12-29 06:41:49
         compiled from "application/views/smarty/templates/listmovies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80368327552681d25567438-62936757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c12108977753c43cc0b9fa62950869d1485eeee' => 
    array (
      0 => 'application/views/smarty/templates/listmovies.tpl',
      1 => 1388295707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80368327552681d25567438-62936757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52681d255c5eb4_44321431',
  'variables' => 
  array (
    'rows' => 0,
    'imagepath' => 0,
    'row' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52681d255c5eb4_44321431')) {function content_52681d255c5eb4_44321431($_smarty_tpl) {?> <div class="container">
     

     
    <div class="table-condensed">
        <div class="row">
            <div class="col-xs-4 col-md-2 h5">Image</div>
            <div class="col-xs-1 col-md-1 h5">Listing</div>
            <div class="col-xs-1 col-md-1 h5">Price</div>
            <div class="col-xs-1 col-md-1 h5">Sold?</div>
            <div class="col-xs-1 col-md-2 h5">Street</div>
            <div class="col-xs-1 col-md-1 h5">County</div>
            <div class="col-xs-1 col-md-2 h5">Type of House</div>
            <div class="col-xs-1 col-md-1 h5">Edit</div>
            <div class="col-xs-1 col-md-1 h5">Delete</div>
        </div>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <div class="row">
        <div class="col-xs-4 col-md-2">
        <div class="thumbnail">
            <img src="<?php echo $_smarty_tpl->tpl_vars['imagepath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['imagefile'];?>
">
            <div class="caption"><p><?php echo $_smarty_tpl->tpl_vars['row']->value['imagefile'];?>
</p></div>
        </div>
        </div>
        <div class="col-xs-1 col-md-1">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['listing_id'];?>

        </div>
        <div class="col-xs-1 col-md-1">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>

        </div>
        <div class="col-xs-1 col-md-1">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['sold'];?>

        </div>
        <div class="col-xs-1 col-md-2">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>

        </div>
        <div class="col-xs-1 col-md-1">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['county_id'];?>

        </div>
        <div class="col-xs-1 col-md-2">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['housetype_id'];?>

        </div>
        <div class="col-xs-1 col-md-1">
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['listing_id'];?>
">Edit</a>
        </div>
        <div class="col-xs-1 col-md-1">
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['listing_id'];?>
">Delete</a>
        </div>
    </div>
<?php } ?>
</div>
     </div><!-- /end container --><?php }} ?>
