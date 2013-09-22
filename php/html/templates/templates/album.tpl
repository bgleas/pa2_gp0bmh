{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>ALBUM</h1>
<p class="important">
 Welcome!

{if $edit eq 'false'}
<table>
<tr>
<th> Picture </th>
</tr>

{for $i = 0 to {$num}-1}
<tr>
<th>
<a href="{$picurl}{$picids[$i]}&albumid={$album_id}">
<img src = "{$urls[$i]}" width="32" height="32"></a>
</th>
</tr>
{/for}



{else}
<form enctype = "multipart/form-data" action="{$album_edit_link}" method="POST">
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

{for $i = 0 to {$num}-1}
<tr>
<th>
<a href="{$picurl}{$picids[$i]}&albumid={$album_id}">
<img src = "{$urls[$i]}" width="32" height="32"></a>
</th>
<th>
<form action="{$album_edit_link}" method="POST">
  <input type="submit" value="Delete">
  <input type="hidden" name="picid" value="{$picids[$i]}">
  <input type="hidden" name="op" value="Delete">
  
</form>
</th>
</tr>
{/for}
{/if}
</p>
{/block}
