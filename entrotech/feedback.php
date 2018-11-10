<?php
//include('connect.php');
$name= $_POST['name'];
$email= $_POST['email'];
$org= $_POST['org'];
$contact= $_POST['contact'];
$feed= $_POST['feed'];

//$query="insert into feedback()values('$name','$email','$org','$contact','$feed')";
//$res=mysqi_query($query,$conn);
$res=1;
if ($res) {
?>
  <div class="alert alert-success">
    <strong>Success!</strong> Feedback Submitted.
  </div>
<?php
}else {
?>
    <div class="alert alert-danger">
      <strong>Failed!</strong> Try again.
    </div>
<?php
}
?>
