<?php /* Smarty version Smarty-3.1.15, created on 2013-12-30 07:07:52
         compiled from "application/views/smarty/templates/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:937175641526818db70bde8-77140796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bf816470a81f88108ee4e7f6f78630adffdd198' => 
    array (
      0 => 'application/views/smarty/templates/front.tpl',
      1 => 1388383663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '937175641526818db70bde8-77140796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526818db711456_76765118',
  'variables' => 
  array (
    'countyrows' => 0,
    'countyrow' => 0,
    'houserows' => 0,
    'houserow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526818db711456_76765118')) {function content_526818db711456_76765118($_smarty_tpl) {?>
<div class="container">

<div class="row">
    <div class="col-lg-12">
        <select class="price" name="price">
            <option value="">Price</option>
            <option value=100000>&lt; 100000 </option>
            <option value=250000>&lt; 250000</option>
            <option value=750000>&lt; 750000</option>
            <option value=1500000>&lt; 1500000</option>
            <option value="big">&gt; 1500000</option>
        </select>
        <select class="county" name="county_id">
            <option value="">County</option>
            <?php  $_smarty_tpl->tpl_vars['countyrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countyrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countyrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countyrow']->key => $_smarty_tpl->tpl_vars['countyrow']->value) {
$_smarty_tpl->tpl_vars['countyrow']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county'];?>
"><?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county'];?>
</option>
            <?php } ?>
        </select>
        
        <select class="housetype" name="housetype_id">
            <option value="">House type</option>
            <?php  $_smarty_tpl->tpl_vars['houserow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['houserow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['houserows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['houserow']->key => $_smarty_tpl->tpl_vars['houserow']->value) {
$_smarty_tpl->tpl_vars['houserow']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype'];?>
"><?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype'];?>
</option>
            <?php } ?>
        </select>
</div>    
<div class="row">
    <div class="col-lg-12" id='message'>No message</div>
</div>
</div>
</div>
        
       <?php }} ?>
