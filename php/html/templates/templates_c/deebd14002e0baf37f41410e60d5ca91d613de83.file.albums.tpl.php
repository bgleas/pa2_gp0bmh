<?php /* Smarty version Smarty-3.1.14, created on 2013-09-20 03:36:26
         compiled from "/home/group1/admin/php/html/templates/templates/albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573108884523905981e97a3-77992757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deebd14002e0baf37f41410e60d5ca91d613de83' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/albums.tpl',
      1 => 1379648183,
      2 => 'file',
    ),
    '0ebae81567daef3f71a0c5ce77052c36fb66e1db' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/base.tpl',
      1 => 1379358479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573108884523905981e97a3-77992757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52390598275171_98620762',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52390598275171_98620762')) {function content_52390598275171_98620762($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUMS</h1>
<p class="important">
 Welcome these are albums!

<?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>
<table border = "1">
<tr>
<th> Album  </th>
</tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rows']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

  <tr>
  <th> <a href='<?php echo $_smarty_tpl->tpl_vars['album_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['albumid']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
'  > <?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
 </th> 
  </tr>
<?php }} ?>
</table>
<a href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
' >Edit</a>

<?php }else{ ?>
<table border = "1">
<tr>
<th> Album </th>
<th> Edit </th>
<th> Delete </th>
</tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rows']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp2+1 - (1) : 1-($_tmp2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <tr>
  <th> <a href='<?php echo $_smarty_tpl->tpl_vars['album_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['albumid']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
'  > <?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
 </th> 
  <th> <a href='<?php echo $_smarty_tpl->tpl_vars['album_edit_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['albumid']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
' >Edit</a></th>
  <th>
  <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="POST">
  <input type="Submit" value="Delete">
  <input type="hidden" name="op" value="Delete">
  <input type="hidden" name="albumid" value=<?php echo $_smarty_tpl->tpl_vars['albumid']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
>

  </form>
  </th>
  </tr>
<?php }} ?>

<tr>
<th>
<form  action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"  method="POST">
New Album: <input type="text" name="new_album_title">
<input type="hidden" name="op" value="Add">
<input type="Submit" value="Add">
</form>
</th>

</table>

<?php }?>
</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>