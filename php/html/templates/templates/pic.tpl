{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>PIC</h1>
<p class="important">
  Welcome!




  <table>
  <tr>
  <th>
  {if {$index} neq 0}

  <a href="{$previous_url}">Previous Picture</a>


  {/if}
  </th>
  <th>
  <img src="{$url}">
  </th>
  <th>
  {if {$index} neq {$num_pics}-1}
  <a href="{$next_url}">Next Picture</a>
  {/if}

  </th>
  </tr>
  <tr>
  <th>
  </th>
  <th>
  <a href="{$album_url}">Back to Album</a>
  </th>
  <th>
  </th>
  </tr>
</p>
{/block}
