<?php
include('connect.php');
$name= $_POST['name'];
$email= $_POST['email'];
$org= $_POST['org'];
$contact= $_POST['contact'];


$query="select count(*)as cnt from register where email='".$email."'";
$result=mysqi_query($query,$conn);
$row=mysqli_fetch_array($result);
if ($row['cnt']) {
  // code...?>
    <div class="alert alert-warning">
      <strong>Already regstered!</strong> Email exists.
    </div>
  <?php
}else {
  // code...
    $query="insert into register(name,email,organisation,contact)values('$name','$email','$org','$contact')";
    $res=mysqli_query($db,$query) or die(mysqli_error($db));
    //$res=1;
    if ($res) {
    ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Registered.
      </div>
    <?php
    }else {
    ?>
        <div class="alert alert-danger">
          <strong>Failed!</strong> Try again.
        </div>
    <?php
    }
  }
?>
