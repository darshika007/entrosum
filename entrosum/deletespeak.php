<?php
include ("connect.php");
$id=$_GET['id'];
$delete="delete from speakers where id='$id'";
mysqli_query($db, $delete);
header("location: speakers.php");

?>
