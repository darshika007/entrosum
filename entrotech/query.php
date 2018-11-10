<?php
include('connect.php');
$email= $_POST['email'];
$org= $_POST['org'];
$contact= $_POST['contact'];
$querydata= $_POST['query'];
$type=$_POST['type'];
$name= $_POST['name'];

/*$name= "sdsdfdsf";
$email= "sdsdfdsf";
$org= "sdsdfdsf";
$contact= 7894561230;
$querydata= "sdsdfdsf";
$type="sdsdfdsf";*/


$query="insert into queries(name,email,organisation,contact,query,type)values('$name','$email','$org','$contact','$querydata','$type')";
$res=mysqli_query($db,$query) or die(mysqli_error($db));
//$res=1;
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
