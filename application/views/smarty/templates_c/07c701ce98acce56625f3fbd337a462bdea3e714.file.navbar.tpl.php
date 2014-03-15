<?php /* Smarty version Smarty-3.1.15, created on 2013-12-30 06:27:25
         compiled from "application/views/smarty/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1505799015526818db6fc849-85565768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c701ce98acce56625f3fbd337a462bdea3e714' => 
    array (
      0 => 'application/views/smarty/templates/navbar.tpl',
      1 => 1388381243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505799015526818db6fc849-85565768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526818db7009d4_89221261',
  'variables' => 
  array (
    'app_name' => 0,
    'loggedIn' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526818db7009d4_89221261')) {function content_526818db7009d4_89221261($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==true) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=createmovies">Create Listing</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=listmovies">Show Listings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
            <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==false) {?>
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="Username" value="admin" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" value="letmein" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php }?>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
