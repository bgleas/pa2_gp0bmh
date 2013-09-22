<?php /* Smarty version Smarty-3.1.14, created on 2013-09-20 14:33:49
         compiled from "/home/group1/admin/php/html/templates/templates/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13769282555239047895d540-00607594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd14a99308a9c61d2041367e0fa725d634f818c' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/album.tpl',
      1 => 1379687417,
      2 => 'file',
    ),
    '0ebae81567daef3f71a0c5ce77052c36fb66e1db' => 
    array (
      0 => '/home/group1/admin/php/html/templates/templates/base.tpl',
      1 => 1379358479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13769282555239047895d540-00607594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52390478a158e7_83750483',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52390478a158e7_83750483')) {function content_52390478a158e7_83750483($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUM</h1>
<p class="important">
 Welcome!

<?php if ($_smarty_tpl->tpl_vars['edit']->value=='false'){?>
<table>
<tr>
<th> Picture </th>
</tr>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1-1+1 - (0) : 0-($_tmp1-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<tr>
<th>
<a href="<?php echo $_smarty_tpl->tpl_vars['picurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['picids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
&albumid=<?php echo $_smarty_tpl->tpl_vars['album_id']->value;?>
">
<img src = "<?php echo $_smarty_tpl->tpl_vars['urls']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" width="32" height="32"></a>
</th>
</tr>
<?php }} ?>



<?php }else{ ?>
<form enctype = "multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['album_edit_link']->value;?>
" method="POST">
<!-- <input type="text" value="Enter photo url">-->
Choose new picture: <input name="userfile" id="userfile"  type="file"/>
 <input type="submit" value="Add"/>
 <input type="hidden" name="op" value="Add"/>
</form>
<table>
<tr>
<th> Picture </th>
<th> Delete </th>
</tr>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp2-1+1 - (0) : 0-($_tmp2-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<tr>
<th>
<a href="<?php echo $_smarty_tpl->tpl_vars['picurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['picids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
&albumid=<?php echo $_smarty_tpl->tpl_vars['album_id']->value;?>
">
<img src = "<?php echo $_smarty_tpl->tpl_vars['urls']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" width="32" height="32"></a>
</th>
<th>
<form action="<?php echo $_smarty_tpl->tpl_vars['album_edit_link']->value;?>
" method="POST">
  <input type="submit" value="Delete">
  <input type="hidden" name="picid" value="<?php echo $_smarty_tpl->tpl_vars['picids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">
  <input type="hidden" name="op" value="Delete">
  
</form>
</th>
</tr>
<?php }} ?>
<?php }?>
</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>