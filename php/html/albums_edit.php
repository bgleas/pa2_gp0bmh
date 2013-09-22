<?php
include lib.php
$title = "Edit Album List";
header_func($title);

$id = $_GET["username"];
$sql = "SELECT title AND albumid FROM Album where username = $username";
$result = mysqli_query($sql);
$num = mysqli_num_rows($result);

echo "<table>
<tr>
<th>Album</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
<td>row 1, cell 1</td>
<td>row 1, cell 2</td>
</tr>
<tr>
<td>row 2, cell 1</td>
<td>row 2, cell 2</td>
</tr>
</table>"
