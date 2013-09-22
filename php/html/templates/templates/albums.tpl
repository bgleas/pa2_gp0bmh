{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>ALBUMS</h1>
<p class="important">
 Welcome these are albums!

{if $edit eq 'false'}
<table border = "1">
<tr>
<th> Album  </th>
</tr>
{for $i = 1 to {$rows} }

  <tr>
  <th> <a href='{$album_link}{$albumid[$i-1]}'  > {$albums[$i-1]} </th> 
  </tr>
{/for}
</table>
<a href='{$link}' >Edit</a>

{else}
<table border = "1">
<tr>
<th> Album </th>
<th> Edit </th>
<th> Delete </th>
</tr>
{for $i = 1 to {$rows} }
  <tr>
  <th> <a href='{$album_link}{$albumid[$i-1]}'  > {$albums[$i-1]} </th> 
  <th> <a href='{$album_edit_link}{$albumid[$i-1]}' >Edit</a></th>
  <th>
  <form action="{$link}" method="POST">
  <input type="Submit" value="Delete">
  <input type="hidden" name="op" value="Delete">
  <input type="hidden" name="albumid" value={$albumid[$i-1]}>

  </form>
  </th>
  </tr>
{/for}

<tr>
<th>
<form  action="{$link}"  method="POST">
New Album: <input type="text" name="new_album_title">
<input type="hidden" name="op" value="Add">
<input type="Submit" value="Add">
</form>
</th>

</table>

{/if}
</p>
{/block}
