<?php /* Smarty version Smarty-3.1.15, created on 2013-10-16 22:37:55
         compiled from "application/views/smarty/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14145719545255b0f60d18b1-91727082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c701ce98acce56625f3fbd337a462bdea3e714' => 
    array (
      0 => 'application/views/smarty/templates/navbar.tpl',
      1 => 1381955874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14145719545255b0f60d18b1-91727082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5255b0f60d3e42_44107851',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255b0f60d3e42_44107851')) {function content_5255b0f60d3e42_44107851($_smarty_tpl) {?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost:8888/movieapp/index.php?action=createmovies">Create Movie</a></li>
                <li><a href="http://localhost:8888/movieapp/index.php?action=listmovies">List Movies</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
