<?php
include ("connect.php");
$id=$_GET['id'];
$delete="delete from fusion where id='$id'";
mysqli_query($db, $delete);
header("location: sponsors.php");

?>
