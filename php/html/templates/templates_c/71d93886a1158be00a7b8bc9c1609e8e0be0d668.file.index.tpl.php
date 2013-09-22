<?php /* Smarty version Smarty-3.1.14, created on 2013-09-20 16:13:55
         compiled from "/home/group1/admin/php/html/templates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19677981825237616688aac0-36267569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d93886a1158be00a7b8bc9c1609e8e0be0d668' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/index.tpl',
      1 => 1379693633,
      2 => 'file',
    ),
    '0ebae81567daef3f71a0c5ce77052c36fb66e1db' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/base.tpl',
      1 => 1379358479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19677981825237616688aac0-36267569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52376166914432_31830158',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52376166914432_31830158')) {function content_52376166914432_31830158($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>PICTURES 'R US</h1>
<p class="center">
  Welcome to our page!
  <br>
  We have multiple albums to view from multiple users!!
  <br><br>

  Users:
  <br>
  <a href='<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</a>
  <br>
  <a href='<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</a>
  <br>
  <a href='<?php echo $_smarty_tpl->tpl_vars['url3']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</a>
<lp>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>