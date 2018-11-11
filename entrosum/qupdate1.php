<?php
$var1=$_POST['PKid'];
$var2=$_POST['textarea'];
$email=$_POST['email'];

include('connect.php');
$query="update queries set ans='".$var2."', ansby='ADMIN' where id=".$var1;
$result=mysqli_query($db,$query) or die(mysqli_error($db));

if ($result) {
  $to = $email;
  $subject = "";

    $txt = "Dear User,<br>
            Answer for or your query:<br>'$var2'";
            if (mail($to,$subject,$txt)) {
              header("location:query.php");
            }else {
              echo "Mail couldn't be sent try again";
            }
  }

header('location:query.php');

 ?>
