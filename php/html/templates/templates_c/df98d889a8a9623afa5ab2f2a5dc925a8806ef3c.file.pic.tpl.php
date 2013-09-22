<?php /* Smarty version Smarty-3.1.14, created on 2013-09-20 17:05:21
         compiled from "/home/group1/admin/php/html/templates/templates/pic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5006510595239068adef743-27095778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df98d889a8a9623afa5ab2f2a5dc925a8806ef3c' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/pic.tpl',
      1 => 1379696717,
      2 => 'file',
    ),
    '0ebae81567daef3f71a0c5ce77052c36fb66e1db' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/base.tpl',
      1 => 1379358479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5006510595239068adef743-27095778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239068ae64558_66411186',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239068ae64558_66411186')) {function content_5239068ae64558_66411186($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>PIC</h1>
<p class="important">
  Welcome!




  <table>
  <tr>
  <th>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?>

  <a href="<?php echo $_smarty_tpl->tpl_vars['previous_url']->value;?>
">Previous Picture</a>


  <?php }?>
  </th>
  <th>
  <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
  </th>
  <th>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['num_pics']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp2!=$_tmp3-1){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['next_url']->value;?>
">Next Picture</a>
  <?php }?>

  </th>
  </tr>
  <tr>
  <th>
  </th>
  <th>
  <a href="<?php echo $_smarty_tpl->tpl_vars['album_url']->value;?>
">Back to Album</a>
  </th>
  <th>
  </th>
  </tr>
</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>