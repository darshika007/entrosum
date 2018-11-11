<?php
$var1=$_GET['PKid'];
$var2="---ignored---";


include('connect.php');
$query="update queries set ans='".$var2."' where id=".$var1;
mysqli_query($db,$query) or die(mysqli_error($db));
header('location:queries.php');
 ?>
