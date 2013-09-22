<?php
include lib.php

$id = $_GET["username"];
$title = "Album List of ".$id;
head_func($title);

$sql = "SELECT title FROM Album where username = $id";
$result = mysqli_query($sql);
$num = mysql_num_rows($result);

for($i = 0; $i < $num; $i++)
{
	$album_title = mysql_result($result,$i,"title");
	echo <tr><td> $album_title </td></tr>;
} 

mysql_close();
?>
