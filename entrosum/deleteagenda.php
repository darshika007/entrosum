<?php
include ("connect.php");
$id=$_GET['id'];
$delete="DELETE FROM agenda where aid='$id'";
$res=mysqli_query($db, $delete) or die(mysqli_error($db));
echo $res;

?>
