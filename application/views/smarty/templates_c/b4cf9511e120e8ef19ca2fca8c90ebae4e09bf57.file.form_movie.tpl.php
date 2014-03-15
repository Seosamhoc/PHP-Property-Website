<?php /* Smarty version Smarty-3.1.15, created on 2013-12-30 06:05:22
         compiled from "application/views/smarty/templates/form_movie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3340726895268221edc3425-70643502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4cf9511e120e8ef19ca2fca8c90ebae4e09bf57' => 
    array (
      0 => 'application/views/smarty/templates/form_movie.tpl',
      1 => 1388379630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3340726895268221edc3425-70643502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5268221edc66f8_72952292',
  'variables' => 
  array (
    'row' => 0,
    'countyrows' => 0,
    'countyrow' => 0,
    'houserows' => 0,
    'houserow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268221edc66f8_72952292')) {function content_5268221edc66f8_72952292($_smarty_tpl) {?><form class="form-horizontal" role="form" action="processform.php" method="post" enctype="multipart/form-data">
    <input type = "hidden" name="listing_id" value = "<?php if (isset($_smarty_tpl->tpl_vars['row']->value['listing_id'])) {?><?php echo $_smarty_tpl->tpl_vars['row']->value['listing_id'];?>
<?php } else { ?>0<?php }?>">
    <div class="form-group">
        <label for="movietitle" class="col-lg-2 control-label" >Price</label>
        <div class="col-lg-10">
            <input type="number" name="price" class="form-control" id="price" <?php if (isset($_smarty_tpl->tpl_vars['row']->value['price'])) {?>value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
"<?php }?> placeholder="price" required>
        </div>
    </div>
    <div class="form-group">
        <label for="street" class="col-lg-2 control-label">Address</label>
        <div class="col-lg-10">
            <input type="text" name="street" class="form-control" id="street"  <?php if (isset($_smarty_tpl->tpl_vars['row']->value['address'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
"<?php }?> placeholder="street" required>
        </div>

        <div class="col-lg-10 controls input-lg">
        <select id="county_id" name="county_id" required>
            <option value="">-County-</option>
            <?php  $_smarty_tpl->tpl_vars['countyrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countyrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countyrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countyrow']->key => $_smarty_tpl->tpl_vars['countyrow']->value) {
$_smarty_tpl->tpl_vars['countyrow']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['countyrow']->value['county_id']==$_smarty_tpl->tpl_vars['row']->value['county_id']) {?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['countyrow']->value['county'];?>
</option>
                <?php }?>
            <?php } ?>
        </select>	
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label" for="housetype_id">House Type</label>
            <div class="col-lg-10 controls input-lg">
                <select id="housetype_id" name="housetype_id" required>
                    <option value="">---</option>
                    <?php  $_smarty_tpl->tpl_vars['houserow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['houserow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['houserows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['houserow']->key => $_smarty_tpl->tpl_vars['houserow']->value) {
$_smarty_tpl->tpl_vars['houserow']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['houserow']->value['housetype_id']==$_smarty_tpl->tpl_vars['row']->value['housetype_id']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['houserow']->value['housetype'];?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </div>
    </div>
        
    <div class="form-group">
        <div class="col-lg-2">
            <div class="col-lg-10 checkbox">
                <label>
                    <input id="sold" name="sold" type="checkbox" value="1" <?php if (isset($_smarty_tpl->tpl_vars['row']->value['sold'])&&$_smarty_tpl->tpl_vars['row']->value['sold']!=0) {?>checked<?php }?>> Sold
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Upload Image</label>
        <div class="col-lg-10 controls">
            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['imagefile'])) {?><p>Leaving empty will keep current image</p><?php }?>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <input type="file" name="uploadedfile" id="uploadedfile" <?php if (!isset($_smarty_tpl->tpl_vars['row']->value['imagefile'])) {?>required<?php }?>>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <input type="submit" name="submit" class="btn btn-default" value="Submit">
        </div>
    </div>
</form>
            
           <?php }} ?>
