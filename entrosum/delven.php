<?php
include ("connect.php");
$id=$_GET['id'];
$delete="delete from venue where vid='$id'";
mysqli_query($db, $delete);
header("location: venue.php");

?>
